@extends('backend.layouts.app')

@section('title', 'Create Project')

@section('content')
    <div class="p-6 animate-fade-in">
        <div class="max-w-4xl mx-auto bg-gray-900 border border-gray-800 rounded-2xl p-6">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h1 class="text-2xl font-bold text-white">Create Project</h1>
                    <p class="text-sm text-gray-400 mt-1">Add a new project and track it in real workflow.</p>
                </div>
                <a href="{{ route('projects.index') }}" class="px-4 py-2 bg-gray-800 hover:bg-gray-700 rounded-lg text-sm">
                    Back
                </a>
            </div>

            <form action="{{ route('projects.store') }}" method="POST">
                @csrf
                @include('backend.projects.form')

                <div class="mt-6 flex items-center gap-3">
                    <button type="submit" class="px-5 py-2 bg-red-600 hover:bg-red-700 rounded-lg text-white text-sm font-medium">
                        Save Project
                    </button>
                    <a href="{{ route('projects.index') }}" class="px-5 py-2 bg-gray-800 hover:bg-gray-700 rounded-lg text-sm">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
