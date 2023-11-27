@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 lg:px-16 max-w-2xl">
        <form action="{{ route('assistant.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-6">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                <input type="text" id="username" name="username" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5" value='{{ old('username') }}' required>
                @error('username')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="interest" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">interest</label>
                <input type="text" id="interest" name="interest" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5" value='{{ old('interest') }}' required>
                @error('interest')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                <select id="subject" name="subject" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" required>
                    <option value="pick">pilih</option>
                    @foreach ($subjects as $subject)
                    <option value="{{ $subject->subject_id }}">{{ $subject->subject_name }}</option>
                    @endforeach
                    <option value="null">Other</option>
                </select>
            </div>
            <div class="flex flex-wrap gap-4">
                <button type="submit" class="w-full bg-main text-white px-3 py-1.5 sm:w-fit">Submit</button>
                <a class="w-full bg-redpallete text-white px-3 py-1.5 text-center sm:w-fit" href="{{ route('profile.index') }}">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection