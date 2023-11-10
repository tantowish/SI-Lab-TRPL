@extends('page.layouts.main')

@section('content')
    <!-- Header Start -->
    <div class="w-full bg-slate-200 px-16 py-28">
        <div class="text-center">
            <h1 class="text-2xl font-bold sm:text-3xl lg:text-4xl">About Us</h1>
            <p class="text-base font-semibold sm:text-lg lg:text-xl sm:my-2">Lorem ipsum dolor sit amet consectetur.</p>
            <div class="flex justify-center items-center">
                <svg class="h-4 w-4 mr-2 sm:h-5 sm:w-6 lg:h-6 lg:w-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100" viewBox="0 0 24 24">
                    <path
                        d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 10 21 L 10 14 L 14 14 L 14 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z">
                    </path>
                </svg>
                <h1 class="text-base lg:text-sm">Home / About us</h1>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Section About Start-->
    <div class="max-w-7xl mx-auto">
        <div class="bg-slate-500 mx-8 p-8 -mt-12 sm:p-16 lg:px-32 lg:py-16">
            <div class="text-white flex items-center">
                <div class="w-8/12">
                    <h1 class="text-xl font-semibold sm:text-2xl lg:mb-4">Apa itu Silaboe?</h1>
                    <p class="text-xs text-justify sm:text-base pr-8 sm:pr-16 lg:text-lg lg:pr-32">Lorem ipsum dolor sit
                        amet consectetur adipisicing elit. Laboriosam tenetur sequi at eaque illo dolores in fuga!
                        Praesentium expedita, magni corrupti quidem hic veritatis, eius quasi quae fuga excepturi aspernatur
                        quam qui dicta sunt corporis officiis provident ratione laudantium in.</p>
                </div>
                <div class="w-4/12 lg:w-3/12">
                    <img class="" src="img/penguin.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Section About End-->

    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/2">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/contoh.jpeg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/contoh.jpeg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/contoh.jpeg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/contoh.jpeg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/contoh.jpeg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="w-full lg:w-1/2">
            <div class="mt-8 text-center p-8 max-w-xl mx-auto lg:p-14">
                <h1 class="text-xl mb-2 font-bold md:text-3xl md:mb-4 lg:text-4xl">We Have 8 Laboratorium</h1>
                <p class="text-sm text-justify md:text-base lg:text-xl">Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Voluptas autem qui illum doloremque pariatur, alias nulla, nesciunt laborum quaerat, praesentium
                    rerum dolore deserunt neque animi quos vitae unde eius veniam aperiam rem. Ipsa sint dolorem dicta
                    veniam. Quasi, reiciendis perspiciatis.</p>
            </div>
        </div>
    </div>

    <!-- Section Visi Misi Start-->
    <div class="max-w-7xl mx-auto">
        <div class="bg-slate-500 mx-8 p-8">
            <div class="text-white flex flex-wrap ">
                <div class="w-full lg:w-1/2 mb-8 text-center px-4 lg:mb-0 lg:px-16">
                    <h1 class="text-xl font-semibold sm:text-2xl mb-2">Visi</h1>
                    <p class="text-sm text-justify sm:text-base lg:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Laboriosam tenetur sequi at eaque illo dolores in fuga! Praesentium expedita,
                        magni corrupti quidem hic veritatis, eius quasi quae fuga excepturi aspernatur quam qui dicta sunt
                        corporis officiis provident ratione laudantium in.</p>
                </div>
                <div class="w-full lg:w-1/2 text-center px-4 lg:px-16">
                    <h1 class="text-xl font-semibold sm:text-2xl mb-2">Misi</h1>
                    <p class="text-sm text-justify sm:text-base lg:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Laboriosam tenetur sequi at eaque illo dolores in fuga! Praesentium expedita,
                        magni corrupti quidem hic veritatis, eius quasi quae fuga excepturi aspernatur quam qui dicta sunt
                        corporis officiis provident ratione laudantium in.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Visi Misi End-->


    <!-- Section Visi Misi Start-->
    <div class="max-w-7xl mx-auto py-8 mb-16">
        <div class="flex flex-wrap justify-evenly px-8 lg:justify-between">
            <div class="px-8 py-4 lg:px-0">
                <h1 class="text-slate-600 font-bold text-5xl mb-2 lg:text-6xl">24</h1>
                <p class="text-center text-slate-600 font-semibold text-sm lg:text-xl">Laboran</p>
            </div>
            <div class="px-8 py-4 lg:px-0">
                <h1 class="text-slate-600 font-bold text-5xl mb-2 lg:text-6xl">24</h1>
                <p class="text-center text-slate-600 font-semibold text-sm lg:text-xl">Laboran</p>
            </div>
            <div class="px-8 py-4 lg:px-0">
                <h1 class="text-slate-600 font-bold text-5xl mb-2 lg:text-6xl">24</h1>
                <p class="text-center text-slate-600 font-semibold text-sm lg:text-xl">Laboran</p>
            </div>
            <div class="px-8 py-4 lg:px-0">
                <h1 class="text-slate-600 font-bold text-5xl mb-2 lg:text-6xl">24</h1>
                <p class="text-center text-slate-600 font-semibold text-sm lg:text-xl">Laboran</p>
            </div>
            <div class="px-8 py-4 lg:px-0">
                <h1 class="text-slate-600 font-bold text-5xl mb-2 lg:text-6xl">24</h1>
                <p class="text-center text-slate-600 font-semibold text-sm lg:text-xl">Laboran</p>
            </div>
        </div>
    </div>
@endsection
