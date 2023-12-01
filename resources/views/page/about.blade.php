@extends('page.layouts.main')

@section('content')
    <div class="w-full bg-gray-400  px-16 py-24 bg-blend-multiply bg-cover bg-center"
        style="background-image: url('{{ asset('assets/img/page/about/bg-aboutus.png') }}')">

        <div class="text-center">

            <h1 class="text-3xl text-white font-bold  lg:text-5xl tracking-wider">
                About Us
            </h1>
            <div class="flex justify-center items-center ">
                <svg class="h-4 w-4 mr-2 sm:h-5 sm:w-6 lg:h-6 lg:w-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100" viewBox="0 0 24 24">
                    <path
                        d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 10 21 L 10 14 L 14 14 L 14 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z"
                        fill="white">
                    </path>
                </svg>
                <h1 class="text-base text-white lg:text-lg tracking-wider">Home / About us</h1>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Section About Start-->

    <!-- section apaitu silaboe -->
    <div class="px-6 md:px-12 ">
        <div class="max-w-6xl mx-auto animate-section1 ">
            <div class="bg-[#64c5d3] w-full my-8 lg:mt-24 lg:px-8 md:py-6 rounded-[50px]">
                <div class="text-black items-center">
                    <h1 class="text-center text-2xl lg:text-3xl font-bold py-4 md:py-2 animate-from-left">
                        Apa Itu Silaboe?
                    </h1>

                    <p class="text-sm text-center  lg:text-lg md:py-2 md:px-8 p-4 lg:py-4 lg:px-32">

                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, voluptate? Tenetur maiores laborum
                        recusandae corporis mollitia dicta dolor similique unde aperiam nobis officiis, rem voluptatum
                        incidunt perferendis! Accusantium, animi? Quo debitis est illo omnis vitae, minus minima pariatur id
                        nisi harum, delectus nostrum tempore voluptatum ut eaque. Nisi ipsam totam inventore nemo aliquid
                        numquam, sint dolor, quidem, magni cupiditate ducimus dolores? Nam neque rerum soluta. Blanditiis
                        iusto ea consequuntur quasi, corporis odio nesciunt? Ex officiis quod, explicabo dolorum asperiores
                        illum assumenda at harum provident corrupti totam aspernatur magnam quibusdam tempora tenetur et
                        dolorem cumque dolores ipsa accusantium? Sapiente, eveniet ullam.
                    </p>
                </div>
            </div>
        </div>

        <!-- Section About End-->

        <div class="flex flex-wrap max-w-6xl mx-auto py-4 animate-section2 md:px-4 lg:px-0">
            <div class="w-full lg:w-1/2">
                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-52 lg:h-96 overflow-hidden z-10 md:h-96 rounded-tl-[60px] rounded-br-[60px]">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('assets/img/page/about/gambarslider.png') }}"
                                class="absolute block h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="..." />
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('assets/img/page/about/gambarslider.png') }}"
                                class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="..." />
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 bg-cover bg ease-in-out" data-carousel-item>
                            <img src="{{ asset('assets/img/page/about/gambarslider.png') }}"
                                class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="..." />
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('assets/img/page/about/gambarslider.png') }}"
                                class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="..." />
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('assets/img/page/about/gambarslider.png') }}"
                                class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="..." />
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-20 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
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
                        class="absolute top-0 left-0 z-10 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
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
                        class="absolute top-0 right-0 z-10 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
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
            <div class="max-w-6xl w-full mx-auto lg:w-1/2">
                <div class="mt-4 items-center text-center p-4 md:p-8 max-w-2xl mx-auto lg:p-12">
                    <h1 class="text-xl mb-2 font-bold md:text-3xl md:mb-4 lg:text-3xl">
                        We Have 8 Laboratorium
                    </h1>
                    <p class="text-sm py-4 text-justify md:text-base lg:text-lg">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas
                        autem qui illum doloremque pariatur, alias nulla, nesciunt laborum
                        quaerat, praesentium rerum dolore deserunt neque animi quos vitae
                        unde eius veniam aperiam rem. Ipsa sint dolorem dicta veniam. Quasi,
                        reiciendis perspiciatis.
                    </p>
                </div>
            </div>
        </div>

        <!-- Section Visi Misi Start-->
        <div class=" max-w-6xl mx-auto animate-section1 ">
            <div class="bg-[#64c5d3] w-full mb-6 lg:mt-12 lg:px-8   lg:mb-16 md:py-6 rounded-[50px]">
                <div class="text-black flex flex-wrap">
                    <div class="w-full lg:w-1/2 mb-8 text-center px-4 py-4 lg:py-0 md:px-8 lg:mb-0 lg:px-12">
                        <h1 class="text-xl font-bold lg:text-3xl md:text-2xl mb-4 underline">
                            Visi
                        </h1>
                        <p class="text-sm text-justify sm:text-base lg:text-md">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Laboriosam tenetur sequi at eaque illo dolores in fuga!
                            Praesentium expedita, magni corrupti quidem hic veritatis, eius
                            quasi quae fuga excepturi aspernatur quam qui dicta sunt corporis
                            officiis provident ratione laudantium in.Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Laboriosam tenetur sequi at eaque illo dolores in fuga!
                            Praesentium expedita, magni corrupti quidem hic veritatis, eius
                            quasi quae fuga excepturi aspernatur quam qui dicta sunt corporis
                            officiis provident ratione laudantium in.
                        </p>
                    </div>
                    <div class="w-full lg:w-1/2 text-center px-4 pb-6 md:px-8 lg:px-12">
                        <h1 class="text-xl font-bold md:text-2xl lg:text-3xl mb-4 underline">
                            Misi
                        </h1>
                        <p class="text-sm text-justify sm:text-base lg:text-md ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Laboriosam tenetur sequi at eaque illo dolores in fuga!
                            Praesentium expedita, magni corrupti quidem hic veritatis, eius
                            quasi quae fuga excepturi aspernatur quam qui dicta sunt corporis
                            officiis provident ratione laudantium in.Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Laboriosam tenetur sequi at eaque illo dolores in fuga!
                            Praesentium expedita, magni corrupti quidem hic veritatis, eius
                            quasi quae fuga excepturi aspernatur quam qui dicta sunt corporis
                            officiis provident ratione laudantium in.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Visi Misi Start-->
    <section
        class="lg:py-8 md:py-4 px-4 bg-[#CEDEE0] flex flex-wrap items-center justify-evenly gap-2 lg:px-16 md:px-8 lg:justify-between">
        <div class="px-8 py-4 lg:px-0 text-center">
            <h1 class="text-slate-600 font-bold mb-2 lg:text-5xl md:text-4xl text-2xl">24+</h1>
            <p class="text-slate-600 font-semibold text-sm lg:text-xl">
                Laboratorium
            </p>
        </div>
        <div class="px-8 py-4 lg:px-0 text-center">
            <h1 class="text-slate-600 font-bold text-2xl mb-2 lg:text-5xl md:text-4xl sm:text-xl">24+</h1>
            <p class="text-slate-600 font-semibold text-sm lg:text-xl md:text-sm">
                Mahasiswa
            </p>
        </div>
        <div class="px-8 py-4 lg:px-0 text-center">
            <h1 class="text-slate-600 font-bold text-2xl mb-2 lg:text-5xl md:text-4xl">24+</h1>
            <p class="text-slate-600 font-semibold text-sm lg:text-xl md:text-sm">
                Laboran
            </p>
        </div>
        <div class="px-8 py-4 lg:px-0 text-center">
            <h1 class="text-slate-600 font-bold text-2xl mb-2 lg:text-5xl md:text-4xl">24+</h1>
            <p class="text-slate-600 font-semibold text-sm lg:text-xl md:text-sm">
                Dosen
            </p>
        </div>
        <div class="px-8 py-4 lg:px-0 text-center">
            <h1 class="text-slate-600 font-bold text-2xl mb-2 lg:text-5xl md:text-4xl">24+</h1>
            <p class="text-slate-600 font-semibold text-sm lg:text-xl md:text-sm">
                Research
            </p>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>

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
                                        ease: "power2.inOut", // Efek animasi (bisa diganti sesuai kebutuhan)
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
        document.addEventListener("DOMContentLoaded", () => {
            // Menentukan elemen-elemen yang ingin dianimasikan di setiap bagian
            const section1Elements = document.querySelectorAll(".animate-section1");
            const section2Elements = document.querySelectorAll(".animate-section2");
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
