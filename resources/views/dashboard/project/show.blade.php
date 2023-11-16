@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 lg:px-16">
        @if (session('data')->getTable()=='lab_administrators')       
        <div class="flex flex-wrap gap-2">
            
        </div>
        @endif
        <div class="flex flex-col gap-1 mb-6">
            <h4 class="font-semibold">Proyek {{ $project->project_name }}</h4>
            <p>{{ $project->projectHistory[0]->user->name }}</p>
            {{ \Carbon\Carbon::parse($project->start_date)->isoFormat('MMMM Y') }} - {{ $project->end_date ? \Carbon\Carbon::parse($project->end_date)->isoFormat(' MMMM Y') : 'Sekarang' }}
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
@endsection