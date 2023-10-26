@extends('dashboard.layouts.main')


@section('content')
    @include('dashboard.components.header')
    <div class="p-8 lg:px-32">
        @if (session('success'))
        <div class="p-4 mb-6 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-500" role="alert">
            <span class="font-medium">Success!</span>{{ session('success') }}
        </div>
        @endif

        <a href="{{ route('pengumuman.create') }}" class="bg-main mb-4 flex flex-wrap items-center w-fit border-2 px-3 py-1.5">
            <p class="font-semibold mr-1">Tambah</p>
            <svg class="text-black w-5 h-5" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
        </a>
   
        @if ($announcements->count()>0)
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

        {{ $announcements->links() }}
        @else
        <div class="p-4 bg-[#E5F1F3] border-l-8 border-main">
            <p>Tidak ada pengumuman proyek yang dibuat</p>
        </div>
        @endif
        
    </div>
    
@endsection

