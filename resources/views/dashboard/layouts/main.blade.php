<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-adfc563a.css ') }}">
</head>
<body>
    @include('dashboard.components.dashboard')

    <div class="h-screen bg-[#F5F5F5] overflow-y-auto">
        <div class="mt-16 sm:ml-64 ">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('build/assets/app-1bdc5748.js') }}"></script>
</body>
</html>