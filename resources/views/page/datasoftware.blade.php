@extends('page.layouts.main')

@section('content')
    <!-- Header Start -->


    <div class="bg-gray-50">
        <div class="w-full bg-gray-400 px-16 py-28 bg-cover bg-blend-multiply bg-center "
            style="background-image: url('{{ asset('assets/img/page/daftarsoftware/image14.png') }}')">
            <div class="text-center">
                <h1 class="text-3xl text-white font-bold lg:text-4xl ">
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
                    <h1 class="text-base text-white lg:text-lg">Home / About us</h1>
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
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mx-auto py-8">
                <!-- Item 1 -->
                <div class="flex flex-col animate-section1 bg-white rounded-lg shadow-2xl overflow-hidden items-center">
                    <div class="py-8 px-8 lg:px-4 flex flex-col justify-center items-center">
                        <h2 class="text-xl lg:text-lg pb-4 font-bold">Visual Studio Code</h2>
                        <div class="bg-black w-[90px] h-[90px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/visualcode.png') }}" alt="IntelliJ">
                        </div>

                        <p class="text-center px-4 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex flex-col animate-section1 bg-white rounded-lg shadow-lg overflow-hidden items-center">
                    <div class="py-8 px-8 lg:px-4  flex flex-col justify-center items-center">
                        <h2 class="text-xl pb-4 font-bold">IntelliJ</h2>
                        <div class="bg-black w-[90px] h-[90px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/intellij.png') }}" alt="IntelliJ">
                        </div>

                        <p class="text-center px-4 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex flex-col animate-section1 bg-white rounded-lg shadow-lg overflow-hidden items-center">
                    <div class="py-8 px-8 lg:px-4  flex flex-col justify-center items-center">
                        <h2 class="text-xl pb-4 font-bold">Android Studio</h2>
                        <div class="bg-black w-[90px] h-[90px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/visualcode.png') }}" alt="Android Studio">
                        </div>
                        <p class="text-center px-4 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="flex flex-col animate-section1 bg-white rounded-lg shadow-lg overflow-hidden items-center">
                    <div class="py-8 px-8 lg:px-4  flex flex-col justify-center items-center">
                        <h2 class="text-xl pb-4 font-bold">Blender</h2>
                        <div class="bg-black w-[90px] h-[90px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/intellij.png') }}" alt="Blender">
                        </div>
                        <p class="text-center px-4 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>
            </div>



            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mx-auto py-8">
                <!-- Item 1 -->
                <div class="flex flex-col animate-section1 bg-white rounded-lg shadow-lg overflow-hidden items-center">
                    <div class="py-8 px-8 lg:px-4  flex flex-col justify-center items-center">
                        <h2 class="text-xl pb-4 font-bold">Visual Studio Code</h2>
                        <div class="bg-black w-[90px] h-[90px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/visualcode.png') }}" alt="IntelliJ">
                        </div>

                        <p class="text-center px-4 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex flex-col animate-section1 bg-white rounded-lg shadow-lg overflow-hidden items-center">
                    <div class="py-8 px-8 lg:px-4  flex flex-col justify-center items-center">
                        <h2 class="text-xl pb-4 font-bold">IntelliJ</h2>
                        <div class="bg-black w-[90px] h-[90px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/intellij.png') }}" alt="IntelliJ">
                        </div>

                        <p class="text-center px-4 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex flex-col animate-section1 bg-white rounded-lg shadow-lg overflow-hidden items-center">
                    <div class="py-8 px-8 lg:px-4  flex flex-col justify-center items-center">
                        <h2 class="text-xl pb-4 font-bold">Android Studio</h2>
                        <div class="bg-black w-[90px] h-[90px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/visualcode.png') }}" alt="Android Studio">
                        </div>
                        <p class="text-center px-4 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="flex flex-col animate-section1 bg-white rounded-lg shadow-lg overflow-hidden items-center">
                    <div class="py-8 px-8 lg:px-4  flex flex-col justify-center items-center">
                        <h2 class="text-xl pb-4 font-bold">Blender</h2>
                        <div class="bg-black w-[90px] h-[90px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/intellij.png') }}"alt="IntelliJ">
                        </div>
                        <p class="text-center px-4 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mx-auto py-8">
                <!-- Item 1 -->
                <div class="flex flex-col animate-section1 bg-white rounded-lg shadow-lg overflow-hidden items-center">
                    <div class="py-8 px-8 lg:px-4  flex flex-col justify-center items-center">
                        <h2 class="text-xl pb-4 font-bold">Visual Studio Code</h2>
                        <div class="bg-black w-[90px] h-[90px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/intellij.png') }}"alt="IntelliJ">
                        </div>

                        <p class="text-center px-4 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex flex-col animate-section1 bg-white rounded-lg shadow-lg overflow-hidden items-center">
                    <div class="py-8 px-8 lg:px-4  flex flex-col justify-center items-center">
                        <h2 class="text-xl pb-4 font-bold">IntelliJ</h2>
                        <div class="bg-black w-[90px] h-[90px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/intellij.png') }}"alt="IntelliJ">
                        </div>

                        <p class="text-center px-4 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex flex-col animate-section1 bg-white rounded-lg shadow-lg overflow-hidden items-center">
                    <div class="py-8 px-8 lg:px-4  flex flex-col justify-center items-center">
                        <h2 class="text-xl pb-4 font-bold">Android Studio</h2>
                        <div class="bg-black w-[90px] h-[90px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/intellij.png') }}"alt="IntelliJ">
                        </div>
                        <p class="text-center px-4 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="flex flex-col animate-section1 bg-white rounded-lg shadow-lg overflow-hidden items-center">
                    <div class="py-8 px-8 lg:px-4  flex flex-col justify-center items-center">
                        <h2 class="text-xl pb-4 font-bold">Blender</h2>
                        <div class="bg-black w-[90px] h-[90px] rounded-[100px] flex items-center justify-center">
                            <img src="{{ asset('assets/img/page/daftarsoftware/intellij.png') }}"alt="IntelliJ">
                        </div>
                        <p class="text-center px-4 py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    {{-- <script>
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
    </script> --}}
@endsection
