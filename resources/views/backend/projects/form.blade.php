@php
    $projectData = $project ?? null;
@endphp

@if ($errors->any())
    <div class="mb-4 bg-red-900/30 border border-red-700/50 text-red-300 px-4 py-3 rounded-xl">
        <ul class="list-disc list-inside text-sm space-y-1">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
        <label class="block text-sm text-gray-300 mb-2">Project Name</label>
        <input type="text" name="name" value="{{ old('name', optional($projectData)->name) }}" required
            class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600">
    </div>

    <div>
        <label class="block text-sm text-gray-300 mb-2">Client Name</label>
        <input type="text" name="client_name" value="{{ old('client_name', optional($projectData)->client_name) }}" required
            class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600">
    </div>

    <div class="md:col-span-2">
        <label class="block text-sm text-gray-300 mb-2">Summary</label>
        <textarea name="summary" rows="3"
            class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600">{{ old('summary', optional($projectData)->summary) }}</textarea>
    </div>

    <div>
        <label class="block text-sm text-gray-300 mb-2">Status</label>
        <select name="status" required
            class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600">
            @foreach ($statuses as $status)
                <option value="{{ $status }}" @selected(old('status', optional($projectData)->status ?? 'pending') === $status)>
                    {{ ucfirst($status) }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="block text-sm text-gray-300 mb-2">Priority</label>
        <select name="priority" required
            class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600">
            @foreach ($priorities as $priority)
                <option value="{{ $priority }}" @selected(old('priority', optional($projectData)->priority ?? 'medium') === $priority)>
                    {{ ucfirst($priority) }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="block text-sm text-gray-300 mb-2">Progress (%)</label>
        <input type="number" min="0" max="100" name="progress"
            value="{{ old('progress', optional($projectData)->progress ?? 0) }}" required
            class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600">
    </div>

    <div>
        <label class="block text-sm text-gray-300 mb-2">Due Date</label>
        <input type="date" name="due_date"
            value="{{ old('due_date', optional(optional($projectData)->due_date)->format('Y-m-d')) }}"
            class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600">
    </div>

    <div>
        <label class="block text-sm text-gray-300 mb-2">Budget</label>
        <input type="number" step="0.01" min="0" name="budget" value="{{ old('budget', optional($projectData)->budget) }}"
            class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600">
    </div>

    <div>
        <label class="block text-sm text-gray-300 mb-2">Spent Budget</label>
        <input type="number" step="0.01" min="0" name="spent_budget"
            value="{{ old('spent_budget', optional($projectData)->spent_budget) }}"
            class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600">
    </div>

    <div class="md:col-span-2">
        <label class="inline-flex items-center gap-2 text-sm text-gray-300">
            <input type="checkbox" name="is_template" value="1"
                @checked(old('is_template', optional($projectData)->is_template ?? false))
                class="rounded border-gray-700 bg-gray-800 text-red-600 focus:ring-red-600">
            Save as project template
        </label>
    </div>
</div>
