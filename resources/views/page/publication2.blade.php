@extends('page.layouts.main')

@section('content')
    <div class="bg-gray-50">
        {{-- Start Judul --}}
        <div class="w-full bg-gray-400 px-16 py-28 bg-cover bg-blend-multiply bg-center "
            style="background-image: url('{{ asset('assets/img/page/publication3/bgpublication3.png') }}')">

            <div class="text-center">
                <h1 class=" text-white font-bold text-3xl lg:text-5xl">
                    Publication
                </h1>
                <div class="flex justify-center items-center">
                    <svg class="h-4 w-4 mr-2 sm:h-5 sm:w-6 lg:h-6 lg:w-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="100" height="100" viewBox="0 0 24 24">
                        <path
                            d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 10 21 L 10 14 L 14 14 L 14 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z"
                            fill="white">
                        </path>
                    </svg>
                    <h1 class="text-base text-white lg:text-lg">Home / Publication</h1>
                </div>
            </div>
        </div>
        <!-- Header End -->
        <!-- Section About Start-->
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
        <!-- Section About End-->

        <section class="h-full flex items-center text-black ">
            <div class="container px-16 md:px-2 lg:px-2 py-12 md:py-24 mx-auto max-w-4xl">
                <div class="flex flex-wrap justify-center md:gap-4 gap-12 lg:gap-8 max-w-8xl w-full max-h-5xl h-full">

                    <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 max-w-3xl ">
                        <div
                            class="w-full rounded-lg overflow-hidden justify-center flex flex-col items-center shadow-2xl card lg:py-12 py-12   md:py-8">
                            <div class="bg-[#EFD892] w-[160px] h-[160px] rounded-[100px] flex justify-center">
                                <div class="items-center justify-center flex p-4 h-8px w-8px">
                                    <img src="{{ asset('assets/img/page/publication2/Pengabdian-image.png') }}"
                                        alt="Pengabdian Image">
                                </div>
                            </div>
                            <div class="p-4 ease-in flex flex-col items-center">
                                <a href="\publication3" class="font-bold text-2xl text-center">
                                    Pengabdian
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 max-w-3xl">
                        <div
                            class="w-full rounded-lg overflow-hidden justify-center flex flex-col items-center shadow-2xl card lg:py-12 py-12  md:py-8">
                            <div class="bg-[#E46F5B] w-[160px] h-[160px] rounded-[100px] flex justify-center">
                                <div class="items-center justify-center flex p-4 h-8px w-8px">
                                    <img src="{{ asset('assets/img/page/publication2/Proyek.png') }}" alt="Proyek Image">
                                </div>
                            </div>
                            <div class="p-4 ease-in flex flex-col items-center">
                                <a href="\publication3" class="font-bold text-2xl text-center">
                                    Proyek
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 max-w-3xl">
                        <div
                            class="w-full rounded-lg overflow-hidden justify-center flex flex-col items-center shadow-2xl card lg:py-12 py-12  md:py-8">
                            <div class="bg-[#B5D2F1] w-[160px] h-[160px] rounded-[100px] flex justify-center">
                                <div class="items-center justify-center flex p-4 h-8px w-8px">
                                    <img src="{{ asset('assets/img/page/publication2/Penelitian-image.png') }}"
                                        alt="Penelitian Image">
                                </div>
                            </div>
                            <div class="p-4 ease-in flex flex-col items-center">
                                <a href="\publication3" class="font-bold text-2xl text-center">
                                    Penelitian
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
