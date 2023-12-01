@extends('page.layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/grid.css') }}">

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
                <h1 class="text-base lg:text-md tracking-wider">Home / Laboratorium</h1>
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
    <div class=" px-8 justify-center lg:py-24 py-8 lg:px-24 md:mx-12">
        <div id="imageContainer" class="py-4 grid grid-cols-6 grid-rows-1 gap-2 md:gap-4 ">
            <div class="bg-red-400 col-span-3">
                <img src="{{ asset('assets/img/page/laboratorium2/image 27.png') }}" alt="" class="h-full w-full" />
            </div>
            <div class="bg-red-400 col-span-3">
                <img src="{{ asset('assets/img/page/laboratorium2/image 1.png') }}" alt="" class="h-full w-full" />
            </div>
            <div class="bg-red-400 col-span-4 row-span-2">
                <img src="{{ asset('assets/img/page/laboratorium2/image 26.png') }}" alt="" class="h-full w-full" />
            </div>
            <div class="bg-red-400 col-span-2 row-span-1">
                <img src="{{ asset('assets/img/page/laboratorium2/image 24.png') }}" alt="" class="h-full w-full" />
            </div>
            <div class="bg-red-400 col-span-2 row-span-1">
                <img src="{{ asset('assets/img/page/laboratorium2/image 16 (1).png') }}" alt=""
                    class="h-full w-full" />
            </div>
            <div class="bg-red-400 col-span-3">
                <img src="{{ asset('assets/img/page/laboratorium2/image 25.png') }}" alt="" class="h-full w-full" />
            </div>
            <div class="bg-red-400 col-span-3">
                <img src="{{ asset('assets/img/page/laboratorium2/image 15 (1).png') }}" alt=""
                    class="h-full w-full" />
            </div>
        </div>
        <div class="text-sm lg:text-lg text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
            obcaecati excepturi, tempore vel reprehenderit sequi itaque nihil dolorum. Illum, sed alias quidem harum esse
            mollitia, dolor veniam a sequi reprehenderit facere rem. Dignissimos minus totam neque suscipit eum autem
            adipisci animi aperiam, officia nulla recusandae cupiditate eos reprehenderit blanditiis? Deserunt iste
            perspiciatis nesciunt obcaecati, nam dolorem. Minima aperiam laboriosam, distinctio consequuntur dicta doloribus
            possimus quos maxime, dignissimos corporis labore consequatur. Consequuntur vitae eveniet, officiis, atque vero
            dolorum facere facilis aliquid officia animi inventore. Odio alias accusantium blanditiis quo saepe libero animi
            deleniti quod doloremque illo incidunt nulla, est ipsum corporis iure eos quia molestiae. Perspiciatis
            voluptatibus asperiores distinctio alias aliquam. Explicabo nemo veniam eligendi expedita. Iure illo explicabo
            autem. Unde dolorem quibusdam non incidunt maxime labore iusto amet nobis veritatis earum pariatur provident
            recusandae quisquam expedita quaerat eligendi, architecto laboriosam cum ullam repellat. Id praesentium
            voluptatem consectetur modi, unde rerum sit dolore ducimus obcaecati atque nostrum deserunt facilis! Iste
            placeat illum, a, blanditiis officia recusandae aperiam voluptatum, voluptatem architecto delectus laudantium ea
            saepe corrupti officiis. Perspiciatis, quae aspernatur ab illum modi a temporibus labore? Id, saepe laboriosam
            neque ex quaerat eum sapiente perspiciatis deserunt mollitia, pariatur quasi voluptatum quibusdam quisquam,
            magnam sint odit incidunt sequi impedit commodi. Provident est dolorem quos vitae accusantium, accusamus amet.
            Deserunt ipsa, voluptatum quibusdam culpa deleniti laboriosam harum, voluptates temporibus delectus alias
            facilis numquam, corporis itaque at consectetur non iusto dolores corrupti. Sunt quae, iusto itaque, doloribus
            distinctio error nisi repudiandae id, commodi placeat ullam?</div>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script defer>
        // Fungsi untuk mengacak array
        function shuffleArray(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
        }

        // Fungsi untuk menampilkan gambar secara bersamaan dengan animasi
        function displayRandomImages() {
            const container = document.querySelector('.image-container');
            const images = Array.from(container.children); // Menggunakan children untuk mendapatkan elemen anak langsung
            shuffleArray(images);

            images.forEach((img, index) => {
                img.style.opacity = '1'; // Set opacity ke 1
                img.style.transform = 'translateY(0)'; // Set transform ke 0
                img.classList.add('visible'); // Tambahkan kelas untuk animasi
            });
        }

        // Panggil fungsi untuk memulai animasi
        displayRandomImages();
    </script>
@endsection
