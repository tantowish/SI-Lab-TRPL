@extends('page.layouts.main')

@section('content')
    <div class="w-full  bg-gray-400 px-16 py-28 bg-cover bg-blend-multiply bg-center"
        style="background-image: url('{{ asset('assets/img/page/laboratorium1/headerbg.png') }}')">
        <div class="text-center text-white">

            <h1 class="text-2xl font-bold sm:text-3xl lg:text-5xl tracking-wider">Membership</h1>

            <div class="flex justify-center items-center">
                <svg class="h-4 w-4 mr-2 sm:h-5 sm:w-6 lg:h-6 lg:w-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100" viewBox="0 0 24 24">
                    <path
                        d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 10 21 L 10 14 L 14 14 L 14 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z"
                        fill="white">
                    </path>
                </svg>
                <h1 class="text-base lg:text-sm py-2  tracking-wider">Home / Membership</h1>

            </div>
        </div>
    </div>




    <div class=" py-12 md:px-12 lg:px-52 px-8 lg:py-32   w-full">
        <div class="flex lg:flex-row md:flex-row flex-col  justify-between gap-4">
            <img src="{{ asset('assets/img/page/membership1/image 28.png') }}"
                class="px-6 lg:px-0 lg:w-[340px] lg:h-[370px] bg-cover" alt="Proyek Image">
            <div class="flex flex-col  py-2 lg:pr-12  md:pr-4  justify-center">
                <div class="font-bold text-lg lg:text-2xl flex text-left">{{$labAdmin->name}}
                </div>
                <div class="text-md lg:text-xl py-2 flex  text-left">
                    {{$labAdmin->expertise}}
                </div>
                <div class="pt-2 md:pt-12  lg:pt-12 text-left">
                    <div class="text-sm lg:text-xl">{{$labAdmin->NIKA}}</div>
                    <div class="text-sm lg:text-xl">
                        Email : {{$labAdmin->email}}
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-black w-full h-[2px] my-4"></div>

        <div class="text-sm lg:text-lg text-justify">

            {{$labAdmin->description}}

        </div>

        <div class="flex flex-col py-12">
            <div class="text-lg lg:text-xl font-semibold">
                AREA OF EXPERTISE (DIVISION/ GROUP/ FIELD)
            </div>
            <div class="bg-black w-full h-[1px] my-2"></div>

            <div class="text-md lg:text-lg">

                {{$labAdmin->expertise}}

            </div>
        </div>

        <div class="flex flex-col py-8">
            <div class="text-lg font-semibold lg:text-xl ">LATEST PROJECT</div>
            <div class="bg-black w-full h-[1px] my-2"></div>
            <h1 class="text-md">
                Artificial Intelligence, IoT, Machine Learning cluster - Information
                Technology, 2022
            </h1>
            <h1 class="text-md">
                Pengembangan Sistem Manajemen Proyek Kolaboratif - Information
                Technology, 2022
            </h1>
            <h1 class="text-md">
                Pengembangan Aplikasi Kesehatan dan Kesejahteraan - Information
                Technology, 2021
            </h1>
            <h1 class="text-md">
                Pengembangan Aplikasi Kesehatan dan Kesejahteraan - Information
                Technology, 2021
            </h1>
            <h1 class="text-md">
                Pengembangan Aplikasi Kesehatan dan Kesejahteraan - Information
                Technology, 2023
            </h1>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
@endsection
