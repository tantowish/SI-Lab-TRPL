@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 lg:px-16 ">
        @if (session('data')->getTable()=='lab_administrators')
        <form action="{{ route('profile.update', $user->lab_admin_id) }}" method="POST" enctype="multipart/form-data">
        @else 
        <form action="{{ route('profile.update', $user->user_id) }}" method="POST" enctype="multipart/form-data">
        @endif
            @csrf
            @method('put')
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input type="text" id="name" name="name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5" value='{{ old('name', $user->name) }}' required>
                @error('name')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                <input type="text" id="username" name="username" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5" value='{{ old('username', $user->username) }}' required>
                @error('username')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="email" name="email" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5" required value='{{ old('email', $user->email) }}'>
                @error('email')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Image</label>
                <input type="hidden" name="oldImage" value="{{ $user->photo }}">
                @if ($user->photo)
                <img src="{{ asset('storage/'.$user->photo) }}" class="img-preview max-h-[300px] mb-5">
                @else
                <img class="img-preview max-h-[300px] mb-5">
                @endif
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="photo" name="photo" type="file" onchange="previewImage()">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                @error('photo')
                    <div class="text-xs text-red-600">{{ $message }}</div>
                @enderror   
            </div>
            
            <div class="flex flex-wrap gap-4">
                <button type="submit" class="w-full bg-main text-white px-3 py-1.5 sm:w-fit">Submit</button>
                <a class="w-full bg-redpallete text-white px-3 py-1.5 text-center sm:w-fit" href="{{ route('profile.index') }}">
                    Cancel
                </a>
            </div>
        </form>
    </div>

    <script>
        function previewImage(){
            const image = document.querySelector('#photo')
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block'

           
            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0]);
            
            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result
    
            };
        }
    </script>
@endsection