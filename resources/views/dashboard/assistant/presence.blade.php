@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 lg:px-16">
        @if ($message == 'berhasil')
        <div id="success-message" class="p-4 mb-6 text-sm text-green-900 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success! </span>Berhasil presensi
        </div>
        @else
        <div class="p-4 mb-6 text-sm text-redpallete rounded-lg bg-red-200" role="alert">
            <span class="font-medium">Error! </span>Tidak berhasil presensi
        </div>
        @endif
        <a href="/dashboard" class="text-white px-3 py-1.5 bg-main rounded">
            <button>Go to Dashboard</button>
        </a>
    </div>
@endsection