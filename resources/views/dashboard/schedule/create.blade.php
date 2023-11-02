@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
<div class="max-w-2xl p-8">
    <form action="{{ route('schedule.store') }}" method="post">
        @csrf
        <div class="mb-6">
            <label for="lab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Laboratorium</label>
            <select id="lab" name="lab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main">
                <option value="pick">pilih</option>
                @foreach ($laboratorium as $lab)
                <option value="{{ $lab->laboratorium_id }}">{{ $lab->laboratorium_name }}</option>  
                @endforeach
            </select>
        </div>
        <div class="mb-6 w-full flex flex-wrap items-center gap-4">
            <div class="w-full md:w-fit">
                <label for="start_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Mulai</label>
                <input type="text" id="start_time" name="start_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Pilih jam" required>
            </div>
            <div class="w-full md:w-fit">
                <label for="end_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Selesai</label>
                <input type="text" id="end_time" name="end_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Pilih jam" required>
            </div>
        </div>
        <div class="mb-6">
            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
            <select id="subject" name="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main">
                <option value="pick">pilih</option>
                @foreach ($subjects as $subject)
                <option value="{{ $subject->subject_id }}">{{ $subject->subject_name }}</option>
                @endforeach
                <option value="null">Other</option>
            </select>
        </div>
        <div class="mb-6"> 
            <label for="information" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
            <textarea id="information" name="information" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Keterangan terkait jadwal"></textarea>
        </div>
        <div class="flex flex-wrap gap-4">
            <button type="submit" class="w-fit border bg-main text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('schedule.store') }}">
                Submit
            </button>
    
            <a class="w-fit border bg-redpallete text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('schedule.index') }}">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection