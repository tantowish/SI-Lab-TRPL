@extends('dashboard.layouts.main')

@section('content')
<div class="flex flex-wrap gap-8">            
    <div class="w-full relative overflow-x-auto lg:w-1/6">
        <table class="w-full text-sm text-left text-gray-500 border-2 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-main dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Akun
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <h3>MAIL UGM</h3>
                        <p>example@gmail.com</p>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="w-full lg:w-9/12">
        <div class="relative overflow-x-auto border-2 mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-main dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Jadwal 14 Agustus 2023
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            <h3>Laboratorium Multimedia</h3>
                            <p>07.15 - 11.55 WIB  |  Praktikum Pemrograman Web  |  Agus Riyadi</p>
                        </th>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            <h3>Laboratorium Multimedia</h3>
                            <p>07.15 - 11.55 WIB  |  Praktikum Pemrograman Web  |  Agus Riyadi</p>
                        </th>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            <h3>Laboratorium Multimedia</h3>
                            <p>07.15 - 11.55 WIB  |  Praktikum Pemrograman Web  |  Agus Riyadi</p>
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
                            Notifikasi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white">
                            <h3 class="font-medium mb-1">Project Pemindaian</h3>
                            <p class="text-gray-600 mb-2">By Galadik</p>
                            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum voluptatum, sed enim officia placeat aspernatur expedita commodi tempora corrupti repellendus, error exercitationem odio facere quibusdam maxime explicabo earum. Distinctio, alias?</p>
                        </th>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white">
                            <h3 class="font-medium mb-1">Project Pemindaian</h3>
                            <p class="text-gray-600 mb-2">By Galadik</p>
                            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum voluptatum, sed enim officia placeat aspernatur expedita commodi tempora corrupti repellendus, error exercitationem odio facere quibusdam maxime explicabo earum. Distinctio, alias?</p>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection