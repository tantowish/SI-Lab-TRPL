<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>

<body>
    @include('page.components.navbar')

    @yield('content')



    {{-- 
    <img src="{{ asset('assets/img/page/about/penguin.svg') }}" alt=""> --}}

    @include('page.components.footer')
</body>

</html>
