@extends('page.layouts.main')

@section('content')
    {{-- Start Judul --}}

    <div class="w-full  bg-gray-300 px-16 py-28 bg-cover bg-blend-multiply bg-center"
        style="background-image: url('{{ asset('assets/img/page/laboratorium1/headerbg.png') }}')">
        <div class="text-center text-white">
            <h1 class="text-3xl font-bold lg:text-4xl">Laboratorium</h1>

            <div class="flex justify-center items-center">
                <svg class="h-4 w-4 mr-2 sm:h-5 sm:w-6 lg:h-6 lg:w-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100" viewBox="0 0 24 24">
                    <path
                        d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 10 21 L 10 14 L 14 14 L 14 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z "
                        fill="white">
                    </path>
                </svg>
                <h1 class="text-base lg:text-md">Home / Laboratorium</h1>
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

    <div class=" flex items-center justify-center px-16 lg:px-48 md:px-24 py-12 gap-4 lg:my-24">
        <div class="flex flex-wrap -m-4 " id="">


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
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

    <script src="tailwind.config.js"></script>
    <script>
        feather.replace();
    </script>

    <script>
        // Fungsi untuk menganimasikan elemen-elemen satu per satu saat di-scroll
        function animateElementsOnScroll(elements, delay) {
            elements.forEach((element, index) => {
                // Membuat observer untuk elemen tersebut
                const observer = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                // Menambahkan efek animasi menggunakan GSAP saat elemen masuk ke dalam viewport
                                gsap.fromTo(
                                    element, {
                                        opacity: 0,
                                        y: 20
                                    }, // Mulai dengan opacity 0 dan translasi ke bawah sejauh 20 piksel
                                    {
                                        opacity: 1,
                                        y: 0, // Membawa elemen ke posisi awal
                                        duration: 1, // Durasi animasi dalam detik
                                        delay: index * delay, // Mengatur delay antara elemen-elemen
                                        ease: 'power2.inOut', // Efek animasi (bisa diganti sesuai kebutuhan)
                                    }
                                );

                                // Setelah elemen dianimasikan, berhenti memonitornya
                                observer.unobserve(element);
                            }
                        });
                    }, {
                        threshold: 0.2, // Jika elemen terlihat 20% atau lebih, mulai animasinya
                    }
                );

                // Mulai memonitor elemen
                observer.observe(element);
            });
        }

        // Memanggil fungsi animateElementsOnScroll saat halaman dimuat
        document.addEventListener('DOMContentLoaded', () => {
            // Menentukan elemen-elemen yang ingin dianimasikan di setiap bagian
            const section1Elements = document.querySelectorAll('.animate-section1');
            const section2Elements = document.querySelectorAll('.animate-section2');
            // ... dan seterusnya untuk setiap bagian yang ingin Anda animasikan

            // Mengatur delay antara elemen-elemen di setiap bagian (dalam detik)
            const delayBetweenElements = 0.5;

            // Animasi elemen-elemen di setiap bagian saat halaman dimuat
            animateElementsOnScroll(section1Elements, delayBetweenElements);
            animateElementsOnScroll(section2Elements, delayBetweenElements);
            // ... dan seterusnya untuk setiap bagian yang ingin Anda animasikan
        });
    </script>
@endsection
