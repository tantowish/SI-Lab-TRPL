@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
<div class="max-w-2xl p-8">
    <form action="{{ route('schedule.store') }}" method="post">
        @csrf
        <div class="hidden">
            <input type="text" name="date" value={{ $date }}>
        </div>
        <div class="mb-6">
            <label for="lab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Laboratorium</label>
            <select id="lab" name="lab" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" required>
                <option value="pick">pilih</option>
                @foreach ($laboratorium as $lab)
                <option value="{{ $lab->laboratorium_id }}">{{ $lab->laboratorium_name }}</option>  
                @endforeach
            </select>
        </div>
            <div class="mb-6 w-full flex flex-wrap items-center gap-4">
                <div class="w-full md:w-1/3">
                    <label for="start_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Mulai</label>
                    <input type="time" id="start_time" name="start_time" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Pilih jam" required min="07:00" max="16:00">
                    @error('start_time')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-full md:w-1/3">
                    <label for="end_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Selesai</label>
                    <input type="time" id="end_time" name="end_time" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Pilih jam" required min="07:00" max="16:00">
                    @error('end_time')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
               
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
        <div class="mb-6"> 
            <label for="information" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
            <textarea id="information" name="information" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" placeholder="Keterangan terkait jadwal"></textarea>
        </div>
        <div class="flex flex-wrap gap-4">
            <button type="submit" class="w-fit border bg-main text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2">
                Submit
            </button>
    
            <a class="w-fit border bg-redpallete text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('schedule.index') }}">
                Cancel
            </a>
        </div>
    </form>
</div>




<script>
    const startTimeInput = document.getElementById('start_time');
    const endTimeInput = document.getElementById('end_time');
    const labSelect = document.getElementById('lab');

    const schedules = {!! json_encode($schedules) !!};
    const isoDate = "{{ date('Y-m-d', strtotime($date))." " }}";


    labSelect.addEventListener('input', validateTimeOrder);
    startTimeInput.addEventListener('change', validateTimeOrder);
    endTimeInput.addEventListener('change', validateTimeOrder);

    function validateTimeOrder() {
        const startTimeValue = startTimeInput.value;
        const endTimeValue = endTimeInput.value;
        // console.log(labSelect.value)

        if (startTimeValue && endTimeValue) {
            // const isoDate = '{{ $date }}';
            const inputStartTime = new Date(isoDate.replace(' ', 'T') + startTimeValue);
            const inputEndTime = new Date(isoDate.replace(' ', 'T') + endTimeValue);

            if (inputStartTime > inputEndTime) {
                alert('Jam Mulai harus lebih awal dari Jam Selesai');
                startTimeInput.value = '';
                endTimeInput.value = '';
            } else {
                for (let i = 0; i < schedules.length; i++) {
                    if(schedules[i].laboratorium_id === labSelect.value){
                        const scheduleStart = new Date(schedules[i].start_time)
                        console.log(scheduleStart)
                        const scheduleEnd = new Date(schedules[i].end_time);
                        
                        if ((inputStartTime >= scheduleStart && inputStartTime <= scheduleEnd) ||
                            (inputEndTime >= scheduleStart && inputEndTime <= scheduleEnd) ||
                            (inputStartTime <= scheduleStart && inputEndTime >= scheduleEnd)) {
                            alert('Waktu input berada di dalam jadwal yang ada. Pilih waktu yang berbeda.');
                            startTimeInput.value = '';
                            endTimeInput.value = '';
                            break;
                        }
                    }
                }
            }
        }
    }
</script>


@endsection