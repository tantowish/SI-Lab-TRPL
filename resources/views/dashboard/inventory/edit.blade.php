@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
<div class="p-8 lg:px-16 max-w-2xl">
    <form action="{{ route('inventory.update', $inventory->inventory_id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-6">
            <label for="item_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang</label>
            <input type="text" id="item_name" name="item_name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="eg: Monitor" value="{{ $inventory->item_name }}" required>
            @error('item_name')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="no_item" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Barang</label>
            <input type="text" id="no_item" name="no_item" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="eg: M002" required value="{{ $inventory->no_item }}">
            @error('no_item')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-wrap lg:gap-5 justify-between">
            <div class="w-full lg:max-w-[250px] mb-6">
                <label for="good" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumalah kondisi bagus</label>
                <input type="number" id="good" name="good" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="eg: 20" required min="0" value="{{ $inventory->good }}">
                @error('good')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full lg:max-w-[250px] mb-6">
                <label for="bad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumalah kondisi buruk</label>
                <input type="number" id="bad" name="bad" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="eg: 20" required min="0" value="{{ $inventory->bad }}">
                @error('bad')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-6">     
            <label for="information" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Informasi</label>
            <textarea id="information" name="information" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="...">{{ $inventory->information }}</textarea>
            @error('information')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="flex flex-wrap gap-4">
            <button type="submit" class="w-full bg-main text-white px-3 py-1.5 sm:w-fit">Submit</button>
            <a class="w-full bg-redpallete text-white px-3 py-1.5 text-center sm:w-fit" href="{{ route('inventory.show', $laboratorium) }}">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection