@extends('page.layouts.main')

@section('content')
    {{-- Start Judul --}}
    <div id="home" class="relative"
        style="
    background-image: url('{{ asset('assets/img/page/index/background.png') }}');
          background-size: cover;
          background-position: center;
          
        ">
        <div class=" lg:py-40 md:py-32 sm:py-16  items-center z-10">
            <div class="flex flex-col text-center justify-center md:flex-row">
                <div class="text-center">
                    <h2 class="label text-center mx-auto lg:text-xl font-semibold md:text-lg sm:pb-1">Label goes here</h2>
                    <h1 class="title font-bold lg:text-6xl text-center mx-auto py-4 md:text-4xl sm:text-3xl">
                        Teknologi Rekayasa Perangkat Lunak
                    </h1>
                    <h2
                        class="leading-relaxed  sm:text-xs lg:text-md md:text-sm text-center py-3 lg:max-w-md sm:max-w-sm flex-wrap mx-auto">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Aliquid quia harum similique earum ut
                        unde facilis excepturi. Natus molestias reprehenderit modi
                        dolorem dignissimos, neque consectetur
                        reiciendis provident cumque accusantium aliquid.
                    </h2>
                    <ul class="flex space-x-5 items-center justify-center  mt-7">
                        <li>
                            <a href="loginpage.html"
                                class="btn1 bg-[#64c5d3] text-white lg:px-6 lg:py-3 sm:py-2 sm:px-6 rounded-3xl font-semibold">
                                Log in
                            </a>
                        </li>
                        <li>
                            <a href="/about"
                                class="btn1 bg-white text-[#64c5d3] lg:px-5 lg:py-3 sm:py-2 sm:px-5 rounded-3xl font-semibold">
                                About Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- End Judul --}}


    {{-- Start About Us --}}
    <div class=" lg:px-28 md:px-12">
        <div class="lg:py-20 md:py-12 grid grid-rows-2 md:grid-cols-2 md:grid-rows-1 p-4 gap-4  ">

            <div class="p-4 flex flex-col justify-center px-8">
                <div>
                    <h1 class="lg:text-5xl sm:text-3xl font-bold lg:py-3 md:py-2 md:text-3xl">About Us</h1>
                    <p class=" py-2 text-base md:text-xs lg:text-lg ">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Reprehenderit, ad? Maiores aliquid corrupti laborum fugiat fuga nemo
                        vel architecto, tempore consequuntur voluptates recusandae alias
                        expedita nobis veritatis eveniet sed autem.
                    </p>

                    <a href="AboutUspage.html"
                        class=" font-semibold flex flex-row gap-2 items-center text-left max-w-max lg:mt-6 md:mt-4 md:text-sm bg-[#64c5d3] text-white lg:py-2 lg:px-3 md:px-2 md:py-1 rounded-xl hover:transform hover:scale-110">
                        <span class="lg:text-lg md:text-xs">Selengkapnya</span>
                        <span class="w-6 h-6" data-feather="chevron-right"></span>
                    </a>

                </div>
            </div>

            <div class=" p-4 flex justify-center items-center">
                <img src="{{ asset('assets/img/page/index/image-AboutUs.png') }}"
                    class="w-full lg:w-[90%] md:w-[100%] h-auto object-cover" />
            </div>
        </div>


        <div class="py-4 grid grid-rows-2 md:grid-cols-2 md:grid-rows-1 p-4 gap-4   ">
            <div class=" p-4 flex justify-center items-center">
                <img src="{{ asset('assets/img/page/index/image-Publication.png') }}"
                    class="lg:w-[90%] md:w-[100%] h-auto object-cover" />

            </div>




            <div class="p-4 flex flex-col justify-center px-8">
                <div>
                    <h1 class="lg:text-5xl font-bold lg:py-3 md:py-2 md:text-3xl">Publication</h1>
                    <p class=" py-2 text-base md:text-xs lg:text-lg ">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Reprehenderit, ad? Maiores aliquid corrupti laborum fugiat fuga nemo
                        vel architecto, tempore consequuntur voluptates recusandae alias
                        expedita nobis veritatis eveniet sed autem.
                    </p>

                    <a href="AboutUspage.html"
                        class=" font-semibold flex flex-row gap-2 items-center text-left max-w-max lg:mt-6 md:mt-4 md:text-sm bg-[#64c5d3] text-white lg:py-2 lg:px-3 md:px-2 md:py-1 rounded-xl hover:transform hover:scale-110">
                        <span class="lg:text-lg md:text-xs">Selengkapnya</span>
                        <span class="w-6 h-6" data-feather="chevron-right"></span>
                    </a>

                </div>
            </div>
        </div>

        <div class="lg:py-20 md:py-12 grid grid-rows-2 md:grid-cols-2 md:grid-rows-1 p-4 gap-4  ">

            <div class="p-4 flex flex-col justify-center px-8">
                <div>
                    <h1 class="lg:text-5xl font-bold lg:py-3 md:py-2 md:text-3xl">Data Software</h1>
                    <p class=" py-2 text-base md:text-xs lg:text-lg ">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Reprehenderit, ad? Maiores aliquid corrupti laborum fugiat fuga nemo
                        vel architecto, tempore consequuntur voluptates recusandae alias
                        expedita nobis veritatis eveniet sed autem.
                    </p>

                    <a href="AboutUspage.html"
                        class=" font-semibold flex flex-row gap-2 items-center text-left max-w-max lg:mt-6 md:mt-4 md:text-sm bg-[#64c5d3] text-white lg:py-2 lg:px-3 md:px-2 md:py-1 rounded-xl hover:transform hover:scale-110">
                        <span class="lg:text-lg md:text-xs">Selengkapnya</span>
                        <span class="w-6 h-6" data-feather="chevron-right"></span>
                    </a>

                </div>
            </div>

            <div class=" p-4 flex justify-center items-center">
                <img src="{{ asset('assets/img/page/index/image-DataSoftware.png') }}"
                    class="md:w-[100%] lg:w-[90%] h-auto object-cover" />
            </div>
        </div>
    </div>
    {{-- End About Us --}}



    {{-- Swiper Lab --}}
    <section class="">
        <div class=" lg:py-6  md:py-4 items-center justify-center bg-[#E1F2F4]">
            <div class="py-4">
                <div class="flex flex-col text-center justify-center md:flex-row">
                    <div class="text-center">
                        <h1 class="title font-bold lg:text-5xl md:text-4xl text-center max-w-2xl lg:py-6"
                            style="letter-spacing: 3px;">
                            Laboratorium Teknologi Rekayasa Perangkat Lunak
                        </h1>
                        <h2 class="leading-relaxed text-md text-center py-3 max-w-md flex-wrap mx-auto">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </h2>
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
                            <div
                                class="absolute lg:left-[30%] lg:right-[30%] lg:bottom-20 md:left-[20%] md:right-[20%] md:bottom-10">
                                <p class=" bottom-30 text-white lg:text-2xl md:text-lg font-bold">
                                    Laboratorium 1</p>
                                <p class="   text-white md:text-xs lg:text-sm">Lorem ipsum dolor sit
                                    amet
                                    consectetur adipisicing elit. Quas rem molestiae ab? Corposris quia voluptates porro?
                                    Ullam
                                    con</p>
                            </div>
                        </div>
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

                            <div
                                class="absolute lg:left-[30%] lg:right-[30%] lg:bottom-20 md:left-[20%] md:right-[20%] md:bottom-10">
                                <p class=" bottom-30 text-white lg:text-2xl md:text-lg font-bold">
                                    Laboratorium 2</p>
                                <p class="   text-white md:text-xs lg:text-sm">Lorem ipsum dolor sit
                                    amet
                                    consectetur adipisicing elit. Quas rem molestiae ab? Corposris quia voluptates porro?
                                    Ullam
                                    con</p>
                            </div>
                        </div>
                        <div class="swiper-slide relative"
                            style="
                            text-align: center;
                            font-size: 18px;
                            background: #fff;
                        ">
                            <img src="{{ asset('assets/img/page/index/image-Lab.png') }}" alt="Slide 3"
                                style="
                                object-fit: cover;
                                width: 100%;
                                height: 100%;
                            " />

                            <p class="absolute left-0 right-0 bottom-20 text-white text-2xl font-bold">Laboratorium 3</p>
                            <p class="absolute left-5 right-5 bottom-0 text-white sm:text-sm">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Quas rem molestiae ab? Corposris quia voluptates porro? Ullam
                                con</p>
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
    <section id="faqs">
        <div class="bg-white lg:py-18 md:py-18">
            <div class="flex flex-col text-center justify-center md:flex-row mb-16">
                <div class="text-center">
                    <h1 class="title font-bold lg:text-5xl md:text-4xl text-center max-w-xl py-8"
                        style="letter-spacing: 4px;">
                        Kolom Pertanyaan
                    </h1>
                    <h2
                        class="leading-relaxed lg:text-xs md:text-xs font-semibold text-center lg:py-1 lg:max-w-md md:max-w-sm flex-wrap mx-auto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eum obcaecati debitis adipisci est
                        enim! Animi eaque est eos repellat reprehenderit quidem, nulla incidunt nihil eveniet iusto
                    </h2>
                </div>
            </div>

            <div class="lg:px-72 md:px-16 pb-28">
                <div class="fact__container" onclick="toggleFactDetail(this)">
                    <div class="font-bold flex justify-between text-lg items-center">
                        <div class="w-11/12 my-4">May i love you, Darling, or should i call you, Marla?</div>
                        <div class="hover:cursor-pointer"><i class="fact__icon ri-arrow-right-s-fill"></i></div>
                    </div>
                    <div class="fact__detail hidden mt-4">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eum obcaecati debitis adipisci est enim! Animi eaque est eos repellat reprehenderit
                        quidem, nulla incidunt nihil eveniet iusto voluptates laudantium? Suscipit, quisquam?</div>
                    <div class="bg-black w-full h-[2px] mt-4"></div>
                </div>
                <div class="fact__container" onclick="toggleFactDetail(this)">
                    <div class="font-bold flex justify-between text-lg items-center">
                        <div class="w-11/12 my-4">May i love you, Darling, or should i call you, Marla?</div>
                        <div class="hover:cursor-pointer"><i class="fact__icon ri-arrow-right-s-fill"></i></div>
                    </div>
                    <div class="fact__detail hidden mt-4">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eum obcaecati debitis adipisci est enim! Animi eaque est eos repellat reprehenderit
                        quidem, nulla incidunt nihil eveniet iusto voluptates laudantium? Suscipit, quisquam?</div>
                    <div class="bg-black w-full h-[2px] mt-4"></div>
                </div>
                <div class="fact__container" onclick="toggleFactDetail(this)">
                    <div class="font-bold flex justify-between text-lg items-center">
                        <div class="w-11/12 my-4">May i love you, Darling, or should i call you, Marla?</div>
                        <div class="hover:cursor-pointer"><i class="fact__icon ri-arrow-right-s-fill"></i></div>
                    </div>
                    <div class="fact__detail hidden mt-4">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eum obcaecati debitis adipisci est enim! Animi eaque est eos repellat reprehenderit
                        quidem, nulla incidunt nihil eveniet iusto voluptates laudantium? Suscipit, quisquam?</div>
                    <div class="bg-black w-full h-[2px] mt-4"></div>
                </div>
                <div class="fact__container" onclick="toggleFactDetail(this)">
                    <div class="font-bold flex justify-between text-lg items-center">
                        <div class="w-11/12 my-4">May i love you, Darling, or should i call you, Marla?</div>
                        <div class="hover:cursor-pointer"><i class="fact__icon ri-arrow-right-s-fill"></i></div>
                    </div>
                    <div class="fact__detail hidden mt-4">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eum obcaecati debitis adipisci est enim! Animi eaque est eos repellat reprehenderit
                        quidem, nulla incidunt nihil eveniet iusto voluptates laudantium? Suscipit, quisquam?</div>
                    <div class="bg-black w-full h-[2px] mt-4"></div>
                </div>
                <div class="fact__container" onclick="toggleFactDetail(this)">
                    <div class="font-bold flex justify-between text-lg items-center">
                        <div class="w-11/12 my-4">May i love you, Darling, or should i call you, Marla?</div>
                        <div class="hover:cursor-pointer"><i class="fact__icon ri-arrow-right-s-fill"></i></div>
                    </div>
                    <div class="fact__detail hidden mt-4">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eum obcaecati debitis adipisci est enim! Animi eaque est eos repellat reprehenderit
                        quidem, nulla incidunt nihil eveniet iusto voluptates laudantium? Suscipit, quisquam?</div>
                    <div class="bg-black w-full h-[2px] mt-4"></div>
                </div>
                <div class="fact__container" onclick="toggleFactDetail(this)">
                    <div class="font-bold flex justify-between text-lg items-center">
                        <div class="w-11/12 my-4">May i love you, Darling, or should i call you, Marla?</div>
                        <div class="hover:cursor-pointer"><i class="fact__icon ri-arrow-right-s-fill"></i></div>
                    </div>
                    <div class="fact__detail hidden mt-4">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eum obcaecati debitis adipisci est enim! Animi eaque est eos repellat reprehenderit
                        quidem, nulla incidunt nihil eveniet iusto voluptates laudantium? Suscipit, quisquam?</div>
                    <div class="bg-black w-full h-[2px] mt-4"></div>
                </div>
                <!-- Tambahkan faktor lain sesuai kebutuhan -->
            </div>
        </div>
        <style>
            .rotate-icon {
                transform: rotate(90deg);
                transition: transform 0.3s ease;
                /* Untuk efek transisi */
            }
        </style>

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






    <section class="  lg:py-8 md:py-4 mb-32 px-4  bg-[#CEDEE0] items-center justify-center ">
        <div class="flex flex-wrap justify-evenly lg:px-16 md:px-8 lg:justify-between lg:gap-4 md:gap-2     ">
            <div class="px-8 py-4 lg:px-0">
                <h1 class=" text-slate-600 font-bold text-5xl mb-2 lg:text-5xl md:text-4xl">24+</h1>
                <p class=" text-slate-600 font-semibold text-sm lg:text-xl md:text-sm">
                    Laboratorium
                </p>
            </div>
            <div class="px-8 py-4 lg:px-0">
                <h1 class=" text-slate-600 font-bold text-5xl mb-2 lg:text-5xl md:text-4xl">24+</h1>
                <p class=" text-slate-600 font-semibold text-sm lg:text-xl md:text-sm">
                    Mahasiswa
                </p>
            </div>
            <div class="px-8 py-4 lg:px-0">
                <h1 class=" text-slate-600 font-bold text-5xl mb-2 lg:text-5xl md:text-4xl">24+</h1>
                <p class=" text-slate-600 font-semibold text-sm lg:text-xl md:text-sm">
                    Laboran
                </p>
            </div>
            <div class="px-8 py-4 lg:px-0">
                <h1 class=" text-slate-600 font-bold text-5xl mb-2 lg:text-5xl md:text-4xl">24+</h1>
                <p class=" text-slate-600 font-semibold text-sm lg:text-xl md:text-sm">
                    Dosen
                </p>
            </div>
            <div class="px-8 py-4 lg:px-0">
                <h1 class=" text-slate-600 font-bold text-5xl mb-2 lg:text-5xl md:text-4xl">24+</h1>
                <p class=" text-slate-600 font-semibold text-sm lg:text-xl md:text-sm">
                    Research
                </p>
            </div>
        </div>
    </section>
@endsection
