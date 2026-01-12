@extends('backend.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="h-full overflow-y-auto">
        <div class="p-6 animate-fade-in">
            <!-- Stats Grid -->
            @include('backend.component.grid')

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                <!-- Left Column -->
                @include('backend.component.activity')

                <!-- Right Column -->
                <div class="space-y-6">
                    <!-- Team Status -->
                    @include('backend.component.teamstatus')

                    <!-- Quick Actions -->
                   {{-- @include('backend.component.quickactions') --}}
                </div>
            </div>

            <!-- Recent Projects Table -->
            @include('backend.component.recentprojects')
        </div>
    </div>

    <style>
        /* Existing animations */
        .progress-bar-animate {
            background-size: 200% 100%;
            animation: progressAnimation 2s ease infinite;
        }

        @keyframes progressAnimation {
            0% { background-position: 100% 0; }
            100% { background-position: -100% 0; }
        }

        .project-row {
            transition: all 0.2s ease;
        }

        .project-row:hover {
            transform: translateX(4px);
        }

        @keyframes statusPulse {
            0%, 100% { 
                opacity: 1;
                transform: scale(1);
            }
            50% { 
                opacity: 0.5;
                transform: scale(1.1);
            }
        }

        .w-2.h-2.animate-pulse {
            animation: statusPulse 2s infinite;
        }

        .toggle-switch {
            position: relative;
            width: 44px;
            height: 24px;
            appearance: none;
            background: #374151;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .toggle-switch:checked {
            background: #10b981;
        }

        .toggle-switch::before {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: white;
            top: 2px;
            left: 2px;
            transition: all 0.3s ease;
        }

        .toggle-switch:checked::before {
            transform: translateX(20px);
        }

        .filter-dropdown, .sort-dropdown, .team-filter-dropdown {
            animation: dropdownSlide 0.2s ease;
        }

        @keyframes dropdownSlide {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #projectSearch:focus {
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }

        .action-btn, .team-action-btn {
            transition: all 0.2s ease;
        }

        .action-btn:hover, .team-action-btn:hover {
            transform: scale(1.1);
        }

        @keyframes priorityPulse {
            0%, 100% { 
                box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.7);
            }
            70% { 
                box-shadow: 0 0 0 6px rgba(239, 68, 68, 0);
            }
        }

        .bg-red-900\/30.text-red-300 {
            animation: priorityPulse 2s infinite;
        }

        .progress-gradient {
            background: linear-gradient(90deg, 
                #ef4444 0%, 
                #f59e0b 25%, 
                #10b981 50%, 
                #3b82f6 75%, 
                #8b5cf6 100%
            );
            background-size: 200% 100%;
            animation: gradientFlow 3s ease infinite;
        }

        @keyframes gradientFlow {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3),
                        0 10px 10px -5px rgba(0, 0, 0, 0.2);
        }

        .glass-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .timeline-container {
            scrollbar-width: thin;
            scrollbar-color: #4f46e5 #1f2937;
        }

        .timeline-container::-webkit-scrollbar {
            width: 6px;
        }

        .timeline-container::-webkit-scrollbar-track {
            background: #1f2937;
            border-radius: 3px;
        }

        .timeline-container::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #7c3aed, #4f46e5);
            border-radius: 3px;
        }

        @keyframes gentlePulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        .animate-gentle-pulse {
            animation: gentlePulse 2s ease-in-out infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .gradient-animate {
            background: linear-gradient(-45deg, #dc2626, #7f1d1d, #991b1b, #dc2626);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        .overflow-x-auto::-webkit-scrollbar {
            height: 8px;
        }

        .overflow-x-auto::-webkit-scrollbar-track {
            background: #1f2937;
            border-radius: 4px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb {
            background: linear-gradient(to right, #dc2626, #7f1d1d);
            border-radius: 4px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to right, #ef4444, #dc2626);
        }

        /* Quick Actions Specific Styles */
        .min-w-\[200px\] {
            min-width: 200px;
        }

        .transition-transform {
            transition-property: transform;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .transition-colors {
            transition-property: background-color, border-color, color, fill, stroke;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .quick-action-btn:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5);
        }

        @keyframes spin-slow {
            to { transform: rotate(360deg); }
        }

        .animate-spin-slow {
            animation: spin-slow 3s linear infinite;
        }

        /* Responsive adjustments for quick actions */
        @media (max-width: 1536px) {
            .min-w-\[200px\] {
                min-width: 180px;
            }
        }

        @media (max-width: 1280px) {
            .flex-wrap > div {
                flex: 1 0 calc(50% - 1rem);
                min-width: 100%;
            }
        }

        @media (max-width: 768px) {
            .grid-cols-4 {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .lg\:grid-cols-4 {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .lg\:grid-cols-2 {
                grid-template-columns: 1fr;
            }
            
            .flex-wrap > div {
                flex: 1 0 100%;
            }
            
            .timeline-container {
                max-height: 400px;
            }
        }

        @media (max-width: 1024px) {
            .projects-table {
                min-width: 1200px;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize projects table
            const projectsTable = document.querySelector('.projects-table');
            const projectRows = document.querySelectorAll('.project-row');
            const projectSearch = document.getElementById('projectSearch');
            const filterButtons = document.querySelectorAll('.filter-status, .filter-priority');
            const sortOptions = document.querySelectorAll('.sort-option');
            const actionButtons = document.querySelectorAll('.action-btn');
            const emptyState = document.getElementById('emptyState');
            const tableBody = document.querySelector('tbody');
            let liveInterval;

            // Toggle dropdowns
            document.querySelectorAll('.activity-filter-btn, .team-filter-btn, .project-filter-btn, .project-sort-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const dropdown = this.nextElementSibling;
                    dropdown.classList.toggle('hidden');
                });
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', function() {
                document.querySelectorAll('.filter-dropdown, .sort-dropdown, .team-filter-dropdown').forEach(dropdown => {
                    dropdown.classList.add('hidden');
                });
            });

            // Search functionality
            if (projectSearch) {
                projectSearch.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    let visibleRows = 0;

                    projectRows.forEach(row => {
                        const projectName = row.querySelector('h4').textContent.toLowerCase();
                        const clientName = row.querySelector('.text-sm.font-medium').textContent.toLowerCase();
                        const description = row.querySelector('.text-xs.text-gray-400').textContent.toLowerCase();
                        
                        if (projectName.includes(searchTerm) || 
                            clientName.includes(searchTerm) || 
                            description.includes(searchTerm)) {
                            row.style.display = '';
                            visibleRows++;
                        } else {
                            row.style.display = 'none';
                        }
                    });

                    // Show/hide empty state
                    toggleEmptyState(visibleRows);
                });
            }

            // Filter by status
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filterType = this.classList.contains('filter-status') ? 'status' : 'priority';
                    const filterValue = this.dataset[filterType];
                    
                    // Toggle active state
                    if (filterType === 'status') {
                        document.querySelectorAll('.filter-status').forEach(btn => btn.classList.remove('active'));
                    } else {
                        document.querySelectorAll('.filter-priority').forEach(btn => btn.classList.remove('active'));
                    }
                    
                    this.classList.add('active');
                    
                    // Apply filters
                    applyFilters();
                });
            });

            // Sort functionality
            sortOptions.forEach(option => {
                option.addEventListener('click', function() {
                    // Remove active class from all options
                    sortOptions.forEach(opt => opt.classList.remove('active'));
                    // Add active class to clicked option
                    this.classList.add('active');
                    
                    const sortBy = this.dataset.sort;
                    sortProjects(sortBy);
                });
            });

            // Action button functionality
            actionButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const action = this.dataset.action;
                    const row = this.closest('.project-row');
                    const projectName = row.querySelector('h4').textContent;
                    
                    handleProjectAction(action, projectName, row);
                });
            });

            // Row click for details
            projectRows.forEach(row => {
                row.addEventListener('click', function(e) {
                    if (!e.target.closest('button') && !e.target.closest('a')) {
                        const projectName = this.querySelector('h4').textContent;
                        openProjectDetails(projectName);
                    }
                });
                
                // Add hover effect
                row.addEventListener('mouseenter', function() {
                    this.style.backgroundColor = 'rgba(31, 41, 55, 0.5)';
                });
                
                row.addEventListener('mouseleave', function() {
                    this.style.backgroundColor = '';
                });
            });

            // Export CSV functionality
            const exportButton = document.querySelector('.export-csv-btn');
            if (exportButton) {
                exportButton.addEventListener('click', exportProjectsToCSV);
            }

            // Pagination functionality
            const pageSelect = document.querySelector('.page-select');
            if (pageSelect) {
                pageSelect.addEventListener('change', function() {
                    loadProjectsPage(parseInt(this.value));
                });
            }

            // Auto-refresh toggle
            const toggleSwitch = document.querySelector('.toggle-switch');
            if (toggleSwitch) {
                toggleSwitch.addEventListener('change', function() {
                    if (this.checked) {
                        startAutoRefresh();
                    } else {
                        stopAutoRefresh();
                    }
                });
            }

            // Clear filters button
            const clearFiltersBtn = document.querySelector('.clear-filters-btn');
            if (clearFiltersBtn) {
                clearFiltersBtn.addEventListener('click', function() {
                    document.querySelectorAll('.filter-status, .filter-priority').forEach(btn => {
                        btn.classList.remove('active');
                        if (btn.dataset.status === 'active' || btn.dataset.priority === 'high') {
                            btn.classList.add('active');
                        }
                    });
                    projectSearch.value = '';
                    applyFilters();
                });
            }

            // Activity filtering
            document.querySelectorAll('.activity-filter').forEach(filter => {
                filter.addEventListener('change', function() {
                    const type = this.dataset.type;
                    const checked = this.checked;
                    
                    if (type === 'all') {
                        // Show/hide all activities
                        document.querySelectorAll('.activity-item').forEach(item => {
                            item.style.display = checked ? 'block' : 'none';
                        });
                    } else {
                        // Filter specific types
                        document.querySelectorAll(`.activity-item[data-type="${type}"]`).forEach(item => {
                            item.style.display = checked ? 'block' : 'none';
                        });
                    }
                });
            });

            // Live feed button
            const liveFeedBtn = document.querySelector('.live-feed-btn');
            if (liveFeedBtn) {
                liveFeedBtn.addEventListener('click', function() {
                    if (this.classList.contains('live-active')) {
                        clearInterval(liveInterval);
                        this.classList.remove('live-active');
                        this.innerHTML = '<i class="fas fa-sync-alt mr-2"></i>Live Feed';
                        showNotification('Live feed stopped', 'info');
                    } else {
                        this.classList.add('live-active');
                        this.innerHTML = '<i class="fas fa-stop mr-2"></i>Stop Live';
                        startLiveFeed();
                        showNotification('Live feed started', 'success');
                    }
                });
            }

            // Reaction buttons
            document.querySelectorAll('.reaction-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const reaction = this.dataset.reaction;
                    const icon = this.querySelector('i');
                    
                    // Toggle reaction
                    if (icon.classList.contains('text-blue-400') || 
                        icon.classList.contains('text-yellow-400')) {
                        icon.className = reaction === 'like' ? 
                            'fas fa-thumbs-up text-gray-400 hover:text-blue-400' :
                            'fas fa-party-horn text-gray-400 hover:text-yellow-400';
                    } else {
                        icon.className = reaction === 'like' ?
                            'fas fa-thumbs-up text-blue-400' :
                            'fas fa-party-horn text-yellow-400';
                    }
                });
            });

            // Team Status Interactions
            const teamMembers = document.querySelectorAll('.team-member-card');
            const teamRefreshBtn = document.querySelector('.team-refresh-btn');
            const teamFilterCheckboxes = document.querySelectorAll('.team-status-filter');
            const viewTeamBtn = document.querySelector('.view-team-btn');

            teamMembers.forEach(member => {
                member.addEventListener('click', function(e) {
                    if (!e.target.closest('button')) {
                        const memberName = this.querySelector('h4').textContent;
                        showNotification(`Opening ${memberName}'s profile`, 'info');
                    }
                });
            });

            // Team refresh button
            if (teamRefreshBtn) {
                teamRefreshBtn.addEventListener('click', function() {
                    this.classList.add('animate-spin');
                    setTimeout(() => {
                        this.classList.remove('animate-spin');
                        showNotification('Team status refreshed', 'success');
                    }, 1000);
                });
            }

            // Team filter checkboxes
            teamFilterCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    filterTeamMembers();
                });
            });

            // View full team button
            if (viewTeamBtn) {
                viewTeamBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    showNotification('Opening full team view', 'info');
                });
            }

            // Quick Actions
            const quickActionButtons = document.querySelectorAll('.quick-action-btn');
            const clearRecentActionsBtn = document.querySelector('.clear-recent-actions');
            const aiSuggestion = document.querySelector('.ai-suggestion');

            // Responsive behavior for quick actions
            function handleQuickActionsResize() {
                const quickActionsContainer = document.querySelector('.flex-wrap');
                const actions = document.querySelectorAll('.flex-wrap > div');
                
                if (window.innerWidth < 1280) {
                    actions.forEach(action => {
                        action.classList.remove('min-w-[200px]');
                        action.classList.add('w-full');
                    });
                } else {
                    actions.forEach(action => {
                        action.classList.add('min-w-[200px]');
                        action.classList.remove('w-full');
                    });
                }
            }

            // Call on load and resize
            window.addEventListener('load', handleQuickActionsResize);
            window.addEventListener('resize', handleQuickActionsResize);

            // Refresh quick actions
            document.querySelector('.quick-action-refresh')?.addEventListener('click', function() {
                this.classList.add('animate-spin');
                
                // Simulate refresh
                setTimeout(() => {
                    this.classList.remove('animate-spin');
                    showNotification('Quick actions refreshed', 'success');
                }, 1000);
            });

            quickActionButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const action = this.dataset.action;
                    
                    // Show loading animation
                    const icon = this.querySelector('.fa-plus, .fa-file-alt, .fa-calendar-check, .fa-chart-line, .fa-star');
                    const originalIcon = icon?.className || '';
                    if (icon) {
                        icon.className = 'fas fa-spinner fa-spin text-xl';
                    }
                    
                    // Simulate action with timeout
                    setTimeout(() => {
                        if (icon) {
                            icon.className = originalIcon;
                        }
                        
                        switch(action) {
                            case 'new-task':
                                showNotification('Opening new task form', 'info');
                                break;
                            case 'generate-report':
                                showNotification('Generating AI report...', 'info');
                                break;
                            case 'schedule-meeting':
                                showNotification('Opening schedule meeting', 'info');
                                break;
                            case 'view-analytics':
                                showNotification('Navigating to analytics', 'info');
                                break;
                        }
                        
                        // Add to recent actions
                        addToRecentActions(action);
                    }, 500);
                });
            });

            // Clear recent actions
            if (clearRecentActionsBtn) {
                clearRecentActionsBtn.addEventListener('click', function() {
                    document.querySelector('.recent-actions-list').innerHTML = '';
                    showNotification('Recent actions cleared', 'info');
                });
            }

            // AI suggestion click
            if (aiSuggestion) {
                aiSuggestion.addEventListener('click', function() {
                    showNotification('Implementing AI suggestion...', 'info');
                });
            }

            // Function to apply multiple filters
            function applyFilters() {
                const activeStatusFilter = document.querySelector('.filter-status.active');
                const activePriorityFilter = document.querySelector('.filter-priority.active');
                
                const statusFilter = activeStatusFilter ? activeStatusFilter.dataset.status : 'all';
                const priorityFilter = activePriorityFilter ? activePriorityFilter.dataset.priority : 'all';
                
                let visibleRows = 0;
                
                projectRows.forEach(row => {
                    const rowStatus = row.dataset.status;
                    const rowPriority = row.dataset.priority;
                    
                    let statusMatch = statusFilter === 'all' || rowStatus === statusFilter;
                    let priorityMatch = priorityFilter === 'all' || rowPriority === priorityFilter;
                    
                    if (statusMatch && priorityMatch) {
                        row.style.display = '';
                        visibleRows++;
                    } else {
                        row.style.display = 'none';
                    }
                });
                
                toggleEmptyState(visibleRows);
            }

            // Function to sort projects
            function sortProjects(sortBy) {
                const rowsArray = Array.from(projectRows);
                
                rowsArray.sort((a, b) => {
                    switch(sortBy) {
                        case 'deadline':
                            return compareDeadlines(a, b);
                        case 'progress':
                            return compareProgress(a, b);
                        case 'priority':
                            return comparePriority(a, b);
                        case 'name':
                            return compareNames(a, b);
                        default:
                            return 0;
                    }
                });
                
                // Reorder DOM
                rowsArray.forEach(row => {
                    tableBody.appendChild(row);
                });
            }

            // Comparison functions
            function compareDeadlines(a, b) {
                const aDate = new Date(a.querySelector('.text-sm.text-white').textContent);
                const bDate = new Date(b.querySelector('.text-sm.text-white').textContent);
                return aDate - bDate;
            }

            function compareProgress(a, b) {
                const aProgress = parseInt(a.dataset.progress);
                const bProgress = parseInt(b.dataset.progress);
                return bProgress - aProgress; // Descending order
            }

            function comparePriority(a, b) {
                const priorityOrder = { high: 3, medium: 2, low: 1 };
                const aPriority = a.dataset.priority;
                const bPriority = b.dataset.priority;
                return priorityOrder[bPriority] - priorityOrder[aPriority];
            }

            function compareNames(a, b) {
                const aName = a.querySelector('h4').textContent.toLowerCase();
                const bName = b.querySelector('h4').textContent.toLowerCase();
                return aName.localeCompare(bName);
            }

            // Function to handle project actions
            function handleProjectAction(action, projectName, row) {
                const actions = {
                    view: () => openProjectDetails(projectName),
                    edit: () => showNotification(`Editing ${projectName}`, 'warning'),
                    urgent: () => markAsUrgent(projectName, row),
                    resources: () => allocateResources(projectName, row),
                    complete: () => completeProject(projectName, row)
                };

                if (actions[action]) {
                    actions[action]();
                }
            }

            // Action handler functions
            function openProjectDetails(projectName) {
                showNotification(`Opening details for ${projectName}`, 'info');
            }

            function markAsUrgent(projectName, row) {
                const priorityBadge = row.querySelector('.px-2.py-1');
                priorityBadge.className = 'px-2 py-1 bg-red-900/30 text-red-300 text-xs rounded-full animate-pulse';
                priorityBadge.textContent = 'URGENT';
                showNotification(`${projectName} marked as urgent!`, 'error');
            }

            function allocateResources(projectName, row) {
                showNotification(`Allocating resources to ${projectName}`, 'info');
                setTimeout(() => {
                    const progressBar = row.querySelector('.progress-bar-animate, .bg-gradient-to-r');
                    const progressText = row.querySelector('.text-xs.text-gray-400 span:first-child');
                    if (progressBar && progressText) {
                        const currentProgress = parseInt(progressText.textContent);
                        const newProgress = Math.min(currentProgress + 10, 100);
                        
                        progressBar.style.width = `${newProgress}%`;
                        progressText.textContent = `${newProgress}%`;
                        row.dataset.progress = newProgress;
                        
                        showNotification(`Resources allocated to ${projectName}. Progress: ${newProgress}%`, 'success');
                    }
                }, 1000);
            }

            function completeProject(projectName, row) {
                row.querySelector('.w-2.h-2').className = 'w-2 h-2 bg-green-500 rounded-full';
                row.querySelector('.text-sm').className = 'text-sm text-green-400';
                row.querySelector('.text-sm').textContent = 'Completed';
                row.dataset.status = 'completed';
                
                showNotification(`${projectName} marked as completed!`, 'success');
            }

            // Export to CSV
            function exportProjectsToCSV() {
                const rows = document.querySelectorAll('.project-row:not([style*="display: none"])');
                let csvContent = "Project,Client,Progress,Deadline,Budget,Status\n";
                
                rows.forEach(row => {
                    const project = row.querySelector('h4').textContent;
                    const client = row.querySelector('.text-sm.font-medium').textContent;
                    const progress = row.querySelector('.text-xs.text-gray-400 span:first-child').textContent;
                    const deadline = row.querySelector('.text-sm.text-white').textContent;
                    const budget = row.querySelector('.text-sm.text-white').textContent;
                    const status = row.querySelector('.text-sm').textContent;
                    
                    csvContent += `"${project}","${client}",${progress},"${deadline}",${budget},"${status}"\n`;
                });
                
                // Create download link
                const blob = new Blob([csvContent], { type: 'text/csv' });
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'projects_export.csv';
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                window.URL.revokeObjectURL(url);
                
                showNotification('Projects exported to CSV!', 'success');
            }

            // Pagination
            function loadProjectsPage(page) {
                showNotification(`Loading page ${page}...`, 'info');
            }

            // Auto-refresh functionality
            let refreshInterval;
            function startAutoRefresh() {
                refreshInterval = setInterval(() => {
                    updateRandomProjectProgress();
                }, 10000);
                
                showNotification('Auto-refresh enabled', 'success');
            }

            function stopAutoRefresh() {
                if (refreshInterval) {
                    clearInterval(refreshInterval);
                    showNotification('Auto-refresh disabled', 'info');
                }
            }

            function updateRandomProjectProgress() {
                const activeRows = document.querySelectorAll('.project-row[data-status="active"]:not([style*="display: none"])');
                if (activeRows.length === 0) return;
                
                const randomRow = activeRows[Math.floor(Math.random() * activeRows.length)];
                const progressBar = randomRow.querySelector('.progress-bar-animate, .bg-gradient-to-r');
                const progressText = randomRow.querySelector('.text-xs.text-gray-400 span:first-child');
                const changeText = randomRow.querySelector('.text-xs.text-gray-400 span:last-child');
                
                if (progressBar && progressText) {
                    const currentProgress = parseInt(progressText.textContent);
                    const increment = Math.floor(Math.random() * 3) + 1;
                    const newProgress = Math.min(currentProgress + increment, 100);
                    
                    progressBar.style.width = `${newProgress}%`;
                    progressText.textContent = `${newProgress}%`;
                    if (changeText) {
                        changeText.textContent = `+${increment}%`;
                        changeText.className = 'text-xs text-green-400';
                    }
                    randomRow.dataset.progress = newProgress;
                }
            }

            // Live feed simulation
            function startLiveFeed() {
                const timeline = document.querySelector('.timeline-container');
                let activityCount = 0;
                
                liveInterval = setInterval(() => {
                    activityCount++;
                    
                    const newActivity = document.createElement('div');
                    newActivity.className = 'timeline-item relative pl-8 pb-6 activity-item';
                    newActivity.dataset.type = 'system';
                    newActivity.innerHTML = `
                        <div class="absolute left-0 top-0 w-6 h-6 rounded-full bg-gradient-to-br from-green-600 to-green-800 flex items-center justify-center">
                            <i class="fas fa-sync-alt text-xs text-white animate-spin"></i>
                        </div>
                        <div class="bg-gray-800/50 rounded-xl p-4 animate-pulse">
                            <div class="flex justify-between items-start">
                                <div>
                                    <span class="font-semibold text-white">Live Update ${activityCount}</span>
                                    <p class="text-sm text-gray-400 mt-1">System is processing new data...</p>
                                </div>
                                <span class="text-xs text-gray-400">Just now</span>
                            </div>
                        </div>
                    `;
                    
                    timeline.insertBefore(newActivity, timeline.firstChild);
                    
                    setTimeout(() => {
                        newActivity.querySelector('.animate-pulse').classList.remove('animate-pulse');
                        newActivity.querySelector('.fa-sync-alt').classList.remove('animate-spin');
                        newActivity.querySelector('.fa-sync-alt').className = 'fas fa-check text-xs text-white';
                    }, 2000);
                    
                    const activities = timeline.querySelectorAll('.timeline-item');
                    if (activities.length > 10) {
                        activities[activities.length - 1].remove();
                    }
                }, 5000);
            }

            // Team member filtering
            function filterTeamMembers() {
                const showOnline = document.querySelector('.team-status-filter[data-status="online"]')?.checked || false;
                const showBusy = document.querySelector('.team-status-filter[data-status="busy"]')?.checked || false;
                const showAway = document.querySelector('.team-status-filter[data-status="away"]')?.checked || false;
                
                teamMembers.forEach(member => {
                    const status = member.dataset.status;
                    let shouldShow = false;
                    
                    if (status === 'online' && showOnline) shouldShow = true;
                    if (status === 'busy' && showBusy) shouldShow = true;
                    if (status === 'away' && showAway) shouldShow = true;
                    
                    member.style.display = shouldShow ? 'block' : 'none';
                });
            }

            // Add to recent actions
            function addToRecentActions(action) {
                const recentActions = document.querySelector('.recent-actions-list');
                const actions = {
                    'new-task': { icon: 'plus', text: 'Created new task', color: 'red' },
                    'generate-report': { icon: 'file-alt', text: 'Generated report', color: 'blue' },
                    'schedule-meeting': { icon: 'calendar-check', text: 'Scheduled meeting', color: 'green' },
                    'view-analytics': { icon: 'chart-line', text: 'Viewed analytics', color: 'purple' }
                };
                
                const actionData = actions[action];
                const actionElement = document.createElement('div');
                actionElement.className = 'flex items-center justify-between text-sm animate-fade-in';
                actionElement.innerHTML = `
                    <div class="flex items-center space-x-2">
                        <div class="w-6 h-6 bg-${actionData.color}-900/30 rounded flex items-center justify-center">
                            <i class="fas fa-${actionData.icon} text-${actionData.color}-500 text-xs"></i>
                        </div>
                        <span class="text-gray-300">${actionData.text}</span>
                    </div>
                    <span class="text-xs text-gray-400">Just now</span>
                `;
                
                recentActions.insertBefore(actionElement, recentActions.firstChild);
                
                if (recentActions.children.length > 5) {
                    recentActions.removeChild(recentActions.lastChild);
                }
            }

            // Empty state toggle
            function toggleEmptyState(visibleCount) {
                if (visibleCount === 0) {
                    emptyState.classList.remove('hidden');
                    tableBody.classList.add('hidden');
                } else {
                    emptyState.classList.add('hidden');
                    tableBody.classList.remove('hidden');
                }
            }

            // Notification system
            function showNotification(message, type) {
                const notification = document.createElement('div');
                notification.className = `fixed top-4 right-4 px-4 py-3 rounded-lg shadow-lg z-50 animate-fade-in ${
                    type === 'success' ? 'bg-green-900 text-green-100' :
                    type === 'error' ? 'bg-red-900 text-red-100' :
                    type === 'warning' ? 'bg-yellow-900 text-yellow-100' :
                    'bg-blue-900 text-blue-100'
                }`;
                notification.innerHTML = `
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-${
                            type === 'success' ? 'check-circle' :
                            type === 'error' ? 'exclamation-circle' :
                            type === 'warning' ? 'exclamation-triangle' : 'info-circle'
                        }"></i>
                        <span>${message}</span>
                    </div>
                `;
                
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    notification.classList.add('opacity-0', 'transition-opacity', 'duration-300');
                    setTimeout(() => notification.remove(), 300);
                }, 3000);
            }

            // Initialize auto-refresh if enabled
            if (toggleSwitch && toggleSwitch.checked) {
                startAutoRefresh();
            }
        });
    </script>
@endsection