<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-adfc563a.css ') }}">
</head>
<body>
    <div class="max-w-3xl mx-auto h-screen flex flex-wrap items-center p-4">
        <div class="w-44 mx-auto md:w-1/3">
            <img src="{{ asset('assets/img/errors/mascot.png') }}" alt="">
        </div>
        <div class="w-full md:w-2/3 text-center justify-center items-center md:mt-0 -mt-80">
            <h1 class="text-main font-bold text-6xl md:text-[80px]">4O4</h1>
            <h3 class="text-main font-bold text-3xl md:text-4xl mb-2">Page not found</h3>
            <p class="text-sm mb-4">Sorry, we couldn’t find the page you are looking for</p>
            @if (session('data'))
            <a href="/dashboard" class="text-white px-3 py-1.5 bg-main rounded-lg">
                <button>Go to Dashboard</button>
            </a>
            @else   
            <a href="/" class="text-white px-3 py-1.5 bg-main rounded-lg">
                <button>Go to Homepage</button>
            </a>
            @endif
        </div>
    </div>
    <script src="{{ asset('build/assets/app-1bdc5748.js') }}"></script>

</body>
</html>