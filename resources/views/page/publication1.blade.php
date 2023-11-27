@extends('page.layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">

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

    <!-- Section Publication Start-->
    <div class="max-w-6xl mx-auto">
        <div
            class="mx-4 md:mx-8 md:p-8 p-4 -mt-16 lg:px-40 lg:py-16 rounded-t-[70px] md:rounded-t-[80px] lg:rounded-t-[80px] bg-[#64c5d3]">
            <div class="text-white flex items-center">
                <p class="text-sm text-center px-4 lg:text-lg lg:px-24">
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

    <!-- Section curousel start-->
    <section class=" py-12 lg:py-24  md:py-16">
        <section id="slider">
            <input type="radio" name="slider" id="s1" />
            <input type="radio" name="slider" id="s2" />
            <input type="radio" name="slider" id="s3" checked />
            <input type="radio" name="slider" id="s4" />
            <input type="radio" name="slider" id="s5" />



            <label for="s1" id="slide1"
                style="background-image: url('{{ asset('assets/img/page/publication1/image 21.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <a href="\publication2"
                    class="text-overlay text-white lg:text-2xl text-sm font-bold  absolute text-center lg:top-[72%] top-[55%] md:top-[73%] transform left-[5%] right-[5%]">
                    Artificial Intelligence
                </a>
                <div
                    class="text-overlay lg:text-lg text-xs text-white absolute text-center lg:top-[80%] top-[70%] md:top-[80%] left-[5%] right-[5%] md:right-[20%] md:left-[20%] transform ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>

            </label>




            <label for="s2" id="slide2"8
                style="background-image: url('{{ asset('assets/img/page/publication1/image 18.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            </label>


            <label for="s3" id="slide3"
                style="background-image: url('{{ asset('assets/img/page/publication1/image 21.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            </label>

            <label for="s4" id="slide4"
                style="background-image: url('{{ asset('assets/img/page/publication1/image 17.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <a href="\publication2"
                    class="text-overlay text-white lg:text-2xl text-sm font-bold  absolute text-center lg:top-[72%] top-[55%] md:top-[73%] transform left-[5%] right-[5%]">
                    Artificial Intelligence
                </a>
                <div
                    class="text-overlay lg:text-lg text-xs text-white absolute text-center lg:top-[80%] top-[70%] md:top-[80%] left-[5%] right-[5%] md:right-[20%] md:left-[20%] transform ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
            </label>

            <label for="s5" id="slide5"
                style="background-image: url('{{ asset('assets/img/page/publication1/image 20.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            </label>
        </section>
    </section>

    <script>
        let currentIndex = 1;

        setInterval(() => {
            document.getElementById(`s${currentIndex}`).checked = true;
            currentIndex = (currentIndex % 5) + 1;
        }, 2000); // Change slide every 3 seconds
    </script>
    <!-- Section curousel end -->

    <!-- Footer start -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

    <!-- footer end -->
@endsection
