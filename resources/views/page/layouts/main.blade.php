<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        .fact__icon.rotate-icon {
            transform: rotate(180deg);
            transition: transform 0.3s ease;
        }
    </style>

</head>

<body>
    @include('page.components.navbar')

    @yield('content')



    {{-- 
    <img src="{{ asset('assets/img/page/about/penguin.svg') }}" alt=""> --}}

    @include('page.components.footer')
</body>

</html>
