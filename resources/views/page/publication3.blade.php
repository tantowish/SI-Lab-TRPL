@extends('page.layouts.main')

@section('content')
    {{-- Start Judul --}}
    {{-- <div class="w-full bg-gray-400  px-16 py-24 bg-blend-multiply bg-cover bg-center"
    style="background-image: url('{{ asset('assets/img/page/publication1/bg.png') }}')"> --}}


    <div class="w-full bg-gray-400 px-16 py-28 bg-cover bg-blend-multiply bg-center "
        style="background-image: url('{{ asset('assets/img/page/publication3/bgpublication3.png') }}')">
        <div class="text-center text-white">
            <h1 class=" font-bold text-3xl lg:text-5xl tracking-wider">Publication</h1>
            <div class="flex justify-center items-center pt-2">
                <svg class="h-4 w-4 mr-2 sm:h-5 sm:w-6 lg:h-6 lg:w-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100" viewBox="0 0 24 24">
                    <path
                        d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 10 21 L 10 14 L 14 14 L 14 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z"
                        fill="white">
                    </path>
                </svg>
                <div class="flex flex-row text-base text-white lg:text-lg tracking-wider gap-4">
                    <a
                        href="\">Home</a>
                        <p>/</p>
                        <a href="\publication2">Publication</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Header End -->

    <!-- Section Publication Start-->
    <div class="max-w-6xl mx-auto ">
        <div
            class="mx-4 md:mx-8 md:px-32 md:py-12 p-4 px-8 -mt-16 lg:px-40 lg:py-16 rounded-t-[70px] md:rounded-t-[70px] lg:rounded-t-[80px] bg-[#64c5d3]">
            <div class="text-white flex items-center">
                <p class="text-sm text-center  lg:text-lg lg:px-24">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae sunt rerum ratione. Quae
                    officiis
                    perspiciatis distinctio repudiandae dignissimos enim iure, aperiam fugit quasi earum, corporis
                    beatae
                    sequi, delectus atque! Amet, repellat? Est porro ullam sapiente quaerat iure nisi amet hic?
                </p>
            </div>
        </div>
    </div>
    <!-- Section Publication End-->

    <div class=" p-8  ">
        <form class="flex justify-center items-center w-full lg:pt-12">
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

    <!-- Artikel Start -->
    <div class="bg-white lg:px-32 lg:mx-12 mx-8 mb-4  lg:mb-16 md:px-4">
        <div class="flex flex-col mb-6 text-justify">
            <div class="text-xl  font-semibold ">Lorem ipsum dolor sit amet.</div>
            <a href="\publication4" class="text-xs text-blue-600 font-semibold py-2 ">Lorem ipsum dolor sit
                amet.</a>
            <div class="text-sm">...itaque dignissimos veniam facere ad error numquam minima illo iure perferendis
                doloremque, commodi architecto soluta vel placeat expedita autem exercitationem recusandae sunt mollitia sit
                incidunt eligendi? Voluptate necessitatibus inventore impedit iure. Veniam, praesentium ipsum. Aut,
                explicabo? Accusamus sunt minus modi error perspiciatis cum velit vitae eius sint voluptatibus! Obcaecati
                incidunt nobis doloremque soluta architecto...</div>
        </div>

        <div class="flex flex-col mb-6 text-justify">
            <div class="text-xl  font-semibold ">Lorem ipsum dolor sit amet.</div>
            <a href="\publication4" class="text-xs text-blue-600 font-semibold py-2 ">Lorem ipsum dolor sit
                amet.</a>
            <div class="text-sm">...itaque dignissimos veniam facere ad error numquam minima illo iure perferendis
                doloremque, commodi architecto soluta vel placeat expedita autem exercitationem recusandae sunt mollitia sit
                incidunt eligendi? Voluptate necessitatibus inventore impedit iure. Veniam, praesentium ipsum. Aut,
                explicabo? Accusamus sunt minus modi error perspiciatis cum velit vitae eius sint voluptatibus! Obcaecati
                incidunt nobis doloremque soluta architecto...</div>
        </div>
        <div class="flex flex-col mb-6 text-justify">
            <div class="text-xl  font-semibold ">Lorem ipsum dolor sit amet.</div>
            <a href="\publication4" class="text-xs text-blue-600 font-semibold py-2 ">Lorem ipsum dolor sit
                amet.</a>
            <div class="text-sm">...itaque dignissimos veniam facere ad error numquam minima illo iure perferendis
                doloremque, commodi architecto soluta vel placeat expedita autem exercitationem recusandae sunt mollitia sit
                incidunt eligendi? Voluptate necessitatibus inventore impedit iure. Veniam, praesentium ipsum. Aut,
                explicabo? Accusamus sunt minus modi error perspiciatis cum velit vitae eius sint voluptatibus! Obcaecati
                incidunt nobis doloremque soluta architecto...</div>
        </div>
    </div>
@endsection
