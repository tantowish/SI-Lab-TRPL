@extends('page.layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Header Start -->


    <div class="bg-gray-50">
        <div class="w-full bg-gray-400 px-12 py-28 bg-cover bg-blend-multiply bg-center "
            style="background-image: url('{{ asset('assets/img/page/daftarsoftware/image14.png') }}')">
            <div class="text-center">
                <h1 class="text-3xl text-white font-bold lg:text-4xl tracking-wider ">
                    Data Software
                </h1>
                <div class="flex justify-center items-center">
                    <svg class="h-4 w-4 mr-2 sm:h-5 sm:w-6 lg:h-6 lg:w-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="100" height="100" viewBox="0 0 24 24">
                        <path
                            d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 10 21 L 10 14 L 14 14 L 14 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z"
                            fill="white">
                        </path>
                    </svg>
                    <h1 class="text-base text-white lg:text-lg tracking-wider">Home / Daftar Software</h1>
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

        <div class="bg-gray-50 lg:px-48 py-12 md:px-24 px-12">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mx-auto py-2">
                <!-- Item 1 -->
                <div class="flex flex-col  card-item bg-white rounded-lg shadow-2xl overflow-hidden items-center"
                    data-aos="fade-up">

                    <div class="py-8 lg:pb-8 lg:px-6 px-8  flex flex-col justify-center items-center">
                        <h2 class="text-lg lg:text-lg pb-4 font-bold">Visual Studio Code</h2>
                        <div class="bg-[#9EDBE4] w-[100px] h-[100px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/visualcode.png') }}" alt="IntelliJ">
                        </div>

                        <p class="text-center px-6 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex flex-col  card-item bg-white rounded-lg shadow-2xl overflow-hidden items-center"
                    data-aos="fade-up">

                    <div class="py-8 px-8 lg:pb-8 lg:px-6 flex flex-col justify-center items-center">
                        <h2 class="text-lg pb-4 font-bold">IntelliJ</h2>
                        <div class="bg-[#F1D5FA] w-[100px] h-[100px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/intellij.png') }}" alt="IntelliJ">
                        </div>

                        <p class="text-center px-6 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex flex-col  card-item bg-white rounded-lg shadow-2xl overflow-hidden items-center"
                    data-aos="fade-up">

                    <div class="py-8 px-8 lg:pb-8   lg:px-6  flex flex-col justify-center items-center">
                        <h2 class="text-lg pb-4 font-bold">Android Studio</h2>
                        <div class="bg-[#6482D3] w-[100px] h-[100px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/androidstudio.png') }}" alt="Android Studio">
                        </div>
                        <p class="text-center px-6 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="flex flex-col  card-item bg-white rounded-lg shadow-2xl overflow-hidden items-center"
                    data-aos="fade-up">
                    <div class="py-8 px-8 lg:pb-8 lg:px-6 flex flex-col justify-center items-center">
                        <h2 class="text-lg pb-4 font-bold">Blender</h2>
                        <div class="bg-[#EFD892] w-[100px] h-[100px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/blender.png') }}" alt="Blender">
                        </div>
                        <p class="text-center px-6 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>
            </div>



            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mx-auto py-8">
                <!-- Item 1 -->
                <div class="flex flex-col  card-item bg-white rounded-lg shadow-2xl overflow-hidden items-center"
                    data-aos="fade-up">
                    <div class="py-8 px-8 lg:pb-8 lg:px-6 flex flex-col justify-center items-center">
                        <h2 class="text-lg pb-4 font-bold">Adobe Ilustrator</h2>
                        <div class="bg-[#E46F5B] w-[100px] h-[100px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/adobe-illustrator.png') }}"
                                alt="Adobe Ilustrator">
                        </div>

                        <p class="text-center px-6 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex flex-col  card-item bg-white rounded-lg shadow-2xl overflow-hidden items-center"
                    data-aos="fade-up">
                    <div class="py-8 px-8 lg:pb-8 lg:px-6  flex flex-col justify-center items-center">
                        <h2 class="text-lg pb-4 font-bold">Adobe Premier</h2>
                        <div class="bg-[#BDD4EC] w-[100px] h-[100px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/adobe-premiere.png') }}" alt="Adobe Premier">
                        </div>

                        <p class="text-center px-6 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex flex-col  card-item bg-white rounded-lg shadow-2xl overflow-hidden items-center"
                    data-aos="fade-up">
                    <div class="py-8 px-8 lg:pb-8 lg:px-6  flex flex-col justify-center items-center">
                        <h2 class="text-lg pb-4 font-bold">Adobe After Effects</h2>
                        <div class="bg-[#D2CDF8] w-[100px] h-[100px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/adobe-after-effects.png') }}"
                                alt="Adobe After Effects">
                        </div>
                        <p class="text-center px-6 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="flex flex-col  card-item bg-white rounded-lg shadow-2xl overflow-hidden items-center"
                    data-aos="fade-up">
                    <div class="py-8 px-8 lg:pb-8 lg:px-6  flex flex-col justify-center items-center">
                        <h2 class="text-lg pb-4 font-bold">Adobe Photoshop</h2>
                        <div class="bg-[#4B82A9] w-[100px] h-[100px] rounded-[100px] flex items-center justify-center">
                            <img
                                src="{{ asset('assets/img/page/daftarsoftware/adobe-photoshop.png') }}"alt="Adobe Photoshop">
                        </div>
                        <p class="text-center px-6 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mx-auto py-4">



                <!-- Item 1 -->
                <div class="flex flex-col  card-item bg-white rounded-lg shadow-2xl overflow-hidden items-center"
                    data-aos="fade-up">
                    <div class="py-8 px-8 lg:pb-8 lg:px-6  flex flex-col justify-center items-center">
                        <h2 class="text-lg pb-4 font-bold">Microsoft Word</h2>
                        <div class="bg-[#B5D2F1] w-[100px] h-[100px] rounded-[100px] flex items-center justify-center">
                            <img
                                src="{{ asset('assets/img/page/daftarsoftware/microsoft-word.png') }}"alt=">Microsoft Word">
                        </div>

                        <p class="text-center px-6 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex flex-col  card-item bg-white rounded-lg shadow-2xl overflow-hidden items-center"
                    data-aos="fade-up">
                    <div class="py-8 px-8 lg:pb-8 lg:px-6  flex flex-col justify-center items-center">
                        <h2 class="text-lg pb-4 font-bold">Microsoft Excel</h2>
                        <div class="bg-[#9FE5CF] w-[100px] h-[100px] rounded-[100px] flex items-center justify-center">
                            <img
                                src="{{ asset('assets/img/page/daftarsoftware/microsoft-excel.png') }}"alt="Microsoft Excel">
                        </div>

                        <p class="text-center px-6 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex flex-col  card-item bg-white rounded-lg shadow-2xl overflow-hidden items-center"
                    data-aos="fade-up">
                    <div class="py-8 px-8 lg:pb-8 lg:px-6  flex flex-col justify-center items-center">
                        <h2 class="text-lg pb-4 font-bold">Microsoft Power Point</h2>
                        <div class="bg-[#EFD892] w-[100px] h-[100px] rounded-[100px] flex items-center justify-center">
                            <img
                                src="{{ asset('assets/img/page/daftarsoftware/microsoft-powerpoint.png') }}"alt="Microsoft Power Point">
                        </div>
                        <p class="text-center px-6 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="flex flex-col  card-item bg-white rounded-lg shadow-2xl overflow-hidden items-center"
                    data-aos="fade-up">
                    <div class="py-8 px-8 lg:pb-8 lg:px-6  flex flex-col justify-center items-center">
                        <h2 class="text-lg pb-4 font-bold">Microsoft One Note</h2>
                        <div class="bg-[#D1CDF8] w-[100px] h-[100px] rounded-[100px] flex items-center justify-center">
                            <img
                                src="{{ asset('assets/img/page/daftarsoftware/microsoft-onenote.png') }}"alt="Microsoft One Note">
                        </div>
                        <p class="text-center px-6 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil semua elemen dengan class card-item
            var cards = document.querySelectorAll('.card-item');

            // Setiap card akan muncul dengan penundaan
            cards.forEach(function(card, index) {
                // Hitung penundaan berdasarkan indeks
                var delay = index * 400; // Sesuaikan nilai penundaan (dalam milidetik)

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
