@extends('page.layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/grid.css') }}">


    <div class="w-full  bg-gray-400 px-16 py-28 bg-cover bg-blend-multiply bg-center"
        style="background-image: url('{{ asset('assets/img/page/laboratorium1/headerbg.png') }}')">
        <div class="text-center text-white">

            <h1 class="text-3xl font-bold  lg:text-5xl tracking-wider ">Membership</h1>
            <div class="flex justify-center items-center py-2 gap-3 ">
                <span class="w-4 h-4" data-feather="users"></span>
                <h1 class="text-base lg:text-sm tracking-wider ">Home / Membership</h1>

            </div>
        </div>
    </div>

    <div class=" px-8 lg:pt-12 pt-16">



        <form class="flex justify-center items-center ">
            <label for="default-search" class=" text-sm font-medium text-black sr-only  dark:text-black ">Search</label>
            <div class="relative w-[90%] lg:w-[60%] mx-auto ">
                <div class="absolute inset-y-0 left-0 right-0 flex items-center pl-4 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-3 pl-10 text-sm text-black border border-gray-300 rounded-[500px] bg-gray-50 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-200 dark:border-gray-100 dark:placeholder-gray-400 dark:text-black dark:focus:ring-gray-200 dark:focus:border-gray-500"
                    placeholder="Search " required />
                <button type="submit"
                    class="text-white  right-2.5 bottom-1.5 absolute bg-[#64c5d3] hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-[500px] text-xs px-4 py-2 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Search
                </button>
            </div>
        </form>



    </div>
    <div class=" justify-center px-8 my-16 lg:px-32 md:px-12 sm:text-center md:text-center lg:text-left">
        <div class="text-xl md:text-2xl lg:text-3xl font-bold text-left">Keanggotaan Laboratorium</div>

        <div class="flex flex-row py-4 lg:gap-12 md:gap-8 text-sm">
            <div class="flex flex-row gap-2 items-center font-semibold">
                <span class="w-4 h-4" data-feather="clock"></span>
                <p>7 Agustus 2023, 13.25</p>
            </div>
            <div class="flex flex-row gap-2 items-center font-semibold text-sm pl-2">
                <span class="w-4 h-4" data-feather="user"></span>
                <p>Oleh: admin</p>
            </div>
        </div>
        <div class="bg-black flex justify-center w-full h-[2px]"></div>


        @foreach ($labAdmins as $labAdmin)
            
        <div class="flex py-8 items-center lg:flex-row md:flex-row flex-col justify-center lg:gap-12 md:gap-8 gap-8">
            
            <img src="{{ asset('assets/img/page/membership1/image 28.png') }}" alt="Proyek Image">

            <div class="flex flex-col w-full py-4 ">
                <div class="flex flex-row gap-[100px] md:gap-[108px] lg:gap-[120px]">
                    <div class="text-sm">Nama</div>

                    <div class="">: {{$labAdmin->name}}</div>
                </div>
                <div class="bg-black h-[1px] my-2"></div>

                <div class="flex flex-row gap-[108px] md:gap-[115px] lg:gap-[126px]">

                    <div class="">: {{$labAdmin->NIKA}}</div>

                </div>
                <div class="bg-black h-[1px] my-2"></div>

                <div class="flex flex-row gap-[24px] md:gap-[30px] lg:gap-[41px]">
                    <div class="text-sm">Bidang Keahlian</div>
e
                    <div class="">: {{$labAdmin->expertise}}</div>

                </div>
                <div class="bg-black h-[1px] my-2"></div>

                <div class="flex flex-row gap-[107px] md:gap-[112px] lg:gap-[124px]">
                    <div class="text-sm">Email</div>

                    <div class="">: {{$labAdmin->email}}</div>
                </div>
                <div class="bg-black h-[1px] my-2"></div>

                <a class="btn text-left mt-5 text-sm font-bold flex items-center  flex-row" style="color: #64c5d3"

                    href="{{route('membership.detail', $labAdmin->lab_admin_id)}}">

                    Selengkapnya
                    <span class="w-6 h-6" data-feather="chevron-right"></span>
                </a>
            </div>
        </div>

        <div class="bg-black flex justify-center w-full h-[2px]"></div>
        @endforeach

    </div>


    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script> --}}

    <script>
        feather.replace();
    </script>
@endsection
