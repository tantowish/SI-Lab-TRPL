@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 lg:px-16">
        @if (session('success'))
        <div id="success-message" class="p-4 mb-6 text-sm text-green-900 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success! </span>{{ session('success') }}
        </div>
        @endif
        @if ($attendances->count()>0)
        <form action="{{ route('assistant.attendance.submit',$schedule->schedule_id) }}" method="POST">
            @csrf
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
                                Asisten Dosen
                            </th>
                            <th scope="col" class="px-6 py-3 border-l border-r border-t">
                                Presensi
                            </th>
                            <th scope="col" class="px-6 py-3 border-l border-r border-t">
                                QR
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td rowspan="{{ $attendances->count() }}" class="px-6 py-4 border-l">
                                {{ date('H:i', strtotime($schedule->start_time)) }}
                            </td>
                            <td  rowspan="{{ $attendances->count() }}" class="px-6 py-4 border-l">
                                {{ date('H:i', strtotime($schedule->end_time)) }}
                            </td>
                            <td rowspan="{{ $attendances->count() }}" class="px-6 py-4 border-l">
                                {{ $schedule->subject->subject_name }}
                            </td>
                            <td class="px-6 py-4 border-l border-r">
                                {{ $attendances[0]->assistantLecturer->user->name }}
                            </td>
                            <td class="px-6 py-4 border-l border-r">
                                <input id="checkbox0" name="checkbox0" type="checkbox" @if ($attendances[0]->status=='hadir')
                                    checked
                                @endif value="hadir" class="w-4 h-4 text-main bg-gray-100 border-gray-300 rounded focus:ring-teal-500 dark:focus:ring-main dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td rowspan="2" class="px-6 py-4 border-l">
                                <a id="qrbtn" href="{{ route('assistant.QR', $schedule->schedule_id) }}">
                                    <button type="button" class="bg-main p-2 rounded">
                                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M5 11h4c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2zm0-6h4v4H5V5zm0 16h4c1.1 0 2-.9 2-2v-4c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2zm0-6h4v4H5v-4zm8-10v4c0 1.1.9 2 2 2h4c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2zm6 4h-4V5h4v4zm2 11.5v-1c0-.28-.22-.5-.5-.5h-1c-.28 0-.5.22-.5.5v1c0 .28.22.5.5.5h1c.28 0 .5-.22.5-.5zm-8-7v1c0 .28.22.5.5.5h1c.28 0 .5-.22.5-.5v-1c0-.28-.22-.5-.5-.5h-1c-.28 0-.5.22-.5.5zm3.5 1.5h-1c-.28 0-.5.22-.5.5v1c0 .28.22.5.5.5h1c.28 0 .5-.22.5-.5v-1c0-.28-.22-.5-.5-.5zM13 17.5v1c0 .28.22.5.5.5h1c.28 0 .5-.22.5-.5v-1c0-.28-.22-.5-.5-.5h-1c-.28 0-.5.22-.5.5zm2.5 3.5h1c.28 0 .5-.22.5-.5v-1c0-.28-.22-.5-.5-.5h-1c-.28 0-.5.22-.5.5v1c0 .28.22.5.5.5zm2-2h1c.28 0 .5-.22.5-.5v-1c0-.28-.22-.5-.5-.5h-1c-.28 0-.5.22-.5.5v1c0 .28.22.5.5.5zm1-6h-1c-.28 0-.5.22-.5.5v1c0 .28.22.5.5.5h1c.28 0 .5-.22.5-.5v-1c0-.28-.22-.5-.5-.5zm1 4h1c.28 0 .5-.22.5-.5v-1c0-.28-.22-.5-.5-.5h-1c-.28 0-.5.22-.5.5v1c0 .28.22.5.5.5z"/></svg>                 
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <!-- Second row where the first cell should span -->
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            @if($attendances->count()>1)  
                            <td class="px-6 py-4 border-l border-r">
                                {{ $attendances[1]->assistantLecturer->user->name }}
                            </td>
                            <td class="px-6 py-4 border-l border-r">
                                <input id="checkbox1" name="checkbox1" type="checkbox" @if ($attendances[1]->status=='hadir')
                                    checked
                                @endif value="hadir" class="w-4 h-4 text-main bg-gray-100 border-gray-300 rounded focus:ring-teal-500 dark:focus:ring-main dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            @endif
                            {{-- <td class="px-6 py-4 border-l border-r">
                                {{ $attendances[0]->assistantLecturer->user->name }}
                            </td>
                            <td class="px-6 py-4 border-l border-r flex flex-wrap justify-center">
                                <input id="checkbox1" type="checkbox" value="" class="w-4 h-4 text-main bg-gray-100 border-gray-300 rounded focus:ring-teal-500 dark:focus:ring-main dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td> --}}
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex flex-wrap gap-4">
                <button type="submit" class="w-full bg-main text-white px-3 py-1.5 sm:w-fit">Submit</button>
                <a class="w-full bg-redpallete text-white px-3 py-1.5 text-center sm:w-fit" href="{{ route('assistant.date.show', $date) }}">
                    Cancel
                </a>
            </div>
        </form>
        @else
        <div class="mb-4 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
            <p>Tidak ada presensi hari ini</p>
        </div>
        <a class="w-fit border bg-prev text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('assistant.date.show', $date) }}">
            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Kembali
        </a>
        @endif
    </div>
    <script src="{{ asset('assets/js/notif.js') }}"></script>
@endsection