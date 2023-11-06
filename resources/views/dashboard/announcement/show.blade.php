@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')

<div class="p-8 lg:px-32 flex flex-col items-stretch">
    <a class="mb-4 w-fit border bg-redpallete text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('dashboard') }}">
        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        Kembali
    </a>
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
    <div class="mb-4 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
        <p>Tidak ada pengumuman proyek yang dibuat</p>
    </div>
    @endif
    
  
</div>
@endsection
