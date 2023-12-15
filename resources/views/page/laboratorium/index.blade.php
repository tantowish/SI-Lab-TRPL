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
                    <h1 class="text-base lg:text-md tracking-wider"><a href="/">Home</a> / <a href="\laboratorium">Laboratorium</a></h1>
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

        <div class="bg-gray-50 lg:mx-24  py-12 md:px-16 px-12">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mx-auto py-2 mb-8">
                <!-- Item 1 -->
                @foreach ($laboratorium as $laboratorium)
                <div
                    class="hover:bg-[#64C5D3] hover:bg-opacity-40 flex flex-col animate-section1 bg-white rounded-xl shadow-2xl items-center card-item "data-aos="fade-up">
                    <img
                        class="h-[45%] w-full mt-0 mb-4 rounded-t-xl " src="{{ asset('storage/img/laboratorium/'. $laboratorium->photo) }}" />
                    <div class="p-2 lg:px-10    flex flex-col items-center">
                        <p
                            class="mb-6 mx-6 tracking-wider lg:mx-2 md:mx-8 mt-2 font-semibold text-xl lg:text-xl text-center">
                            {{ $laboratorium->laboratorium_name }}
                        </p>
                        <a href="/laboratorium/{{ $laboratorium->laboratorium_id }}/detail"
                            class="hover:bg-[#509ea9] tracking-wider hover:scale-105 mb-4 text-white rounded-lg bg-[#64CDC7] text-md lg:text-md md:text-md  px-6 md:px-6 lg:px-4 mx-auto w-[80%] lg:w-[90%] md:w-[80%]  font-semibold py-[3%]  flex items-center justify-between">
                            <span>Selengkapnya</span>
                            <span class="w-6 h-6" data-feather="chevron-right"></span>
                        </a>
                    </div>
                </div>
                @endforeach
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
