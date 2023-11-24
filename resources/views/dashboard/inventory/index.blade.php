@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 lg:px-16 flex flex-wrap gap-8">
        @foreach ($laboratorium as $laboratorium)
        <div class="max-w-xs mx-auto lg:mx-0 lg:max-w-[200px] bg-white border border-gray-200  rounded shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="image-container">
                <img class="rounded-t object-cover w-full h-32" src="{{ asset('storage/img/laboratorium/'.$laboratorium->photo) }}" alt="" />
            </div>
            <div class="p-5 h-16">
                <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">{{ $laboratorium->laboratorium_name }}</h5>
            </div>
            <div class="p-5">
                <a href="{{ route('inventory.show', $laboratorium->laboratorium_id) }}" class="w-full flex flex-wrap justify-center px-3 pb-2 pt-2.5 text-sm font-medium text-center text-white bg-main rounded hover:bg-teal-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <p>Selengkapnya</p>
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection