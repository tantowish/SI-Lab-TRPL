@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 lg:px-16">
        <div class="flex flex-item justify-center lg:h-[500px] items-center">
            {{ $qr }}
        </div>
        <a class="w-fit border bg-prev text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('assistant.show', $schedule->schedule_id) }}">
            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Kembali
        </a>
    </div>
@endsection