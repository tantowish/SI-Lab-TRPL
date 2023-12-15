@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 lg:px-16 max-w-6xl mx-auto">
        @if (session('success'))
        <div id="success-message" class="p-4 mb-6 text-sm text-green-900 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success! </span>{{ session('success') }}
        </div>
        @endif
        <div class="flex flex-wrap max-w-sm mx-auto my-6">
            <form action="{{ route('assistant.index') }}" class="w-full" method="GET">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" name="search" id="default-search" class="block w-full px-4 py-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-3xl bg-gray-50 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Cari disini..." required
                    value="@if($search){{$search}}@endif">
                    <button type="submit" class="text-white absolute end-2.5 bottom-1.5 bg-main hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-2xl text-sm px-4 py-1.5">Search</button>
                </div>
            </form>
        </div>

        <div>
            <div class="flex flex-wrap justify-between my-2">
                <div class="text-sm flex flex-wrap items-center">
                    <svg class="mr-1" viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    <p class="mr-4">{{ $latest->diffForHumans() }}</p>
                    <p>Oleh : Admin</p>
                </div>
                <div>
                    @if (session('data')->getTable()=='lab_administrators')
                    <a class="w-fit border bg-main text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2 ml-auto" href="{{ route('assistant.create') }}">
                        Tambah
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </a>
                    @endif
                </div>
            </div>
            <hr class="border-2 border-[#AAA7A7]">
            @if ($assistants->total()>0)    
            @foreach ($assistants as $assistant)  
            <div class="flex flex-wrap my-6">
                <div class="w-full md:w-1/4 flex flex-wrap justify-center md:justify-none">
                    @if ($assistant->user->photo)
                    <img class="object-cover w-44 h-52" src="{{ asset('storage/'.$assistant->user->photo) }}" alt="">
                    @else
                    <div class="flex flex-wrap justify-center items-center h-52 w-44">
                        <svg class=" text-gray-500" viewBox="0 0 24 24" width="100" height="100" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </div>
                    @endif
                </div>
                @if (session('data')->getTable()=='lab_administrators')
                <div class="w-full md:w-3/4 flex flex-col justify-between">
                @else
                <div class="w-full md:w-3/4 my-4 flex flex-col justify-between">
                @endif
                    {{-- <hr class="w-full border-2 border-[#AAA7A7]"> --}}
                    <p>Nama : {{ $assistant->user->name }}</p>
                    <hr class="w-full border-2 border-[#AAA7A7]">
                    <p>username : {{ $assistant->user->username }}</p>
                    <hr class="w-full border-2 border-[#AAA7A7]">
                    <p>Email : {{ $assistant->user->email }}</p>
                    <hr class="w-full border-2 border-[#AAA7A7]">
                    <p>Minat : {{ $assistant->interest }}</p>
                    {{-- <hr class="w-full border-2 border-[#AAA7A7]"> --}}
                    @if (session('data')->getTable()=='lab_administrators')
                    <div class="w-full flex flex-wrap gap-2 justify-end">
                        <a href="{{ route('assistant.edit',$assistant->assistant_id) }}" class="flex flex-wrap items-center text-white px-2 py-1 rounded bg-yellowpallete gap-2">
                            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                            <span>Edit</span></a>
                        <form action="{{ route('assistant.destroy', $assistant->assistant_id) }}" method="POST" id="deleteForm">
                            @csrf
                            @method('delete')
                            <button type="submit" class="flex flex-wrap items-center text-white px-2 py-1 rounded bg-redpallete gap-2" onclick="confirmDelete(event)">
                                <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                <span>Delete</span></button>
                        </form>
                    </div>                                   
                    @endif
                </div>
            </div>
            <hr class="border-2 border-[#AAA7A7]">
            @endforeach
            @else
            <div class="mt-6 mb-6 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
                <p>Asistent Tidak Ada</p>
            </div>
            @endif
        </div>
    </div>
    <script src="{{ asset('assets/js/notif.js') }}"></script>
    <script>
        function confirmDelete() {
            if (confirm('Apakah anda ingin menghapus data asisten?')) {
                document.getElementById('deleteForm').submit();
            }
            else{
                event.preventDefault(event);
            }
        }
    </script>   
@endsection
