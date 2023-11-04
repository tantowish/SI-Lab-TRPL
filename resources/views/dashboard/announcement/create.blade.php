@extends('dashboard.layouts.main')


@section('content')
    @include('dashboard.components.header')
    <div class="p-8 lg:px-16">
        <form action="{{ route('announcement.store') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                <input type="text" id="Title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Judul" required>
            </div>
            <div class="mb-6">     
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi</label>
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="..."></textarea>
            </div>
            <div class="flex flex-wrap gap-4">
                <button type="submit" class="w-full bg-redpallete text-white px-3 py-1.5 sm:w-fit">Submit</button>
                <a class="w-full bg-main text-white px-3 py-1.5 text-center sm:w-fit" href="{{ route('announcement.index') }}">
                    Cancel
                </a>
            </div>
        </form>
  
    </div>
@endsection