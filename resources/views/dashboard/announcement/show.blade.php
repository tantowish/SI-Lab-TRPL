@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
<div class="p-8 lg:px-32 flex flex-col items-stretch">
    <div class="bg-white border-2">
        @foreach ($announcements as $key => $announcement)
        <div class="w-full p-4 @if($key % 2 == 0) bg-main @endif">
            <h3 class="font-medium mb-1">{{ $announcement->title }}</h3>
            <p class="mb-2 {{ $key % 2 == 0 ? 'text-gray-600' : 'text-gray-500' }}">By {{ $announcement->labAdministrator->name }}</p>
            <p class="text-justify">{{ $announcement->description }}</p>
            <p class="mt-4 {{ $key % 2 == 0 ? 'text-gray-600' : 'text-gray-500' }}">{{ $announcement->created_at }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
