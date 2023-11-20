@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 max-w-4xl mx-auto ">
        @if (session('success'))
        <div id="success-message" class="p-4 mb-6 text-sm text-green-900 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success! </span>{{ session('success') }}
        </div>
        @endif
        <div class="flex flex-wrap">
            @if ($user->photo)
            <div class="w-full lg:w-1/4 h-56 relative mb-5">
                <img class="object-cover w-full h-full" src="{{ asset('storage/'. $user->photo) }}" alt="">
            </div>
            @else
            <div class="w-full lg:w-1/4 flex flex-wrap mt-10 justify-center mb-5">
                <svg class=" text-gray-500" viewBox="0 0 24 24" width="100" height="100" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            </div>
            @endif
            <div class="w-full lg:w-3/4 lg:px-8">
                <div class="flex flex-wrap border-2 bg-white p-2">
                    <p class="w-1/4 md:w-1/6">Nama</p>
                    <p>: {{ $user->name}}</p>
                </div>
                <div class="flex flex-wrap border-b-2 border-l-2 border-r-2 p-2">
                    <p class="w-1/4 md:w-1/6">Username</p>
                    <p>: {{ $user->username }}</p>
                </div>
                <div class="flex flex-wrap border-b-2 border-l-2 border-r-2 bg-white p-2">
                    <p class="w-1/4 md:w-1/6">Email</p>
                    <p>: {{ $user->email }}</p>
                </div>
                <div class="flex flex-wrap border-b-2 border-l-2 border-r-2 p-2">
                    <p class="w-1/4 md:w-1/6">Status</p>
                    @if (session('data')->getTable()=='lab_administrators')
                    <p>: Laboran</p>
                    @else
                    <p>: {{ session('data')['role'] }}</p>
                    @endif
                </div>
                <div class="w-full">
                    @if (session('data')->getTable()=='lab_administrators')
                    <a href="{{ route('profile.edit', session('data')['lab_admin_id']) }}" class="flex flex-wrap justify-end my-2">
                    @else
                    <a href="{{ route('profile.edit', session('data')['user_id']) }}" class="flex flex-wrap justify-end my-2">
                    @endif
                        <button type="button" class="bg-yellowpallete py-1.5 px-2.5 rounded flex flex-wrap gap-2 items-center text-white">
                            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Edit                       
                        </button>
                    </a>  
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/notif.js') }}"></script>
@endsection