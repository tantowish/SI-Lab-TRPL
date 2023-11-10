@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
<div class="p-8 lg:px-16">
    <div class="mb-5 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
        <p>Pilih tanggal untuk menampilkan jadwal</p>
    </div>
    <div class="flex flex-wrap gap-4 mb-5">
        <div class="relative max-w-sm w-5/6 lg:w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                </svg>
            </div>
            <input datepicker-format="dd-mm-yyyy" id="datepicker" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Pilih tanggal" @if($date) value="{{ $date }}" @endif>
        </div>

        <!-- Add a Submit button -->
        <button id="checkDate"><svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg></button>
    </div>

    <div class="mb-5">
        @if ($date)
        @if ($schedules->count()>0)
        <div class="relative overflow-x-auto rounded-sm mb-5">
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
        <div class="mb-4 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
            <p>Pilih waktu atau jadwal pemakaian ruang laboratorium</p>
        </div>
        @else
        <div class="mb-4 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
            <p>Tidak ada jadwal pada tanggal ini, Silahkan pilih waktu atau jadwal pemakaian ruangan</p>
        </div>
        @endif 
        <div class="mb-5 w-full flex flex-wrap items-center gap-5">
            <div class="w-full md:w-1/4">
                <label for="start_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Mulai</label>
                <input type="time" id="start_time" name="start_time" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Pilih jam" required>
            </div>
            <p class="hidden md:block mt-6">to</p>
            <div class="w-full md:w-1/4">
                <label for="end_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Selesai</label>
                <input min="07:00" max="15:55" step="600"   type="time" id="end_time" name="end_time" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Pilih jam" required>
            </div>
            <div class="w-full md:w-1/4">
                <label for="lab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Laboratorium</label>
                <select id="lab" name="lab" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main">
                    <option value="pick">pilih</option>
                    @foreach ($laboratorium as $lab)
                    <option value="{{ $lab->laboratorium_id }}">{{ $lab->laboratorium_name }}</option>  
                    @endforeach
                </select>
            </div>
        </div>
        @endif
    </div>
    <div id="checkTime" class="hidden mb-4 p-4 text-sm bg-[#EFC1B9] border-l-8 border-redpallete">
        <p>Maaf waktu pemakaian dan laboratorium yang dipilih telah digunakan.</p>
    </div>
    


</div>
<script>
    const datepicker = document.getElementById("datepicker");
    const submitButton = document.getElementById("checkDate");

    
    submitButton.addEventListener("click", function () {
        if(datepicker.value!=""){
            const selectedDate = datepicker.value;
            const newURL = `http://127.0.0.1:8000/dashboard/reserve/create/${selectedDate}`;
            window.location.href = newURL;
        }
    });
</script>
@if($date)
<script>
    const startTimeInput = document.getElementById('start_time');
    const endTimeInput = document.getElementById('end_time');
    const labSelect = document.getElementById('lab');

    const schedules = {!! json_encode($schedules) !!};
    const isoDate = "{{ date('Y-m-d', strtotime($date))." " }}";


    labSelect.addEventListener('input', validateTimeOrder);
    startTimeInput.addEventListener('input', validateTimeOrder);
    endTimeInput.addEventListener('change', validateTimeOrder);

    function validateTimeOrder() {
        const startTimeValue = startTimeInput.value;
        const endTimeValue = endTimeInput.value;
        // console.log(labSelect.value);

        if (startTimeValue && endTimeValue) {
            const inputStartTime = new Date(isoDate.replace(' ', 'T') + startTimeValue);
            const inputEndTime = new Date(isoDate.replace(' ', 'T') + endTimeValue);

            if (inputStartTime > inputEndTime) {
                alert('Jam Mulai harus lebih awal dari Jam Selesai');
                startTimeInput.value = '';
                endTimeInput.value = '';
            } else {
                for (let i = 0; i < schedules.length; i++) {
                    if(schedules[i].laboratorium_id === labSelect.value){
                        const scheduleStart = new Date(schedules[i].start_time);
                        const scheduleEnd = new Date(schedules[i].end_time);
                        
                        console.log(inputStartTime+scheduleStart+inputEndTime+scheduleEnd)
                        console.log(inputStartTime >= scheduleStart && inputEndTime <= scheduleEnd);
                        checkTimeMessage = document.getElementById('checkTime')
                        console.log("end:"+inputEndTime <= scheduleEnd)

                        if ((inputStartTime >= scheduleStart && inputStartTime <= scheduleEnd) ||
                            (inputEndTime >= scheduleStart && inputEndTime <= scheduleEnd) ||
                            (inputStartTime <= scheduleStart && inputEndTime >= scheduleEnd)) {
                            console.log('Inside if block');
                            checkTimeMessage.classList.remove('hidden');
                            checkTimeMessage.classList.add('block');

                            // alert('Waktu input berada di dalam jadwal yang ada. Pilih waktu yang berbeda.');
                            startTimeInput.value = '';
                            endTimeInput.value = '';
                            break;
                        }
                        else{
                            checkTimeMessage.classList.remove('block');
                            checkTimeMessage.classList.add('hidden');
                        }
                    }
                }
            }
        }
    }

</script>
@endif
    
    
@endsection