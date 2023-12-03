@extends('page.layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- Start Judul --}}

    <div class="relative w-full bg-white px-16 py-12 lg:py-2 bg-cover bg-center bg-blend-multiply">
        <!-- Background image with reduced opacity -->
        <div class="absolute inset-0"
            style="background: url('{{ asset('assets/img/page/index/background.png') }}') center/cover; opacity: 0.6;"></div>

        <!-- Content with text -->
        <div class="lg:py-48 md:py-32 py-12 items-center relative">
            <div class="flex flex-col text-center justify-center md:flex-row">
                <div class="text-center">
                    <h2 class="label text-center mx-auto lg:text-xl font-semibold text-md sm:pb-1">Label goes here</h2>
                    <h1 class="title font-bold lg:text-6xl text-center mx-auto py-4 md:text-4xl text-2xl">
                        Teknologi Rekayasa Perangkat Lunak
                    </h1>
                    <h2
                        class=" leading-relaxed text-sm lg:text-md md:text-sm text-center py-3 lg:max-w-md max-w-xs flex-wrap mx-auto">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid quia harum similique earum ut
                        unde facilis excepturi. Natus molestias reprehenderit modi dolorem dignissimos, neque consectetur
                        reiciendis provident cumque accusantium aliquid.
                    </h2>
                    <ul class="flex space-x-5 items-center justify-center mt-7">
                        <li>
                            <a href="\about"
                                class="btn1 bg-white text-[#64c5d3] lg:px-5 lg:py-3 py-2 px-4 rounded-xl font-semibold">
                                Learn More
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- End Judul --}}


    {{-- Start About Us --}}
    <div class=" lg:px-36 md:px-12 px-12 ">
        <div class="lg:py-20 md:py-12 grid grid-rows-2 md:grid-cols-2 md:grid-rows-1  py-4 gap-2 md:gap-8 lg:gap-12 ">

            <div class=" flex flex-col justify-center md:px-2 lg:py-4 lg:px-6" data-aos="fade-right">
                <div>
                    <h1 class="lg:text-5xl text-2xl font-bold lg:py-3 md:py-2 md:text-3xl   sm:pb-5">About
                        Us</h1>
                    <p class=" lg:py-2  text-sm mt-2 md:pb-4 md:text-sm lg:text-lg ">
                        lorem Lorem ipsum dolor sit amet consectetur Adipisicing elit. Aut saepe tempore ipsum, provident,
                        excepturi culpa exercitationem omnis ex deserunt iusto officia alias doloremque! Tenetur placeat
                        debitis ex veritatis labore accusantium. lorem lorem iusto officia alias doloremque! Tenetur placeat
                        debitis ex veritatis labore accusantium. lorem lorem
                    </p>

                    <a href="\about"
                        class=" mt-4 font-semibold flex flex-row gap-2 items-center text-left max-w-max lg:mt-6 md:mt-1 md:text-sm bg-[#64c5d3] text-white lg:py-2 lg:px-3 py-1  px-2 md:px-2 md:py-1 rounded-xl hover:transform hover:scale-110">
                        <span class="lg:text-md tracking-wider  text-sm">Selengkapnya</span>

                        <span class="w-6 h-6" data-feather="chevron-right"></span>
                    </a>

                </div>
            </div>


            <div class=" py-2  lg:px-6 md:p-2 flex justify-center items-center" data-aos="fade-left">

                <img src="{{ asset('assets/img/page/index/image-AboutUs.png') }}"
                    class=" lg:w-[100%] lg:h-[90%] md:w-[100%] w-[100%] h-[90%]  object-cover" />
            </div>
        </div>


        <div class="lg:py-4 md:py-12 grid grid-rows-2 md:grid-cols-2 md:grid-rows-1  py-4 gap-2  md:gap-8 lg:gap-12 ">

            <div class=" py-2 lg:px-6 md:px-2 flex justify-center items-center" data-aos="fade-right">

                <img src="{{ asset('assets/img/page/index/image-Publication.png') }}"
                    class=" lg:w-[100%] lg:h-[90%] md:w-[100%] w-[100%] h-[80%] md:h-[100%] object-cover" />
            </div>





            <div class=" flex flex-col justify-center md:px-2 lg:px-6" data-aos="fade-left">
                <div>
                    <h1 class="lg:text-5xl text-2xl font-bold lg:py-3 md:py-2 md:text-3xl  sm:pb-5">Publication</h1>
                    <p class="  lg:py-2  text-sm mt-2 md:pb-4 md:text-sm lg:text-lg ">

                        lorem Lorem ipsum dolor sit amet consectetur Adipisicing elit. Aut saepe tempore ipsum, provident,
                        excepturi culpa exercitationem omnis ex deserunt iusto officia alias doloremque! Tenetur placeat
                        debitis ex veritatis labore accusantium. lorem lorem iusto officia alias doloremque! Tenetur placeat
                        debitis ex veritatis labore accusantium. lorem lorem
                    </p>

                    <a href="\publication1"
                        class=" mt-4 font-semibold flex flex-row gap-2 items-center text-left max-w-max lg:mt-6 md:mt-1 md:text-sm bg-[#64c5d3] text-white lg:py-2 lg:px-3 py-1  px-2 md:px-2 md:py-1 rounded-xl hover:transform hover:scale-110">

                        <span class="lg:text-md tracking-wider text-sm">Selengkapnya</span>

                        <span class="w-6 h-6" data-feather="chevron-right"></span>
                    </a>

                </div>
            </div>
        </div>

        <div class="lg:py-20 md:py-12 grid grid-rows-2 md:grid-cols-2 md:grid-rows-1  py-4  gap-2 md:gap-8 lg:gap-12  ">


            <div class=" flex flex-col justify-center md:px-2 lg:px-6" data-aos="fade-right">
                <div>
                    <h1 class="lg:text-5xl text-2xl font-bold lg:py-3 md:py-2 md:text-3xl  sm:pb-5">Data Software</h1>
                    <p class=" font-semibold lg:py-2  text-sm mt-2 md:pb-4 md:text-sm lg:text-lg ">

                        lorem Lorem ipsum dolor sit amet consectetur Adipisicing elit. Aut saepe tempore ipsum, provident,
                        excepturi culpa exercitationem omnis ex deserunt iusto officia alias doloremque! Tenetur placeat
                        debitis ex veritatis labore accusantium. lorem lorem iusto officia alias doloremque! Tenetur placeat
                        debitis ex veritatis labore accusantium. lorem lorem
                    </p>

                    <a href="\datasoftware"
                        class=" mt-4 font-semibold flex flex-row gap-2 items-center text-left max-w-max lg:mt-6 md:mt-1 md:text-sm bg-[#64c5d3] text-white lg:py-2 lg:px-3 py-1  px-2 md:px-2 md:py-1 rounded-xl hover:transform hover:scale-110">

                        <span class="lg:text-md tracking-wider text-sm">Selengkapnya</span>

                        <span class="w-6 h-6" data-feather="chevron-right"></span>
                    </a>

                </div>
            </div>


            <div class=" py-2 lg:px-6  md:px-2 flex justify-center items-center" data-aos="fade-left">

                <img src="{{ asset('assets/img/page/index/image-DataSoftware.png') }}"
                    class=" lg:w-[100%] md:w-[100%] w-[100%] h-[80%] md:h-[100%] object-cover" />
            </div>
        </div>
    </div>
    {{-- End About Us --}}



    {{-- Swiper Lab --}}
    <section class="">
        <div class=" lg:py-6  md:py-4 items-center justify-center bg-[#E1F2F4]" data-aos="fade-up">
            <div class="py-4">
                <div class="flex flex-col text-center justify-center md:flex-row">
                    <div class="text-center">
                        <h1 class="title font-bold lg:text-5xl md:text-3xl text-lg lg:max-w-3xl text-center max-w-lg px-3 lg:py-6"
                            style="letter-spacing: 2px;">
                            Laboratorium Teknologi Rekayasa Perangkat Lunak
                        </h1>
                        <h2
                            class="leading-relaxed lg:text-md md:text-md text-xs text-center py-3 lg:pb-4 max-w-xs flex-wrap mx-auto">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, nihil. </h2>
                    </div>
                </div>

                <div class="swiper mySwiper w-[80%]"
                    style="
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                ">
                    <div class="swiper-wrapper">
                        {{-- <a href="\laboratorium1"> --}}
                        <div class="swiper-slide relative h-[150%] aspect-ratio[4/1]"
                            style="
                                text-align: center;
                                font-size: 18px;
                                background: #fff;
                            ">
                            <img src="{{ asset('assets/img/page/index/image-Lab.png') }}" alt="Slide 1"
                                style="
                                    object-fit: cover;
                                    width: 100%;
                                    height: 100%;
                                " />

                            <a href="\laboratorium1">
                                <div
                                    class="absolute bottom-4 left-[20px] right-[20px] lg:left-[30%] lg:right-[30%] lg:bottom-20 md:left-[20%] md:right-[20%] md:bottom-10">
                                    <p class="bottom-30 text-white lg:text-2xl md:text-lg font-bold text-sm">Laboratorium 1
                                    </p>
                                    <p class="text-white text-xs md:text-xs lg:text-sm">Lorem ipsum dolor sit amet
                                        consectetur
                                        adipisicing elit. Quas rem molestiae ab? Corposris quia voluptates porro? Ullam con
                                    </p>
                                </div>
                            </a>
                        </div>
                        {{-- </a> --}}


                        <div class="swiper-slide relative"
                            style="
                            text-align: center;
                            font-size: 18px;
                            background: #fff;
                        ">
                            <img src="{{ asset('assets/img/page/index/image-Lab.png') }}" alt="Slide 2"
                                style="
                                object-fit: cover;
                                width: 100%;
                                height: 100%;
                            " />

                            <a href="\laboratorium1">
                                <div
                                    class="absolute bottom-4 left-[20px] right-[20px] lg:left-[30%] lg:right-[30%] lg:bottom-20 md:left-[20%] md:right-[20%] md:bottom-10">
                                    <p class="bottom-30 text-white lg:text-2xl md:text-lg font-bold text-sm">Laboratorium 2
                                    </p>
                                    <p class="text-white text-xs md:text-xs lg:text-sm">Lorem ipsum dolor sit amet
                                        consectetur
                                        adipisicing elit. Quas rem molestiae ab? Corposris quia voluptates porro? Ullam con
                                    </p>
                                </div>
                            </a>
                        </div>


                        <div class="swiper-slide relative"
                            style="
                        text-align: center;
                        font-size: 18px;
                        

                    ">
                            <img src="{{ asset('assets/img/page/index/image-Lab.png') }}" alt="Slide 2"
                                style="
                            object-fit: cover;
                            width: 100%;
                            height: 100%;
                        " />

                            <a href="\laboratorium1">
                                <div
                                    class="absolute bottom-4 left-[20px] right-[20px] lg:left-[30%] lg:right-[30%] lg:bottom-20 md:left-[20%] md:right-[20%] md:bottom-10">
                                    <p class="bottom-30 text-white lg:text-2xl md:text-lg font-bold text-sm">Laboratorium 3
                                    </p>
                                    <p class="text-white text-xs md:text-xs lg:text-sm">Lorem ipsum dolor sit amet
                                        consectetur
                                        adipisicing elit. Quas rem molestiae ab? Corposris quia voluptates porro? Ullam con
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- Anda dapat menambahkan lebih banyak elemen swiper-slide dengan gambar yang sesuai -->
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>
    </section>

    {{-- end swiper --}}



    <!-- FAQS START -->
    <section id="faqs" class="py-8 px-4 ">
        <div class="bg-white lg:py-16 py-8">
            <div class="text-center mb-4">
                <h1 class="title font-bold lg:text-5xl md:text-3xl text-xl py-2">
                    Kolom Pertanyaan
                </h1>
                <h2 class="leading-relaxed lg:text-md md:text-md text-xs max-w-xs mx-auto">
e
                    Lorem ipsum dol or sit amet, consectetur adipiscing elit. Eum obcaecati debitis adipisci est enim! Animi
                </h2>
            </div>

            <div class="px-4 lg:py-8 lg:px-48 md:px-20" style="background-color: transparent;">
                <!-- Repeat the following block for each FAQ item -->
                <div class="grid grid-cols-1 md:grid-cols-1 gap-2 transition-all ease-in-out fact__container"
                    data-aos="fade-right" onclick="toggleFactDetail(this)">

                    <div class="font-bold text-md lg:text-lg mb-2">
                        Bagaimana cara melakukan peminjaman ruang laboratorium?
                    </div>
                    <div class="hover:cursor-pointer text-right">
                        <i class="fact__icon ri-arrow-right-s-fill"></i>

                    </div>
                    <div class="col-span-2 fact__detail hidden mt-[-px] text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum obcaecati debitis adipisci est enim!
                        Animi eaque est eos repellat reprehenderit quidem, nulla incidunt nihil eveniet iusto voluptates
                        laudantium? Suscipit, quisquam?
                    </div>
                    <div class="col-span-2 bg-black w-full h-[2px] mt-2"></div>
                </div>
                <div class=" mt-4 grid grid-cols-1 md:grid-cols-1 gap-2 transition-all ease-in-out fact__container"data-aos="fade-left"
                    onclick="toggleFactDetail(this)">
                    <div class="font-bold text-md lg:text-lg mb-2 ">
                        Bagaimana cara melakukan peminjaman ruang laboratorium?
                    </div>
                    <div class="hover:cursor-pointer text-right">
                        <i class="fact__icon ri-arrow-right-s-fill"></i>
                    </div>

                    <div class="col-span-2 fact__detail hidden mt-[-px] text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum obcaecati debitis adipisci est enim!
                        Animi eaque est eos repellat reprehenderit quidem, nulla incidunt nihil eveniet iusto voluptates
                        laudantium? Suscipit, quisquam?
                    </div>
                    <div class="col-span-2 bg-black w-full h-[2px] mt-2"></div>
                </div>

                <div class=" mt-4 grid grid-cols-1 md:grid-cols-1 gap-2 transition-all ease-in-out fact__container"data-aos="fade-right"

                    onclick="toggleFactDetail(this)">
                    <div class="font-bold text-md  lg:text-lg mb-2 ">
                        Bagaimana cara melakukan peminjaman ruang laboratorium?
                    </div>
                    <div class="hover:cursor-pointer text-right">
                        <i class="fact__icon ri-arrow-right-s-fill"></i>
                    </div>
                    <div class="col-span-2 fact__detail hidden mt-[-px] text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum obcaecati debitis adipisci est enim!
                        Animi eaque est eos repellat reprehenderit quidem, nulla incidunt nihil eveniet iusto voluptates
                        laudantium? Suscipit, quisquam?
                    </div>
                    <div class="col-span-2 bg-black w-full h-[2px] mt-2"></div>
                </div>
                <div class=" mt-4 grid grid-cols-1 md:grid-cols-1 gap-2 transition-all ease-in-out fact__container"data-aos="fade-left"
                    onclick="toggleFactDetail(this)">
                    <div class="font-bold text-md lg:text-lg mb-2 ">
                        Bagaimana cara melakukan peminjaman ruang laboratorium?
                    </div>
                    <div class="hover:cursor-pointer text-right">
                        <i class="fact__icon ri-arrow-right-s-fill"></i>
                    </div>
                    <div class="col-span-2 fact__detail hidden mt-[-px] text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum obcaecati debitis adipisci est enim!
                        Animi eaque est eos repellat reprehenderit quidem, nulla incidunt nihil eveniet iusto voluptates
                        laudantium? Suscipit, quisquam?
                    </div>
                    <div class="col-span-2 bg-black w-full h-[2px] mt-2"></div>
                </div>
                <div class=" mt-4 grid grid-cols-1 md:grid-cols-1 gap-2 transition-all ease-in-out fact__container"data-aos="fade-right"
                    onclick="toggleFactDetail(this)">
                    <div class="font-bold text-md lg:text-lg mb-2 ">
                        Bagaimana cara melakukan peminjaman ruang laboratorium?
                    </div>
                    <div class="hover:cursor-pointer text-right">
                        <i class="fact__icon ri-arrow-right-s-fill"></i>
                    </div>
                    <div class="col-span-2 fact__detail hidden mt-[-px] text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum obcaecati debitis adipisci est enim!
                        Animi eaque est eos repellat reprehenderit quidem, nulla incidunt nihil eveniet iusto voluptates
                        laudantium? Suscipit, quisquam?
                    </div>
                    <div class="col-span-2 bg-black w-full h-[2px] mt-2"></div>
                </div>
                <!-- End of FAQ item block -->
            </div>
        </div>
    </section>

    <script>
        function toggleFactDetail(element) {
            const factDetail = element.querySelector('.fact__detail');
            const arrowIcon = element.querySelector('.fact__icon');

            factDetail.classList.toggle('hidden');
            arrowIcon.classList.toggle('rotate-icon');
        }
    </script>




    <script>
        feather.replace();
    </script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        // Inisialisasi Feather Icons setelah memuat library
        feather.replace();
    </script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>








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
        <script>
            AOS.init();
        </script>
        </div>

        <!-- Tambahkan ini sebelum tag penutup </body> -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                AOS.init({
                    duration: 1000, // Durasi animasi dalam milidetik
                    easing: 'ease-in-out', // Gaya perubahan nilai animasi
                    once: true, // Animasi hanya dimainkan sekali
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    </section>
@endsection
