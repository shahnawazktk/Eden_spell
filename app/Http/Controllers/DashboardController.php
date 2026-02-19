<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard', [
            'dashboardMetrics' => $this->buildMetrics(),
        ]);
    }

    public function live(): JsonResponse
    {
        $dashboardMetrics = $this->buildMetrics();
        $gridHtml = view('backend.component.grid', [
            'dashboardMetrics' => $dashboardMetrics,
        ])->render();

        return response()->json([
            'grid_html' => $gridHtml,
            'metrics' => $dashboardMetrics,
        ]);
    }

    private function buildMetrics(): array
    {
        $today = Carbon::today();
        $monthStart = Carbon::now()->startOfMonth();
        $lastMonthStart = Carbon::now()->subMonthNoOverflow()->startOfMonth();
        $lastMonthEnd = Carbon::now()->subMonthNoOverflow()->endOfMonth();

        $baseProjects = Project::query()->where('is_template', false);
        $openProjects = (clone $baseProjects)->whereIn('status', ['active', 'pending', 'delayed']);

        $activeProjectsCount = (clone $baseProjects)->where('status', 'active')->count();
        $activeProjectsCurrentMonth = (clone $baseProjects)
            ->where('status', 'active')
            ->whereBetween('created_at', [$monthStart, Carbon::now()])
            ->count();
        $activeProjectsLastMonth = (clone $baseProjects)
            ->where('status', 'active')
            ->whereBetween('created_at', [$lastMonthStart, $lastMonthEnd])
            ->count();

        $completionRate = round((float) ((clone $baseProjects)
            ->where('status', 'active')
            ->avg('progress') ?? 0), 1);

        $pendingTasksCount = (clone $baseProjects)->where('status', 'pending')->count();
        $pendingCurrentMonth = (clone $baseProjects)
            ->where('status', 'pending')
            ->whereBetween('created_at', [$monthStart, Carbon::now()])
            ->count();
        $pendingLastMonth = (clone $baseProjects)
            ->where('status', 'pending')
            ->whereBetween('created_at', [$lastMonthStart, $lastMonthEnd])
            ->count();

        $openCount = (clone $openProjects)->count();
        $overdueCount = (clone $openProjects)->whereDate('due_date', '<', $today)->count();
        $overdueRate = $openCount > 0 ? round(($overdueCount / $openCount) * 100, 1) : 0.0;

        $activeClientsCount = (clone $openProjects)->distinct('client_name')->count('client_name');
        $clientsCurrentMonth = (clone $openProjects)
            ->whereBetween('created_at', [$monthStart, Carbon::now()])
            ->distinct('client_name')
            ->count('client_name');
        $clientsLastMonth = (clone $openProjects)
            ->whereBetween('created_at', [$lastMonthStart, $lastMonthEnd])
            ->distinct('client_name')
            ->count('client_name');

        $completedCount = (clone $baseProjects)->where('status', 'completed')->count();
        $delayedCount = (clone $baseProjects)->where('status', 'delayed')->count();
        $satisfactionBase = $completedCount + $delayedCount;
        $satisfactionRate = $satisfactionBase > 0 ? round(($completedCount / $satisfactionBase) * 100, 1) : 100.0;

        $monthlyRevenue = (float) ((clone $baseProjects)
            ->whereBetween('updated_at', [$monthStart, Carbon::now()])
            ->sum('spent_budget') ?? 0);
        $lastMonthRevenue = (float) ((clone $baseProjects)
            ->whereBetween('updated_at', [$lastMonthStart, $lastMonthEnd])
            ->sum('spent_budget') ?? 0);
        $revenueTarget = 100000.0;
        $revenueTargetRate = $revenueTarget > 0 ? min(round(($monthlyRevenue / $revenueTarget) * 100, 1), 100) : 0.0;

        return [
            'active_projects_count' => $activeProjectsCount,
            'active_projects_change' => $this->percentChange($activeProjectsCurrentMonth, $activeProjectsLastMonth),
            'completion_rate' => $completionRate,
            'pending_tasks_count' => $pendingTasksCount,
            'pending_tasks_change' => $this->percentChange($pendingCurrentMonth, $pendingLastMonth),
            'overdue_rate' => $overdueRate,
            'active_clients_count' => $activeClientsCount,
            'active_clients_change' => $clientsCurrentMonth - $clientsLastMonth,
            'satisfaction_rate' => $satisfactionRate,
            'monthly_revenue' => $monthlyRevenue,
            'monthly_revenue_change' => $this->percentChange($monthlyRevenue, $lastMonthRevenue),
            'revenue_target_rate' => $revenueTargetRate,
        ];
    }

    private function percentChange(float|int $current, float|int $previous): float
    {
        $current = (float) $current;
        $previous = (float) $previous;

        if ($previous == 0.0) {
            return $current > 0 ? 100.0 : 0.0;
        }

        return round((($current - $previous) / abs($previous)) * 100, 1);
    }
}
