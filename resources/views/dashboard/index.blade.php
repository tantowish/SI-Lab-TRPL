@extends('dashboard.layouts.main')

@section('content')
<div class="flex flex-wrap gap-8 mx-auto p-8 lg:px-16">            
    <div class="w-full lg:w-1/6">
        <div class="relative overflow-x-auto border-2">   
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-main dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Akun
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            <h3>MAIL UGM</h3>
                            <p>{{ session('data')['email'] }}</p>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="w-full lg:w-9/12">
        <div class="relative overflow-x-auto border-2 mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-main dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            {{ date('d F Y') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($schedules->count()>0)
                    @foreach ($schedules as $schedule)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            <h3>{{ $schedule->laboratorium->laboratorium_name }}</h3>
                            <p>{{  date('H:i', strtotime($schedule->start_time)) . " - " . date('H:i', strtotime($schedule->end_time)) }}  |  {{ $schedule->subject->subject_name }} |  {{ $schedule->subject->user->name }}
                            </p>
                        </th>
                    </tr>
                    @endforeach
                    @else
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white">
                            <h3 class="font-medium mb-1 text-gray-500">Tidak ada jadwal hari ini</h3>
                        </th>
                    </tr>
                    @endif
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="text-orangepallete px-6 py-4 text-xs font-normal text- dark:text-white">
                            <a href="{{ route('schedule.index') }}">Selengkapnya >></a>
                        </th>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <div class="relative overflow-x-auto border-2">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-main dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Pengumuman
                        </th>
                    </tr>
                    
                </thead>
                <tbody>
                    @if ($announcements->count()>0)
                    @foreach ($announcements as $announcement)      
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                      <th scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white">
                          <h3 class="font-medium mb-1">{{ $announcement->title }}</h3>
                          <p class="text-gray-500 mb-2">By {{ $announcement->labAdministrator->name }}</p>
                          <p class="text-justify">{{ $announcement->description }}</p>
                          <p class="mt-4 text-gray-500">{{ $announcement->created_at }}</p>
                      </th>
                    </tr>
                    @endforeach
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="text-orangepallete px-6 py-4 text-xs font-normal text- dark:text-white">
                            <a href="{{ route('announcement') }}">Selengkapnya >></a>
                        </th>
                    </tr>
                    @else
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white">
                            <h3 class="font-medium mb-1 text-gray-500">Belum ada pengumuman</h3>
                        </th>
                    </tr>
                    @endif
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection