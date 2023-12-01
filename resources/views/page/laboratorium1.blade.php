@extends('page.layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- Start Judul --}}

    <div class="bg-gray-50">
        <div class="w-full  bg-gray-300 px-16 py-28 bg-cover bg-blend-multiply bg-center"
            style="background-image: url('{{ asset('assets/img/page/laboratorium1/headerbg.png') }}')">
            <div class="text-center text-white">
                <h1 class="text-3xl font-bold lg:text-4xl tracking-wider">Laboratorium</h1>

                <div class="flex justify-center items-center">
                    <svg class="h-4 w-4 mr-2 sm:h-5 sm:w-6 lg:h-6 lg:w-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="100" height="100" viewBox="0 0 24 24">
                        <path
                            d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 10 21 L 10 14 L 14 14 L 14 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z "
                            fill="white">
                        </path>
                    </svg>
                    <h1 class="text-base tracking-wider lg:text-md">Home / Laboratorium</h1>
                </div>
            </div>
        </div>
        <!-- Header End -->
        <div class="max-w-6xl mx-auto">
            <div class="mx-4 md:mx-8 md:p-8 p-4 -mt-16 lg:px-40 lg:py-16 lg:rounded-t-[90px] rounded-t-[70px] bg-[#64c5d3]">
                <div class="text-white flex items-center">
                    <p class="text-sm text-center px-4  lg:text-lg lg:px-12">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae sunt rerum ratione. Quae
                        officiis
                        perspiciatis distinctio repudiandae dignissimos enim iure, aperiam fugit quasi earum, corporis
                        beatae
                        sequi, delectus atque! Amet, repellat? Est porro ullam sapiente quaerat iure nisi amet hic?
                    </p>
                </div>
            </div>
        </div>

        {{-- <div class=" flex items-center justify-center px-16 lg:px-48 md:px-24 py-12 gap-4 lg:my-24">
        <div class="flex flex-wrap -m-4 " id="">

            <div class="flex flex-col animate-section1 bg-white rounded-xl shadow-2xl items-center ">
                <img class="h-[50%] w-full mt-0 rounded-t-xl "src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}"
                    alt="Laboratorium Image" />

                <div class="p-4 lg:px-10    flex flex-col items-center">
                    <p class="mb-6 mx-8 lg:mx-4 md:mx-8 mt-2 font-semibold text-xl text-center">
                        Laboratorium Pengembangan Perangkat Lunak
                    </p>
                    <a href="/laboratorium2"
                        class="hover:bg-[#509ea9] hover:scale-105 mb-4 text-white rounded-lg bg-[#64CDC7] text-lg lg:text-md md:text-sm px-8 md:px-4  mx-auto w-[70%] lg:w-[90%] md:w-[80%]  font-semibold py-[2%]  flex items-center justify-between">
                        <span>Selengkapnya</span>
                        <span class="w-7 h-7" data-feather="chevron-right"></span>
                    </a>
                </div>
            </div>


            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="px-2 py-4 md:w-1/2 lg:w-1/4 shadow-lg animate-section1">
                <div class="h-full rounded-xl overflow-hidden">
                    <img class="lg:h-58 md:h-40 w-full object-cover object-center"
                        src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" alt="Laboratorium Image" />
                    <div
                        class="p-4 lg:px-8 hover:bg-teal-200 hover:text-white transition duration-300 ease-in flex flex-col items-center">
                        <p class="mb-6 mx-2 mt-2 font-semibold text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] hover:scale-105 text-white rounded-xl bg-[#64CDC7] text-lg px-[10%] lg:px-8 font-semibold py-[3%] w-full flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-8 h-8" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}


        <div class="bg-gray-50 lg:mx-24  py-12 md:px-16 px-12">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mx-auto py-2 mb-8">
                <!-- Item 1 -->
                <div
                    class="hover:bg-[#64C5D3] hover:bg-opacity-40 flex flex-col animate-section1 bg-white rounded-xl shadow-2xl items-center card-item "data-aos="fade-up">
                    <img
                        class="h-[45%] w-full mt-0 mb-4 rounded-t-xl "src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" />
                    <div class="p-2 lg:px-10    flex flex-col items-center">
                        <p
                            class="mb-6 mx-6 tracking-wider lg:mx-2 md:mx-8 mt-2 font-semibold text-xl lg:text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] tracking-wider hover:scale-105 mb-4 text-white rounded-lg bg-[#64CDC7] text-md lg:text-md md:text-md  px-6 md:px-6 lg:px-4 mx-auto w-[80%] lg:w-[90%] md:w-[80%]  font-semibold py-[3%]  flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-6 h-6" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>

                <!-- Item 2 -->
                <div
                    class="hover:bg-[#64C5D3] hover:bg-opacity-40 flex flex-col animate-section1 bg-white rounded-xl shadow-2xl items-center card-item "data-aos="fade-up">
                    <img
                        class="h-[45%] w-full mt-0 mb-4 rounded-t-xl "src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" />
                    <div class="p-2 lg:px-10    flex flex-col items-center">
                        <p
                            class="mb-6 mx-6 tracking-wider lg:mx-2 md:mx-8 mt-2 font-semibold text-xl lg:text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] tracking-wider hover:scale-105 mb-4 text-white rounded-lg bg-[#64CDC7] text-md lg:text-md md:text-md  px-6 md:px-6 lg:px-4 mx-auto w-[80%] lg:w-[90%] md:w-[80%]  font-semibold py-[3%]  flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-6 h-6" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>

                <!-- Item 3 -->
                <div
                    class="hover:bg-[#64C5D3] hover:bg-opacity-40 flex flex-col animate-section1 bg-white rounded-xl shadow-2xl items-center card-item "data-aos="fade-up">
                    <img
                        class="h-[45%] w-full mt-0 mb-4 rounded-t-xl "src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" />
                    <div class="p-2 lg:px-10    flex flex-col items-center">
                        <p
                            class="mb-6 mx-6 tracking-wider lg:mx-2 md:mx-8 mt-2 font-semibold text-xl lg:text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] tracking-wider hover:scale-105 mb-4 text-white rounded-lg bg-[#64CDC7] text-md lg:text-md md:text-md  px-6 md:px-6 lg:px-4 mx-auto w-[80%] lg:w-[90%] md:w-[80%]  font-semibold py-[3%]  flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-6 h-6" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>

                <!-- Item 4 -->
                <div
                    class="hover:bg-[#64C5D3] hover:bg-opacity-40 flex flex-col animate-section1 bg-white rounded-xl shadow-2xl items-center card-item "data-aos="fade-up">
                    <img
                        class="h-[45%] w-full mt-0 mb-4 rounded-t-xl "src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" />
                    <div class="p-2 lg:px-10    flex flex-col items-center">
                        <p
                            class="mb-6 mx-6 tracking-wider lg:mx-2 md:mx-8 mt-2 font-semibold text-xl lg:text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] tracking-wider hover:scale-105 mb-4 text-white rounded-lg bg-[#64CDC7] text-md lg:text-md md:text-md  px-6 md:px-6 lg:px-4 mx-auto w-[80%] lg:w-[90%] md:w-[80%]  font-semibold py-[3%]  flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-6 h-6" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mx-auto py-2 mb-8">
                <!-- Item 1 -->
                <div
                    class="hover:bg-[#64C5D3] hover:bg-opacity-40 flex flex-col animate-section1 bg-white rounded-xl shadow-2xl items-center card-item "data-aos="fade-up">
                    <img
                        class="h-[45%] w-full mt-0 mb-4 rounded-t-xl "src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" />
                    <div class="p-2 lg:px-10    flex flex-col items-center">
                        <p
                            class="mb-6 mx-6 tracking-wider lg:mx-2 md:mx-8 mt-2 font-semibold text-xl lg:text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] tracking-wider hover:scale-105 mb-4 text-white rounded-lg bg-[#64CDC7] text-md lg:text-md md:text-md  px-6 md:px-6 lg:px-4 mx-auto w-[80%] lg:w-[90%] md:w-[80%]  font-semibold py-[3%]  flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-6 h-6" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>

                <!-- Item 2 -->
                <div
                    class="hover:bg-[#64C5D3] hover:bg-opacity-40 flex flex-col animate-section1 bg-white rounded-xl shadow-2xl items-center card-item "data-aos="fade-up">
                    <img
                        class="h-[45%] w-full mt-0 mb-4 rounded-t-xl "src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" />
                    <div class="p-2 lg:px-10    flex flex-col items-center">
                        <p
                            class="mb-6 mx-6 tracking-wider lg:mx-2 md:mx-8 mt-2 font-semibold text-xl lg:text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] tracking-wider hover:scale-105 mb-4 text-white rounded-lg bg-[#64CDC7] text-md lg:text-md md:text-md  px-6 md:px-6 lg:px-4 mx-auto w-[80%] lg:w-[90%] md:w-[80%]  font-semibold py-[3%]  flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-6 h-6" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>

                <!-- Item 3 -->
                <div
                    class="hover:bg-[#64C5D3] hover:bg-opacity-40 flex flex-col animate-section1 bg-white rounded-xl shadow-2xl items-center card-item "data-aos="fade-up">
                    <img
                        class="h-[45%] w-full mt-0 mb-4 rounded-t-xl "src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" />
                    <div class="p-2 lg:px-10    flex flex-col items-center">
                        <p
                            class="mb-6 mx-6 tracking-wider lg:mx-2 md:mx-8 mt-2 font-semibold text-xl lg:text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] tracking-wider hover:scale-105 mb-4 text-white rounded-lg bg-[#64CDC7] text-md lg:text-md md:text-md  px-6 md:px-6 lg:px-4 mx-auto w-[80%] lg:w-[90%] md:w-[80%]  font-semibold py-[3%]  flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-6 h-6" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>

                <!-- Item 4 -->
                <div
                    class="hover:bg-[#64C5D3] hover:bg-opacity-40 flex flex-col animate-section1 bg-white rounded-xl shadow-2xl items-center card-item "data-aos="fade-up">
                    <img
                        class="h-[45%] w-full mt-0 mb-4 rounded-t-xl "src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" />
                    <div class="p-2 lg:px-10    flex flex-col items-center">
                        <p
                            class="mb-6 mx-6 tracking-wider lg:mx-2 md:mx-8 mt-2 font-semibold text-xl lg:text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] tracking-wider hover:scale-105 mb-4 text-white rounded-lg bg-[#64CDC7] text-md lg:text-md md:text-md  px-6 md:px-6 lg:px-4 mx-auto w-[80%] lg:w-[90%] md:w-[80%]  font-semibold py-[3%]  flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-6 h-6" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mx-auto py-2 mb-8">
                <!-- Item 1 -->
                <div
                    class="hover:bg-[#64C5D3] hover:bg-opacity-40 flex flex-col animate-section1 bg-white rounded-xl shadow-2xl items-center card-item "data-aos="fade-up">
                    <img
                        class="h-[45%] w-full mt-0 mb-4 rounded-t-xl "src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" />
                    <div class="p-2 lg:px-10    flex flex-col items-center">
                        <p
                            class="mb-6 mx-6 tracking-wider lg:mx-2 md:mx-8 mt-2 font-semibold text-xl lg:text-xl text-center ">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] tracking-wider hover:scale-105 mb-4 text-white rounded-lg bg-[#64CDC7] text-md lg:text-md md:text-md  px-6 md:px-6 lg:px-4 mx-auto w-[80%] lg:w-[90%] md:w-[80%]  font-semibold py-[3%]  flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-6 h-6" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>

                <!-- Item 2 -->
                <div
                    class="hover:bg-[#64C5D3] hover:bg-opacity-40 flex flex-col animate-section1 bg-white rounded-xl shadow-2xl items-center card-item "data-aos="fade-up">
                    <img
                        class="h-[45%] w-full mt-0 mb-4 rounded-t-xl "src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" />
                    <div class="p-2 lg:px-10    flex flex-col items-center">
                        <p
                            class="mb-6 mx-6 tracking-wider lg:mx-2 md:mx-8 mt-2 font-semibold text-xl lg:text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] tracking-wider hover:scale-105 mb-4 text-white rounded-lg bg-[#64CDC7] text-md lg:text-md md:text-md  px-6 md:px-6 lg:px-4 mx-auto w-[80%] lg:w-[90%] md:w-[80%]  font-semibold py-[3%]  flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-6 h-6" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>

                <!-- Item 3 -->
                <div
                    class="hover:bg-[#64C5D3] hover:bg-opacity-40 flex flex-col animate-section1 bg-white rounded-xl shadow-2xl items-center card-item "data-aos="fade-up">
                    <img
                        class="h-[45%] w-full mt-0 mb-4 rounded-t-xl "src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" />
                    <div class="p-2 lg:px-10    flex flex-col items-center">
                        <p
                            class="mb-6 mx-6 tracking-wider lg:mx-2 md:mx-8 mt-2 font-semibold text-xl lg:text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] tracking-wider hover:scale-105 mb-4 text-white rounded-lg bg-[#64CDC7] text-md lg:text-md md:text-md  px-6 md:px-6 lg:px-4 mx-auto w-[80%] lg:w-[90%] md:w-[80%]  font-semibold py-[3%]  flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-6 h-6" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>

                <!-- Item 4 -->
                <div
                    class="hover:bg-[#64C5D3] hover:bg-opacity-40 flex flex-col animate-section1 bg-white rounded-xl shadow-2xl items-center card-item "data-aos="fade-up">
                    <img
                        class="h-[45%] w-full mt-0 mb-4 rounded-t-xl "src="{{ asset('assets/img/page/laboratorium1/gambarcontent.png') }}" />
                    <div class="p-2 lg:px-10    flex flex-col items-center">
                        <p
                            class="mb-6 mx-6 tracking-wider lg:mx-2 md:mx-8 mt-2 font-semibold text-xl lg:text-xl text-center">
                            Laboratorium Pengembangan Perangkat Lunak
                        </p>
                        <a href="/laboratorium2"
                            class="hover:bg-[#509ea9] tracking-wider hover:scale-105 mb-4 text-white rounded-lg bg-[#64CDC7] text-md lg:text-md md:text-md  px-6 md:px-6 lg:px-4 mx-auto w-[80%] lg:w-[90%] md:w-[80%]  font-semibold py-[3%]  flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-6 h-6" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

    <script src="tailwind.config.js"></script>
    <script>
        feather.replace();
    </script>


    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil semua elemen dengan class card-item
            var cards = document.querySelectorAll('.card-item');

            // Setiap card akan muncul dengan penundaan
            cards.forEach(function(card, index) {
                // Hitung penundaan berdasarkan indeks
                var delay = index * 300; // Sesuaikan nilai penundaan (dalam milidetik)

                // Atur penundaan menggunakan atribut style dan setTimeout
                card.style.transitionDelay = delay + 'ms';

                // Tambahkan class 'aos-init' untuk memastikan AOS memproses elemen tersebut
                card.classList.add('aos-init');
            });

            // Inisialisasi AOS setelah menetapkan penundaan pada setiap card
            AOS.init({
                once: true, // Efek hanya dijalankan sekali
                offset: 50, // Offset scroll sebelum efek dimulai
            });

            // Tambahkan class 'smooth-appear' ke elemen dengan class 'card-item'
            cards.forEach(function(card) {
                card.classList.add('smooth-appear');
            });

        });
    </script>
@endsection
