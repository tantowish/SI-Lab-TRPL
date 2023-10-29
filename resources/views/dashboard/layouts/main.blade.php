<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('dashboard.components.dashboard')

    <div class="mt-16 sm:ml-64 bg-[#F5F5F5] h-screen overflow-y-auto">
        @yield('content')
    </div>
</body>
</html>