@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
<div id="calendar" class="bg-gray-100 pt-8 px-8 md:px-0">
    <!-- { /*variation dark set*/ } -->
     <div  class='flex bg-white justify-start md:justify-center rounded-sm overflow-x-scroll mx-auto py-2 md:py-4 px-2 md:mx-16 mb-10'>
        <div class='flex group hover:bg-main hover:shadow-lg hover-dark-shadow rounded-full mx-2 md:mx-4 transition-all	duration-300	 cursor-pointer justify-center w-12 md:w-16'>
            <div class='flex items-center px-4 py-4'>
                <div class='text-center'>
                    <p class='text-gray-900 group-hover:text-gray-100 text-xs md:text-sm transition-all  group-hover:font-semibold duration-300'> {{ \Carbon\Carbon::now()->subDays(3)->isoFormat('dddd') }} </p>
                    <p class='text-gray-900 group-hover:text-gray-100 mt-3 text-sm md:text-base group-hover:font-bold transition-all	duration-300'> {{ date('d', strtotime('-3 days')) }} </p>
                </div>
            </div>
        </div>
       
        <div class='flex group hover:bg-main hover:shadow-lg hover-dark-shadow rounded-full mx-4 transition-all	duration-300	 cursor-pointer justify-center w-12 md:w-16'>
                <div class='flex items-center px-4 py-4'>
                    <div class='text-center'>
                    <p class='text-gray-900 group-hover:text-gray-100 text-xs md:text-sm transition-all  group-hover:font-semibold duration-300'> {{ \Carbon\Carbon::now()->subDays(2)->isoFormat('dddd') }} </p>
                        <p class='text-gray-900 group-hover:text-gray-100 mt-3 text-sm md:text-base group-hover:font-bold transition-all	duration-300'> {{ date('d', strtotime('-2 days')) }} </p>
                    </div>
                </div>
            </div>
        
        <div class='flex group hover:bg-main hover:shadow-lg hover-dark-shadow rounded-full mx-4 transition-all	duration-300	 cursor-pointer justify-center w-12 md:w-16'>
                <div class='flex items-center px-4 py-4'>
                    <div class='text-center'>
                        <p class='text-gray-900 group-hover:text-gray-100 text-xs md:text-sm transition-all font-normal group-hover:font-semibold	duration-300'> {{ \Carbon\Carbon::now()->subDays(1)->isoFormat('dddd') }}  </p>
                        <p class='text-gray-900 group-hover:text-gray-100 mt-3 text-sm md:text-base group-hover:font-bold transition-all	duration-300'>{{ date('d', strtotime('-1 days')) }}</p>
                    </div>
                </div>
            </div>
        
            <div class='flex group bg-main shadow-lg dark-shadow rounded-full mx-4 cursor-pointer justify-center relative w-12 md:w-16'>
            <span class="flex h-2 w-2 absolute bottom-1.5 ">
                <span class="animate-ping absolute group-hover:opacity-75 opacity-0 inline-flex h-full w-full rounded-full bg-white "></span>
                <span class="relative inline-flex rounded-full w-3 bg-teal-100"></span>
            </span>
                <div class='flex items-center px-4 my-2 py-4'>
                    <div class='text-center'>
                        <p class='text-gray-100 text-xs md:text-sm font-semibold'> {{ \Carbon\Carbon::now()->isoFormat('dddd') }} </p>
                        <p class='text-gray-100  mt-3 font-bold'> {{ date('d', strtotime('0 days')) }} </p>
                    </div>
                </div>
            </div>
        
        <div class='flex group hover:bg-main hover:shadow-lg hover-dark-shadow rounded-full mx-4 transition-all	duration-300 cursor-pointer justify-centerw-12 md:w-16'>
                <div class='flex items-center px-4 py-4'>
                    <div class='text-center'>
                        <p class='text-gray-900 group-hover:text-gray-100 text-xs md:text-sm transition-all  group-hover:font-semibold duration-300'> {{ \Carbon\Carbon::now()->addDays(1)->isoFormat('dddd') }}
                        </p>
                        <p class='text-gray-900 group-hover:text-gray-100 mt-3 text-sm md:text-base group-hover:font-bold transition-all	duration-300'> {{ date('d', strtotime('+1 days')) }} </p>
                    </div>
                </div>
            </div>
        
        <div class='flex group hover:bg-main hover:shadow-lg hover-dark-shadow rounded-full mx-4 transition-all	duration-300	 cursor-pointer justify-center w-12 md:w-16'>
                <div class='flex items-center px-4 py-4'>
                    <div class='text-center'>
                        <p class='text-gray-900 group-hover:text-gray-100 text-xs md:text-sm transition-all  group-hover:font-semibold duration-300'> {{ \Carbon\Carbon::now()->addDays(2)->isoFormat('dddd') }} </p>
                        <p class='text-gray-900 group-hover:text-gray-100 mt-3 text-sm md:text-base group-hover:font-bold transition-all	duration-300'> {{ date('d', strtotime('+2 days')) }} </p>
                    </div>
                </div>
            </div>
            
        <div class='flex group hover:bg-main hover:shadow-lg hover-dark-shadow rounded-full mx-4 transition-all	duration-300	 cursor-pointer justify-centerw-12 md:w-16'>
                <div class='flex items-center px-4 py-4'>
                    <div class='text-center'>
                        <p class='text-gray-900 group-hover:text-gray-100 text-xs md:text-sm transition-all  group-hover:font-semibold duration-300'> {{ \Carbon\Carbon::now()->addDays(3)->isoFormat('dddd') }} </p>
                        <p class='text-gray-900 group-hover:text-gray-100 mt-3 text-sm md:text-base group-hover:font-bold transition-all	duration-300'> {{ date('d', strtotime('+3 days')) }} </p>
                    </div>
                </div>
            </div>
        </div>
   </div>

   <div class="px-8 pb-8 md:px-16">
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
                            <button type="button" href="" class="bg-blue-200 px-1.5">
                                <svg class="text-white" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>                            
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a class="mt-8 w-fit border bg-redpallete text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('dashboard') }}">
        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        Kembali
    </a>
    
   </div>
@endsection