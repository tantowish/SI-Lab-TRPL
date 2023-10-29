@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
<div class="p-8 lg:px-32 flex flex-col items-stretch">
    @if ($announcements->count()>0)
    <div class="bg-white border-2 mb-4">
        @foreach ($announcements as $key => $announcement)
        <div class="w-full p-4 @if($key % 2 == 0) bg-main @endif">
            <h3 class="font-medium mb-1">{{ $announcement->title }}</h3>
            <p class="mb-2 {{ $key % 2 == 0 ? 'text-gray-600' : 'text-gray-500' }}">By {{ $announcement->labAdministrator->name }}</p>
            <p class="text-justify">{{ $announcement->description }}</p>
            <p class="mt-4 {{ $key % 2 == 0 ? 'text-gray-600' : 'text-gray-500' }}">{{ $announcement->created_at }}</p>
        </div>
        @endforeach
    </div>
 
    @include('dashboard.components.paginate')

    @else
    <div class="mb-4 p-4 bg-[#E5F1F3] border-l-8 border-main">
        <p>Tidak ada pengumuman proyek yang dibuat</p>
    </div>
    @endif
    
  
</div>
@endsection
