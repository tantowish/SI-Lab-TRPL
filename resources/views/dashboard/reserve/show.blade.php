@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')

    <div class="p-8 lg:px-16">
        @if (session('error'))
        <div class="mb-5 p-4 text-sm bg-[#EFC1B9] border-l-8 border-redpallete">
            <p>{{ session('error') }}</p>
        </div> 
        @endif

        <div class="flex flex-wrap gap-2 mb-5">
            <a href="{{ route('reserve.accept', $reserve) }}" class="flex flex-wrap items-center text-white px-2 py-1 rounded bg-green-400">
                <svg class="mr-1" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                <span>Accept</span>
            </a>
            <a href="{{ route('reserve.reject', $reserve) }}" class="flex flex-wrap items-center text-white px-2 py-1 rounded bg-redpallete">
                <svg class="mr-1" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                <span>Reject</span>
            </a>
        </div>
        <div class="flex flex-col gap-1 mb-6">
            <h4 class="font-semibold">Peminjam Ruang {{ $reserve->laboratorium->laboratorium_name }}</h4>
            <p>{{ $reserve->user->name }}</p>
            <p>{{ $datetime }}</p>
            <p>Status : {{ $reserve->labReserve[0]->status }}</p>
        </div>     
        <div class="bg-white py-2 mb-16">
            <div class="flex flex-wrap items-center gap-4">
                <span class="bg-main h-8 w-4"></span>
                <h1 class="font-semibold">Lihat Dokumen</h1>
            </div>
            <a class="ml-8 text-teal-500 hover:text-main" target="_blank" href="{{ route('reserve.doc', $reserve) }}">link dokumen</a>   
        </div> 
        <a class="w-fit border bg-prev text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('reserve.index') }}">
            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Kembali
        </a>
    </div>
@endsection