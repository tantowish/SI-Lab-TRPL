@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <div class="p-8 lg:px-16">
        <form action="{{ route('project.store') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Proyek</label>
                <input type="text" id="title" name="title" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $project->project_name }}" placeholder="Judul" required>
                @error('title')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6 flex flex-wrap">
                <div class="mb-6 w-full lg:max-w-sm lg:mr-12 lg:mb-0">
                    <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input autocomplete="off" datepicker-format="dd-mm-yyyy" id="start_date" name="start_date" datepicker datepicker-autohide type="text" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" value="{{ \Carbon\Carbon::parse($project->start_date)->format('d-m-Y') }}"  placeholder="Pilih tanggal">
                        @error('start_date')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class=" w-full lg:max-w-sm">
                    <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Selesai (Kosongkan jika tidak ada)</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input autocomplete="off" datepicker-format="dd-mm-yyyy" id="end_date" name="end_date" datepicker datepicker-autohide type="text" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main" value="{{ \Carbon\Carbon::parse($project->end_date)->format('d-m-Y') }}" placeholder="Pilih tanggal">
                    </div>
                    @error('end_date')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
             
            </div>
        
            <div class="mb-6">     
                <label for="document" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Dokumen</label>
                <textarea id="document" name="document" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="...">{{ $project->document_link }}</textarea>
                @error('document')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">     
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="...">{{ $project->description }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full mb-6 lg:max-w-sm">
                <label for="field" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Field</label>
                <div class="relative" onclick="showCheckboxes()">
                    <select id="select" class="w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-main focus:border-main">
                        <option readonly>Pilih Field</option>
                    </select>
                    <div class="overSelect absolute left-0 right-0 top-0 bottom-0"></div>
                </div>
                <div class="text-sm" id="checkboxes">
                    <div class="flex flex-wrap">
                        @foreach ($fields as $field)
                            <div class="flex flex-wrap items-center">
                                <input class="rounded m-2" type="checkbox" id="field_{{ $field->field_id }}" name="pilih[]" value="{{ $field->field_id }}" @if(in_array($field->field_id, $project->projectField->pluck('field_id')->toArray())) checked @endif />
                                <label for="field_{{ $field->field_id }}">{{ $field->field_name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>                
            </div>
            
            
            <div class="flex flex-wrap gap-4">
                <button type="submit" class="w-full bg-main text-white px-3 py-1.5 sm:w-fit">Submit</button>
                <a class="w-full bg-redpallete text-white px-3 py-1.5 text-center sm:w-fit" href="{{ route('project.index') }}">
                    Cancel
                </a>
            </div>
        </form>
    </div>


    <script>
        var expanded = false;
        function showCheckboxes() {
            var checkboxes = document.getElementById("checkboxes");
            var select = document.getElementById("select");
            if (!expanded) {
                checkboxes.style.display = "block";
                expanded = true;
                select.classList.add("border-2", "border-main");
            } else {
                checkboxes.style.display = "none";
                expanded = false;
                select.classList.remove("border", "border-main");
            }
        }
    </script>
@endsection