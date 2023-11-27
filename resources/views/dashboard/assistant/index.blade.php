@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 lg:px-16">
        <div class="flex flex-wrap max-w-sm mx-auto my-6">
            <form class="w-full">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full px-4 py-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-3xl bg-gray-50 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Cari disini..." required>
                    <button type="submit" class="text-white absolute end-2.5 bottom-1.5 bg-main hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-2xl text-sm px-4 py-1.5">Search</button>
                </div>
            </form>
        </div>

        <div>
            <div class="flex flex-wrap justify-between my-2">
                <div class="text-sm flex flex-wrap items-center">
                    <svg class="mr-1" viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    <p class="mr-4">Tidak ada</p>
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
            @foreach (range(1, 3) as $index)  
            <div class="flex flex-wrap my-6">
                <div class="w-full md:w-1/4 flex flex-wrap justify-center md:justify-none">
                    <img class="object-cover w-44 h-52" src="{{ asset('storage/img/laboratorium/1.jpg') }}" alt="">
                </div>
                <div class="w-full md:w-3/4 my-4 flex flex-col justify-between">
                    <hr class="w-full border-2 border-[#AAA7A7]">
                    <p>Nama : Tantowi Shah Hanif</p>
                    <hr class="w-full border-2 border-[#AAA7A7]">
                    <p>username : tantowishahhanif</p>
                    <hr class="w-full border-2 border-[#AAA7A7]">
                    <p>Email : tantowishahhanif@mail.ugm.ac.id</p>
                    <hr class="w-full border-2 border-[#AAA7A7]">
                    <p>Interest : Ilmu Komputer</p>
                    <hr class="w-full border-2 border-[#AAA7A7]">
                </div>
            </div>
            <hr class="border-2 border-[#AAA7A7]">
            @endforeach
        </div>
    </div>
@endsection
