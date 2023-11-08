@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
<div class="max-w-2xl p-8">
    @if (session('error'))
    <div class="p-4 mb-6 text-sm text-green-900 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span class="font-medium">Error! </span>{{ session('error') }}
    </div>
    @endif
    <form action="{{ route('schedule.update', $schedule->schedule_id) }}" method="post">
        @method('put')
        @csrf
        <div class="mb-6">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input datepicker-format="dd-mm-yyyy" datepicker datepicker-autohide type="text" name="date" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-blue-500" placeholder="Pilih tanggal" value="{{ \Carbon\Carbon::parse($schedule->start_time)->format('d-m-Y') }}">
            </div>
        </div>
  
        <div class="mb-6">
            <label for="lab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Laboratorium</label>
            <select id="lab" name="lab" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main">
                <option value="pick">pilih</option>
                @foreach ($laboratorium as $lab)
                    <option value="{{ $lab->laboratorium_id }}" {{ $lab->laboratorium_id == $schedule->laboratorium_id ? 'selected' : '' }}>
                        {{ $lab->laboratorium_name }}
                    </option>
                @endforeach
            </select>
        </div>        
        <div class="mb-6 w-full flex flex-wrap items-center gap-4">
            <div class="w-full md:w-1/3">
                <label for="start_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Mulai</label>
                <input type="time" id="start_time" name="start_time" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Pilih jam" value="{{ \Carbon\Carbon::parse($schedule->start_time)->format('H:i') }}" required>
            </div>
            <div class="w-full md:w-1/3">
                <label for="end_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Selesai</label>
                <input min="07:00" max="15:55" type="time" id="end_time" name="end_time" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Pilih jam" value="{{ \Carbon\Carbon::parse($schedule->end_time)->format('H:i') }}" required>
            </div>
        </div>
        <div class="mb-6">
            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
            <select id="subject" name="subject" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main">
                <option value="pick">pilih</option>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->subject_id }}" {{ $subject->subject_id == $schedule->subject_id ? 'selected' : '' }}>
                        {{ $subject->subject_name }}
                    </option>
                @endforeach
                <option value="null" {{ is_null($schedule->subject_id) ? 'selected' : '' }}>Other</option>
            </select>
        </div>
        
        <div class="mb-6"> 
            <label for="information" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
            <textarea id="information" name="information" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Keterangan terkait jadwal">@if(session('keterangan')){{ session('keterangan') }}@else @if($schedule->information){{ $schedule->information }}@endif @endif</textarea>
        </div>
        <div class="flex flex-wrap gap-4">
            <button type="submit" class="w-fit border bg-main text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('schedule.store') }}">
                Submit
            </button>
    
            <a class="w-fit border bg-redpallete text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('schedule.show', $id) }}">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection