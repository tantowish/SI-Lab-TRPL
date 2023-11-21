@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 lg:px-16">
        @if (session('success'))
        <div id="success-message" class="p-4 mb-6 text-sm text-green-900 rounded-lg bg-green-200" role="alert">
            <span class="font-medium">Success! </span>{{ session('success') }}
        </div>
        @endif
        @if (session('reject'))
        <div id="success-message" class="p-4 mb-6 text-sm text-redpallete rounded-lg bg-red-200" role="alert">
            <span class="font-medium">Success! </span>{{ session('reject') }}
        </div>
        @endif
        @if (session('archive'))
        <div id="success-message" class="p-4 mb-6 text-sm text-yellow-600 rounded-lg bg-yellow-100" role="alert">
            <span class="font-medium">Success! </span>{{ session('archive') }}
        </div>
        @endif
        @if (session('data')->getTable()=='lab_administrators')       
        <div class="flex flex-wrap gap-2">
            @if ($project->status=='published')        
            <a href="{{ route('project.archive', $project->project_id) }}" class="flex flex-wrap items-center text-white px-2 py-1 rounded bg-green-400">
                <svg class="mr-1" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                <span>Archive</span>
            </a>
            @else
            <a href="{{ route('project.publish', $project->project_id) }}" class="flex flex-wrap items-center text-white px-2 py-1 rounded bg-green-400">
                <svg class="mr-1" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                <span>Publish</span>
            </a>
            <a href="{{ route('project.reject', $project->project_id) }}" class="flex flex-wrap items-center text-white px-2 py-1 rounded bg-redpallete">
                <svg class="mr-1" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                <span>Reject</span>
            </a>
            @endif
        </div>
        @endif
        <div class="flex flex-col gap-1 mb-6">
            <h2 class="font-semibold text-xl">Proyek {{ $project->project_name }}</h2>
            <p>{{ $project->userApplicant->name }}</p>
            <p>{{ \Carbon\Carbon::parse($project->start_date)->isoFormat('MMMM Y') }} - {{ $project->end_date ? \Carbon\Carbon::parse($project->end_date)->isoFormat(' MMMM Y') : 'Sekarang' }}</p>
            <p>Bidang: {{ implode(', ', $project->projectField->pluck('field.field_name')->toArray()) }}</p>

        </div>  
        <div class="bg-white py-2 mb-8">
            <div class="flex flex-wrap items-center gap-4 mb-6">
                <span class="bg-main h-8 w-4"></span>
                <h1 class="font-semibold">{{ $project->project_name }}</h1>
            </div>
            <div class="flex flex-wrap items-center gap-4">
                <span class="bg-main h-8 w-4"></span>
                <h1 class="font-semibold">Deskripsi</h1>
                <p class="w-full ml-8">{{ $project->description }}</p>
            </div>
        </div> 
        <div class="bg-white py-2 mb-16">
            <div class="flex flex-wrap items-center gap-4">
                <span class="bg-main h-8 w-4"></span>
                <h1 class="font-semibold">Lihat Dokumen</h1>
            </div>
            <a class="ml-8 text-teal-500 hover:text-main" target="_blank" href="{{ $project->document_link }}">link</a>   
        </div> 

        <a class="w-fit border bg-prev text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('project.index') }}">
            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Kembali
        </a>
    </div>
    <script src="{{ asset('assets/js/notif.js') }}"></script>
@endsection