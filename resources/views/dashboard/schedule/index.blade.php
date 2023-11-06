@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')

@if (session('data')->getTable()=='lab_administrators')
    <div class="px-8 pt-8 lg:px-16">
        <div class="mb-6 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
            <p>Pilih tanggal untuk menampilkan jadwal</p>
        </div>
        <div class="flex flex-wrap gap-4 mb-5">
            <div class="relative max-w-sm w-5/6 lg:w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input datepicker-format="dd-mm-yyyy" id="datepicker" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Pilih tanggal" @if($date) value="{{ date('d-m-Y', strtotime($date)) }}" @endif>
            </div>
    
            <!-- Add a Submit button -->
            <button id="submitDate"><svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg></button>
        </div>
    </div>
@else
@php
$tgl1 = \Carbon\Carbon::parse($date)->subDays(3)->format('d-m-Y');
$tgl2 = \Carbon\Carbon::parse($date)->subDays(2)->format('d-m-Y');
$tgl3 = \Carbon\Carbon::parse($date)->subDays(1)->format('d-m-Y');
$tgl4 = \Carbon\Carbon::parse($date)->subDays(0)->format('d-m-Y');
$tgl5 = \Carbon\Carbon::parse($date)->addDays(1)->format('d-m-Y');
$tgl6 = \Carbon\Carbon::parse($date)->addDays(2)->format('d-m-Y');
$tgl7 = \Carbon\Carbon::parse($date)->addDays(3)->format('d-m-Y');
@endphp
<div id="calendar" class="bg-gray-100 pt-8 px-8 md:px-0">
<!-- { /*variation dark set*/ } -->
 <div  class='flex bg-white justify-start md:justify-center rounded-sm overflow-x-scroll mx-auto py-2 md:py-4 px-2 md:mx-16 mb-10'>
    <a href="{{ route('schedule.date.show', $tgl1) }}" class='flex group hover:bg-main hover:shadow-lg hover-dark-shadow rounded-full mx-2 md:mx-4 transition-all	duration-300	 cursor-pointer justify-center w-12 md:w-16'>
        <div class='flex items-center px-4 py-4'>
            <div class='text-center'>
                <p class='text-gray-900 group-hover:text-gray-100 text-xs md:text-sm transition-all  group-hover:font-semibold duration-300'> {{ \Carbon\Carbon::parse($date)->subDays(3)->isoFormat('dddd') }} </p>
                <p class='text-gray-900 group-hover:text-gray-100 mt-3 text-sm md:text-base group-hover:font-bold transition-all	duration-300'> {{ date('d', strtotime($date . ' -3 days')) }} </p>
            </div>
        </div>
    </a>
    <a  href="{{ route('schedule.date.show', $tgl2) }}" class='flex group hover:bg-main hover:shadow-lg hover-dark-shadow rounded-full mx-4 transition-all	duration-300	 cursor-pointer justify-center w-12 md:w-16'>
        <div class='flex items-center px-4 py-4'>
            <div class='text-center'>
            <p class='text-gray-900 group-hover:text-gray-100 text-xs md:text-sm transition-all  group-hover:font-semibold duration-300'> {{ \Carbon\Carbon::parse($date)->subDays(2)->isoFormat('dddd') }} </p>
                <p class='text-gray-900 group-hover:text-gray-100 mt-3 text-sm md:text-base group-hover:font-bold transition-all	duration-300'> {{ date('d', strtotime($date . ' -2 days')) }} </p>
            </div>
        </div>
    </a>
    <a  href="{{ route('schedule.date.show', $tgl3) }}" class='flex group hover:bg-main hover:shadow-lg hover-dark-shadow rounded-full mx-4 transition-all	duration-300	 cursor-pointer justify-center w-12 md:w-16'>
        <div class='flex items-center px-4 py-4'>
            <div class='text-center'>
                <p class='text-gray-900 group-hover:text-gray-100 text-xs md:text-sm transition-all font-normal group-hover:font-semibold	duration-300'> {{ \Carbon\Carbon::parse($date)->subDays(1)->isoFormat('dddd') }}  </p>
                <p class='text-gray-900 group-hover:text-gray-100 mt-3 text-sm md:text-base group-hover:font-bold transition-all	duration-300'>{{ date('d', strtotime($date . ' -1 days')) }}</p>
            </div>
        </div>
    </a>
    
    <div class='flex group bg-main shadow-lg dark-shadow rounded-full mx-4 cursor-pointer justify-center relative w-12 md:w-16'>
        <span class="flex h-2 w-2 absolute bottom-1.5 ">
            <span class="animate-ping absolute group-hover:opacity-75 opacity-0 inline-flex h-full w-full rounded-full bg-white "></span>
            <span class="relative inline-flex rounded-full w-3 bg-teal-100"></span>
        </span>
        <div class='flex items-center px-4 my-2 py-4'>
            <div class='text-center'>
                <p class='text-gray-100 text-xs md:text-sm font-semibold'> {{ $date->isoFormat('dddd') }} </p>
                <p class='text-gray-100  mt-3 font-bold'> {{ date('d', strtotime($date . ' 0 days')) }} </p>
            </div>
        </div>
    </div>
    
    <a  href="{{ route('schedule.date.show', $tgl5) }}" class='flex group hover:bg-main hover:shadow-lg hover-dark-shadow rounded-full mx-4 transition-all	duration-300 cursor-pointer justify-center w-12 md:w-16'>
        <div class='flex items-center px-4 py-4'>
            <div class='text-center'>
                <p class='text-gray-900 group-hover:text-gray-100 text-xs md:text-sm transition-all  group-hover:font-semibold duration-300'> {{ \Carbon\Carbon::parse($date)->addDays(1)->isoFormat('dddd') }}
                </p>
                <p class='text-gray-900 group-hover:text-gray-100 mt-3 text-sm md:text-base group-hover:font-bold transition-all	duration-300'> {{ date('d', strtotime($date . ' 1 days')) }} </p>
            </div>
        </div>
    </a>
    
    <a  href="{{ route('schedule.date.show', $tgl6) }}" class='flex group hover:bg-main hover:shadow-lg hover-dark-shadow rounded-full mx-4 transition-all	duration-300	 cursor-pointer justify-center w-12 md:w-16'>
        <div class='flex items-center px-4 py-4'>
            <div class='text-center'>
                <p class='text-gray-900 group-hover:text-gray-100 text-xs md:text-sm transition-all  group-hover:font-semibold duration-300'> {{ \Carbon\Carbon::parse($date)->addDays(2)->isoFormat('dddd') }} </p>
                <p class='text-gray-900 group-hover:text-gray-100 mt-3 text-sm md:text-base group-hover:font-bold transition-all	duration-300'> {{ date('d', strtotime($date . ' 2 days')) }} </p>
            </div>
        </div>
    </a>
        
    <a  href="{{ route('schedule.date.show', $tgl7) }}" class='flex group hover:bg-main hover:shadow-lg hover-dark-shadow rounded-full mx-4 transition-all	duration-300	 cursor-pointer justify-center w-12 md:w-16'>
        <div class='flex items-center px-4 py-4'>
            <div class='text-center'>
                <p class='text-gray-900 group-hover:text-gray-100 text-xs md:text-sm transition-all  group-hover:font-semibold duration-300'> {{ \Carbon\Carbon::parse($date)->addDays(3)->isoFormat('dddd') }} </p>
                <p class='text-gray-900 group-hover:text-gray-100 mt-3 text-sm md:text-base group-hover:font-bold transition-all	duration-300'> {{ date('d', strtotime($date . ' 3 days')) }} </p>
            </div>
        </div>
    </a>
</div>
</div>
@endif


<div class="px-8 pb-8 md:px-16">
    @if ($schedules->count()>0)
    <div class="relative overflow-x-auto rounded-sm">
        <table class="w-full text-xs md:text-sm text-left text-gray-500 dark:text-gray-400 border">
            <thead class="text-xs text-gray-700 bg-main dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 border-l border-t">
                        Mulai
                    </th>
                    <th scope="col" class="px-6 py-3 border-l border-t">
                        Selesai
                    </th>
                    <th scope="col" class="px-6 py-3 border-l border-t">
                        Laboratorium
                    </th>
                    <th scope="col" class="px-6 py-3 border-l border-r border-t">
                        Detail
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $key => $schedule)
                <tr class="{{ $key % 2 === 0 ? 'bg-gray-1900' : 'bg-white' }} dark:bg-gray-800">
                    <td class="px-6 py-4 border-l">
                        {{ date('H:i', strtotime($schedule->start_time)) }}
                    </td>
                    <td class="px-6 py-4 border-l">
                        {{ date('H:i', strtotime($schedule->end_time)) }}
                    </td>
                    <td class="px-6 py-4 border-l">
                        {{ $schedule->laboratorium->laboratorium_name }}
                    </td>
                    <td class="px-6 py-4 border-l border-r">
                        <a href="{{ route('schedule.show', $schedule->schedule_id) }}">
                            <button type="button" href="" class="bg-blue-200 px-1.5 rounded">
                                <svg class="text-white" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>                            
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="mb-4 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
        <p>Tidak ada jadwal hari ini</p>
    </div>
    @endif


    <div class="flex flex-wrap justify-between my-8">
        <a class=" w-fit border bg-redpallete text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('dashboard') }}">
            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Kembali
        </a>
        @if (session('data')->getTable()=='lab_administrators')
        <a class="w-fit border bg-main text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('schedule.create') }}">
            Tambah
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
        </a>
        @endif
    </div>

</div>

<script>
    const datepicker = document.getElementById("datepicker");
    const submitButton = document.getElementById("submitDate");

    
    submitButton.addEventListener("click", function () {
        if(datepicker.value!=""){
            const selectedDate = datepicker.value;
            const newURL = `http://127.0.0.1:8000/dashboard/schedule/${selectedDate}`;
            window.location.href = newURL;
        }
    });
</script>
@endsection