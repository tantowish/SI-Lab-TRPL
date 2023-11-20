@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
<div class="p-8 md:px-16">
    @if (session('success'))
    <div id="success-message" class="p-4 mb-6 text-sm text-green-900 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span class="font-medium">Success! </span>{{ session('success') }}
    </div>
    @endif
    <div class="relative overflow-x-auto rounded-sm mb-8">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 bg-main dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 border-l border-t">
                        Mulai
                    </th>
                    <th scope="col" class="px-6 py-3 border-l border-t">
                        Selesai
                    </th>
                    <th scope="col" class="px-6 py-3 border-l border-t">
                        Mata Kuliah
                    </th>
                    <th scope="col" class="px-6 py-3 border-l border-r border-t">
                        Penanggung Jawab
                    </th>
                    <th scope="col" class="px-6 py-3 border-l border-r border-t">
                        Dosen
                    </th>
                    <th scope="col" class="px-6 py-3 border-l border-r border-t">
                        Keterangan
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 border-l">
                        {{ date('H:i', strtotime($schedule->start_time)) }}
                    </td>
                    <td class="px-6 py-4 border-l">
                        {{ date('H:i', strtotime($schedule->end_time)) }}
                    </td>
                    <td class="px-6 py-4 border-l">
                        @if ($schedule->subject)
                        {{ $schedule->subject->subject_name }}
                        @else
                        Lainnya
                        @endif
                    </td>
                    <td class="px-6 py-4 border-l border-r">
                        {{ $schedule->labAdministrator->name }}
                    </td>
                    @if ($schedule->subject)
                    <td class="px-6 py-4 border-l border-r">
                        {{ $schedule->subject->user->name }}
                    </td>
                    @else
                    <td class="px-6 py-4 border-l border-r">
                        Tidak ada
                    </td>
                    @endif

                    @if ($schedule->information)
                    <td class="px-6 py-4 border-l border-r">
                        {{ $schedule->information }}
                    </td>
                    @else
                    <td class="px-6 py-4 border-l border-r">
                        Tidak ada
                    </td>
                    @endif
                </tr>
            </tbody>
        </table>
    </div>

    <div class="flex flex-wrap gap-4">
        <a class="w-fit border bg-prev text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route($route, \Carbon\Carbon::parse($schedule->start_time)->format('d-m-Y')) }}">
            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Kembali
        </a>

        @if (session('data')->getTable()=='lab_administrators')
        <a class="w-fit border bg-main text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('schedule.edit', $schedule->schedule_id) }}">
            Edit
            <svg viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
        </a>
        @endif
    </div>
</div>

<script src="{{ asset('assets/js/notif.js') }}"></script>
@endsection