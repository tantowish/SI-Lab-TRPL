@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
<div class="p-8 lg:px-16">
    <div class="mb-6 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
        <p>Pilih tanggal untuk menampilkan presensi</p>
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
    @if ($schedules->total()>0)
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
                        <a href="{{ route('assistant.show', $schedule->schedule_id) }}">
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
    @if ($schedules->total()>10)
    <script>
        let currentPage = {{ $schedules->currentPage() }}
        const maxPage = {{ $schedules->lastPage() }};
        const total_value = {{ $schedules->total() }};
        const showing_value = {{ ($schedules->currentPage() - 1) * $schedules->perPage() + 1 }}
        const to_value = {{ $schedules->currentPage() === $schedules->lastPage() ? $schedules->total() : $schedules->perPage()*$schedules->currentPage() }};
        console.log(maxPage)
    </script>
    @include('dashboard.components.paginate')
    @endif
    @else
    <div class="mb-4 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
        <p>Tidak ada jadwal hari ini</p>
    </div>
    @endif
</div>

<script>
    const datepicker = document.getElementById("datepicker");
    const submitButton = document.getElementById("submitDate");

    
    submitButton.addEventListener("click", function () {
        if(datepicker.value!=""){
            const selectedDate = datepicker.value;
            const newURL = `{{ url('/dashboard/attendance') }}/${selectedDate}`;
            window.location.href = newURL;
        }
    });
</script>
@endsection