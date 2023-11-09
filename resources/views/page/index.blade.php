@extends('page.layouts.main')

@section('content')
    <div id="home" class="relative"
        style="
    background-image: url('{{ asset('assets/img/page/index/background.png') }}');
          background-size: cover;
          background-position: center;
          
        ">
        <div class=" py-40 items-center z-10">
            <div class="flex flex-col text-center justify-center md:flex-row">
                <div class="text-center">
                    <h2 class="label text-center mx-auto">Label goes here</h2>
                    <h1 class="title font-bold text-5xl text-center mx-auto py-6">
                        Teknologi Rekayasa Perangkat Lunak
                    </h1>
                    <h2 class="leading-relaxed text-md text-center py-3 max-w-md flex-wrap mx-auto">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Aliquid quia harum similique earum ut
                        unde facilis excepturi. Natus molestias reprehenderit modi
                        dolorem dignissimos, neque consectetur
                        reiciendis provident cumque accusantium aliquid.
                    </h2>
                    <ul class="flex space-x-4 items-center justify-center mt-7">
                        <li>
                            <a href="loginpage.html"
                                class="btn1 bg-[#64c5d3] text-white px-5 py-2.5 rounded-2xl font-semibold">
                                Log in
                            </a>
                        </li>
                        <li>
                            <a href="/about" class="btn1 bg-white text-[#64c5d3] px-3 py-2.5 rounded-2xl font-semibold">
                                About Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- START ABOUT US -->
    <div class=" px-28 ">
        <div class="py-28 grid grid-rows-2 md:grid-cols-2 md:grid-rows-1 p-4 gap-8  ">

            <div class="p-4 flex flex-col justify-center px-8">
                <div>
                    <h1 class="font font-semibold md:text-xl">lorem lorem</h1>
                    <h1 class="text-3xl font-bold py-2">About Us</h1>
                    <p class="text-base md:text-sm lg:text-md">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Reprehenderit, ad? Maiores aliquid corrupti laborum fugiat fuga nemo
                        vel architecto, tempore consequuntur voluptates recusandae alias
                        expedita nobis veritatis eveniet sed autem.
                    </p>

                    <a class="font-semibold flex flex-row  gap-6 items-center text-left max-w-max mt-6 md:text-sm bg-[#64c5d3] text-white py-2 px-5 rounded-xl hover:transform hover:scale-110"
                        href="AboutUspage.html">
                        <span>Selengkapnya </span>
                        <span class="w-6 h-6" data-feather="chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class=" p-4 flex justify-center items-center">
                <img src="{{ asset('assets/img/page/index/image-AboutUs.png') }}"
                    class="w-full lg:w-[90%] h-auto object-cover" />
            </div>
        </div>


        <div class="py-28 grid grid-rows-2 md:grid-cols-2 md:grid-rows-1 p-4 gap-8   ">
            <div class=" p-4 flex justify-center items-center">
                <img src="{{ asset('assets/img/page/index/image-Publication.png') }}" class="w-[90%] h-auto object-cover" />

            </div>




            <div class="p-4 flex flex-col justify-center px-8">
                <div>
                    <h1 class="font font-semibold md:text-xl">lorem lorem</h1>
                    <h1 class="text-3xl font-bold py-2">Publication</h1>
                    <p class="text-base md:text-sm lg:text-md">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Reprehenderit, ad? Maiores aliquid corrupti laborum fugiat fuga nemo
                        vel architecto, tempore consequuntur voluptates recusandae alias
                        expedita nobis veritatis eveniet sed autem.
                    </p>

                    <a class="font-semibold flex flex-row  gap-6 items-center text-left max-w-max mt-6 md:text-sm bg-[#64c5d3] text-white py-2 px-5 rounded-xl hover:transform hover:scale-110"
                        href="PublicationPage1.html">
                        <span>Selengkapnya </span>
                        <span class="w-6 h-6" data-feather="chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="py-28 grid grid-rows-2 md:grid-cols-2 md:grid-rows-1 p-4 gap-8  ">

            <div class="p-4 flex flex-col justify-center px-8">
                <div>
                    <h1 class="font font-semibold md:text-xl">lorem lorem</h1>
                    <h1 class="text-3xl font-bold py-2">Data Software</h1>
                    <p class="text-base md:text-sm lg:text-md">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Reprehenderit, ad? Maiores aliquid corrupti laborum fugiat fuga nemo
                        vel architecto, tempore consequuntur voluptates recusandae alias
                        expedita nobis veritatis eveniet sed autem.
                    </p>

                    <a class="font-semibold flex flex-row  gap-6 items-center text-left max-w-max mt-6 md:text-sm bg-[#64c5d3] text-white py-2 px-5 rounded-xl hover:transform hover:scale-110"
                        href="DataSoftware.html">
                        <span>Selengkapnya </span>
                        <span class="w-6 h-6" data-feather="chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class=" p-4 flex justify-center items-center">
                <img src="{{ asset('assets/img/page/index/image-DataSoftware.png') }}"
                    class="w-[90%] h-auto object-cover" />
            </div>
        </div>
    </div>

    <!-- SWIPER START-->


    <section class="">
        <div class=" lg:py-6  items-center justify-center bg-[#E1F2F4]">
            <div class="flex flex-col text-center justify-center md:flex-row">
                <div class="text-center">
                    <h1 class="title font-bold text-4xl text-center max-w-lg py-6">
                        Laboratorium Teknologi Rekayasa Perangkat Lunak
                    </h1>
                    <h2 class="leading-relaxed text-xs text-center py-1 max-w-md flex-wrap mx-auto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h2>
                </div>
            </div>

            <div class="swiper mySwiper"
                style="
          width: 70%;
          height: 70%;
          margin: 30px auto 100px auto;
          max-width: 1200px;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
        ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide relative"
                        style="
              text-align: center;
              font-size: 18px;
              background: #fff;
            ">
                        <img src="{{ asset('assets/img/page/index/image-Lab.png') }}" alt="Slide 1"
                            style="
                display: block;
                width: 100%;
                height: 100%;
                align-items: center;
                text-align: center;
              " />

                        <p class="absolute left-0 right-0 bottom-[120px] text-white text-md">Laboratorium 1</p>
                        <p class="absolute left-0  right-0 bottom-[70px] text-white sm:text-sm">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quas rem molestiae ab? Corporis quia voluptates porro? Ullam con
                        </p>
                    </div>
                    <div class="swiper-slide te"
                        style="
              text-align: center;
              font-size: 18px;
              background: #fff;
              display: flex;
              justify-content: center;
              align-items: center;
            ">
                        <img src="{{ asset('assets/img/page/index/image-Lab.png') }}" alt="Slide 2"
                            style="
                display: block;
                width: 100%;
                height: 100%;
                align-items: center;
                text-align: center;
              " />
                    </div>
                    <a href="Laboratorium1Page.html" class="swiper-slide te  overflow-hidden"
                        style="
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
          ">

                        <<img src="{{ asset('assets/img/page/index/image-Lab') }}" alt="Slide 3"
                            style="display: block; width: 100%; height: 100%;" />
                    </a>

                    <!-- Anda dapat menambahkan lebih banyak elemen swiper-slide dengan gambar yang sesuai -->
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>



            <!-- FAQS START -->
            <section id="faqs" class="">
                <div class="bg-white x-16 lg:py-12 ">
                    <div class="flex flex-col text-center justify-center md:flex-row  mb-16">
                        <div class="text-center">
                            <h1 class="title font-bold text-5xl text-center max-w-lg py-6">
                                Kolom Pertanyaan
                            </h1>
                            <h2 class="leading-relaxed text-xs text-center py-1 max-w-md flex-wrap mx-auto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eum obcaecati debitis adipisci est
                                enim! Animi eaque est eos repellat reprehenderit quidem, nulla incidunt nihil eveniet iusto
                            </h2>
                        </div>
                    </div>

                    <div class="px-32">
                        <div class=" grid grid-rows-3 transition-all ease-in-out fact__container">
                            <div class="font-bold flex justify-between text-lg">
                                <div>May i love you, Darling, or should i call you, Marla?</div>
                                <div class=" hover:cursor-pointer"><i class="fact__icon ri-arrow-right-s-fill"></i></div>
                            </div>
                            <div class="fact__detail hidden mt-[-px]">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum obcaecati debitis adipisci est enim! Animi eaque est eos repellat reprehenderit
                                quidem, nulla incidunt nihil eveniet iusto voluptates laudantium? Suscipit, quisquam?</div>
                            <div class="bg-black w-full h-[2px] mt-4"></div>
                        </div>

                        <div class="grid grid-rows-3 transition-all ease-in-out fact__container">
                            <div class="font-bold flex justify-between text-lg">
                                <div>May i love you, Darling, or should i call you, Marla?</div>
                                <div class=" hover:cursor-pointer"><i class="fact__icon ri-arrow-right-s-fill"></i></div>
                            </div>
                            <div class="fact__detail hidden mt-[-px]">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum obcaecati debitis adipisci est enim! Animi eaque est eos repellat reprehenderit
                                quidem, nulla incidunt nihil eveniet iusto voluptates laudantium? Suscipit, quisquam?</div>
                            <div class="bg-black w-full h-[2px] mt-4"></div>
                        </div>
                        <div class="grid grid-rows-3 transition-all ease-in-out fact__container">
                            <div class="font-bold flex justify-between text-lg">
                                <div>May i love you, Darling, or should i call you, Marla?</div>
                                <div class=" hover:cursor-pointer"><i class="fact__icon ri-arrow-right-s-fill"></i></div>
                            </div>
                            <div class="fact__detail hidden mt-[-px]">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum obcaecati debitis adipisci est enim! Animi eaque est eos repellat reprehenderit
                                quidem, nulla incidunt nihil eveniet iusto voluptates laudantium? Suscipit, quisquam?</div>
                            <div class="bg-black w-full h-[2px] mt-4"></div>
                        </div>
                        <div class="grid grid-rows-3 transition-all ease-in-out fact__container">
                            <div class="font-bold flex justify-between text-lg">
                                <div>May i love you, Darling, or should i call you, Marla?</div>
                                <div class=" hover:cursor-pointer"><i class="fact__icon ri-arrow-right-s-fill"></i></div>
                            </div>
                            <div class="fact__detail hidden mt-[-px]">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum obcaecati debitis adipisci est enim! Animi eaque est eos repellat reprehenderit
                                quidem, nulla incidunt nihil eveniet iusto voluptates laudantium? Suscipit, quisquam?</div>
                            <div class="bg-black w-full h-[2px] mt-4"></div>
                        </div>
                        <div class="grid grid-rows-3 transition-all ease-in-out fact__container">
                            <div class="font-bold flex justify-between text-lg">
                                <div>May i love you, Darling, or should i call you, Marla?</div>
                                <div class=" hover:cursor-pointer"><i class="fact__icon ri-arrow-right-s-fill"></i></div>
                            </div>
                            <div class="fact__detail hidden mt-[-px]">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum obcaecati debitis adipisci est enim! Animi eaque est eos repellat reprehenderit
                                quidem, nulla incidunt nihil eveniet iusto voluptates laudantium? Suscipit, quisquam?</div>
                            <div class="bg-black w-full h-[2px] mt-4"></div>
                        </div>
                    </div>
                </div>

                <!-- Swiper JS -->
                <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

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
            </section>
            <!-- SWIPER END-->

            {{-- <script>
                // Get all the fact containers
                const factContainers = document.querySelectorAll('.fact__container');

                // Add click event listener to each fact container
                factContainers.forEach((container) => {
                    const factDetail = container.querySelector('.fact__detail');
                    const arrowIcon = container.querySelector('.fact__icon');
                    arrowIcon.addEventListener('click', (event) => {
                        // Toggle the visibility of the fact details when arrow icon is clicked
                        factDetail.classList.toggle('hidden');
                        // Stop the click event from propagating to the container
                        event.stopPropagation();
                    });

                    container.addEventListener('click', () => {
                        // Toggle the visibility of the fact details when the container is clicked
                        factDetail.classList.toggle('hidden');
                    });
                });
            </script> --}}
            <script src="https://cdn.tailwindcss.com"></script>
            <script src="https://unpkg.com/feather-icons"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>




    </section>
    <!-- FAQS START -->
    <section class="  py-2  px-4 mb-0 bg-[#E1F2F4] ">
        <div class="flex flex-wrap justify-evenly px-16 lg:justify-between gap-4">
            <div class="px-8 py-4 lg:px-0">
                <h1 class=" text-slate-600 font-bold text-5xl mb-2 lg:text-5xl">24+</h1>
                <p class=" text-slate-600 font-semibold text-sm lg:text-xl">
                    Laboran
                </p>
            </div>
            <div class="px-8 py-4 lg:px-0">
                <h1 class="text-slate-600 font-bold text-5xl mb-2 lg:text-5xl">24+</h1>
                <p class="text-center text-slate-600 font-semibold text-sm lg:text-xl">
                    Laboran
                </p>
            </div>
            <div class="px-8 py-4 lg:px-0">
                <h1 class="text-slate-600 font-bold text-5xl mb-2 lg:text-5xl">24+</h1>
                <p class="text-center text-slate-600 font-semibold text-sm lg:text-xl">
                    Laboran
                </p>
            </div>
            <div class="px-8 py-4 lg:px-0">
                <h1 class="text-slate-600 font-bold text-5xl mb-2 lg:text-5xl">24+</h1>
                <p class="text-center text-slate-600 font-semibold text-sm lg:text-xl">
                    Laboran
                </p>
            </div>
            <div class="px-8 py-4 lg:px-0">
                <h1 class="text-slate-600 font-bold text-5xl mb-2 lg:text-5xl">24+</h1>
                <p class="text-center text-slate-600 font-semibold text-sm lg:text-xl">
                    Laboran
                </p>
            </div>
        </div>
    </section>
@endsection
