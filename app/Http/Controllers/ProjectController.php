<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ProjectController extends Controller
{
    private const STATUSES = ['active', 'pending', 'delayed', 'completed', 'archived'];
    private const PRIORITIES = ['low', 'medium', 'high'];

    public function index(Request $request): View
    {
        return $this->renderScope('all', $request);
    }

    public function active(Request $request): View
    {
        return $this->renderScope('active', $request);
    }

    public function archived(Request $request): View
    {
        return $this->renderScope('archived', $request);
    }

    public function templates(Request $request): View
    {
        return $this->renderScope('templates', $request);
    }

    public function live(Request $request): JsonResponse
    {
        $scope = (string) $request->query('scope', 'all');
        if (!in_array($scope, ['all', 'active', 'archived', 'templates'], true)) {
            $scope = 'all';
        }

        $data = $this->buildScopeData($scope, $request);

        $tableHtml = view('backend.projects.table', $data)->render();

        return response()->json([
            'table_html' => $tableHtml,
            'scope_project_count' => $data['scopeProjectCount'],
            'critical_project_count' => $data['criticalProjectCount'],
            'on_track_project_count' => $data['onTrackProjectCount'],
            'delayed_project_count' => $data['delayedProjectCount'],
        ]);
    }

    public function create(): View
    {
        return view('backend.projects.create', [
            'statuses' => self::STATUSES,
            'priorities' => self::PRIORITIES,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateRequest($request);
        $validated['is_template'] = $request->boolean('is_template');

        Project::create($validated);

        return redirect()
            ->route($validated['is_template'] ? 'projects.templates' : 'projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function edit(Project $project): View
    {
        return view('backend.projects.edit', [
            'project' => $project,
            'statuses' => self::STATUSES,
            'priorities' => self::PRIORITIES,
        ]);
    }

    public function update(Request $request, Project $project): RedirectResponse
    {
        $validated = $this->validateRequest($request);
        $validated['is_template'] = $request->boolean('is_template');

        $project->update($validated);

        return redirect()
            ->route($validated['is_template'] ? 'projects.templates' : 'projects.index')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project): RedirectResponse
    {
        $isTemplate = $project->is_template;
        $project->delete();

        return redirect()
            ->route($isTemplate ? 'projects.templates' : 'projects.index')
            ->with('success', 'Project deleted successfully.');
    }

    private function renderScope(string $scope, Request $request): View
    {
        $data = $this->buildScopeData($scope, $request);

        return view('backend.projects.index', $data);
    }

    private function buildScopeData(string $scope, Request $request): array
    {
        $scopedQuery = Project::query()->latest('updated_at');
        $scopedQuery = $this->applyScope($scopedQuery, $scope);
        $scopedQuery = $this->applyFilters($scopedQuery, $request);

        $projects = $scopedQuery->paginate(10)->withQueryString();

        $statsQuery = Project::query();
        $statsQuery = $this->applyScope($statsQuery, $scope);
        $statsQuery = $this->applyFilters($statsQuery, $request);

        $scopeProjectCount = (clone $statsQuery)->count();
        $criticalProjectCount = (clone $statsQuery)->where('priority', 'high')->count();
        $delayedProjectCount = (clone $statsQuery)->where('status', 'delayed')->count();
        $onTrackProjectCount = (clone $statsQuery)->whereIn('status', ['active', 'completed'])->count();

        return [
            'scope' => $scope,
            'projects' => $projects,
            'scopeProjectCount' => $scopeProjectCount,
            'criticalProjectCount' => $criticalProjectCount,
            'delayedProjectCount' => $delayedProjectCount,
            'onTrackProjectCount' => $onTrackProjectCount,
            'statuses' => self::STATUSES,
            'priorities' => self::PRIORITIES,
            'filters' => [
                'search' => (string) $request->query('search', ''),
                'status' => (string) $request->query('status', ''),
                'priority' => (string) $request->query('priority', ''),
            ],
        ];
    }

    private function applyScope($query, string $scope)
    {
        if ($scope === 'templates') {
            return $query->where('is_template', true);
        }

        $query->where('is_template', false);

        if ($scope === 'active') {
            $query->where('status', 'active');
        }

        if ($scope === 'archived') {
            $query->where('status', 'archived');
        }

        return $query;
    }

    private function applyFilters($query, Request $request)
    {
        $search = trim((string) $request->query('search', ''));
        $status = (string) $request->query('status', '');
        $priority = (string) $request->query('priority', '');

        if ($search !== '') {
            $query->where(function ($builder) use ($search) {
                $builder->where('name', 'like', '%' . $search . '%')
                    ->orWhere('client_name', 'like', '%' . $search . '%')
                    ->orWhere('summary', 'like', '%' . $search . '%');
            });
        }

        if (in_array($status, self::STATUSES, true)) {
            $query->where('status', $status);
        }

        if (in_array($priority, self::PRIORITIES, true)) {
            $query->where('priority', $priority);
        }

        return $query;
    }

    private function validateRequest(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'client_name' => ['required', 'string', 'max:120'],
            'summary' => ['nullable', 'string', 'max:2000'],
            'status' => ['required', Rule::in(self::STATUSES)],
            'priority' => ['required', Rule::in(self::PRIORITIES)],
            'progress' => ['required', 'integer', 'min:0', 'max:100'],
            'budget' => ['nullable', 'numeric', 'min:0'],
            'spent_budget' => ['nullable', 'numeric', 'min:0'],
            'due_date' => ['nullable', 'date'],
        ]);
    }
}
