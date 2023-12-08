<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-adfc563a.css ') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Tambahkan ini ke dalam bagian head HTML Anda -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />


    <script src="https://unpkg.com/feather-icons"></script>


    {{-- <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            padding: 20px;
            background: #eee;
            user-select: none;
        }

        [type="radio"] {
            display: none;
        }

        #slider {
            height: 35vw;
            position: relative;
            perspective: 1000px;
            transform-style: preserve-3d;
        }

        #slider label {
            margin: auto;
            width: 60%;
            height: 100%;
            border-radius: 4px;
            position: absolute;
            left: 0;
            right: 0;
            cursor: pointer;
            transition: transform 0.4s ease;
        }

        #s1:checked~#slide4,
        #s2:checked~#slide5,
        #s3:checked~#slide1,
        #s4:checked~#slide2,
        #s5:checked~#slide3 {
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.37);
            transform: translate3d(-50%, 0, -300px);
        }

        #s1:checked~#slide5,
        #s2:checked~#slide1,
        #s3:checked~#slide2,
        #s4:checked~#slide3,
        #s5:checked~#slide4 {
            box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3),
                0 2px 2px 0 rgba(0, 0, 0, 0.2);
            transform: translate3d(-25%, 0, -200px);
        }

        #s1:checked~#slide1,
        #s2:checked~#slide2,
        #s3:checked~#slide3,
        #s4:checked~#slide4,
        #s5:checked~#slide5 {
            box-shadow: 0 13px 25px 0 rgba(0, 0, 0, 0.3),
                0 11px 7px 0 rgba(0, 0, 0, 0.19);
            transform: translate3d(0, 0, 0);
        }

        #s1:checked~#slide2,
        #s2:checked~#slide3,
        #s3:checked~#slide4,
        #s4:checked~#slide5,
        #s5:checked~#slide1 {
            box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3),
                0 2px 2px 0 rgba(0, 0, 0, 0.2);
            transform: translate3d(25%, 0, -200px);
        }

        #s1:checked~#slide3,
        #s2:checked~#slide4,
        #s3:checked~#slide5,
        #s4:checked~#slide1,
        #s5:checked~#slide2 {
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.37);
            transform: translate3d(50%, 0, -300px);
        }
    </style> --}}


</head>


<body>
    @include('page.components.navbar')

    @yield('content')



    {{-- 
    <img src="{{ asset('assets/img/page/about/penguin.svg') }}" alt=""> --}}
    {{-- 
    <img src="{{ asset('assets/img/page/about/penguin.svg') }}" alt=""> --}}

    @include('page.components.footer')
    <script src="{{ asset('build/assets/app-1bdc5748.js') }}"></script>
</body>


</html>
