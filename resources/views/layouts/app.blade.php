<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>

    <div class="flex flex-row px-8 py-6 gap-4 justify-around items-center">
        <div class="flex flex-row gap-16">
            <div><a href="">Home</a></div>
            <div><a href="">About Us</a></div>
            <div><a href="">FAQs</a></div>
            <div><a href="">Research</a></div>
        </div>
        <div>
            INI LOGO
        </div>
        <div class="flex flex-row gap-16 items-center">
            <div><a href="">Laboratorium</a></div>
            <div><a href="">Membership</a></div>
            <div class="bg-blue-500 px-4 text-white  py-2 rounded-[100px]"><a href="">Log In</a></div>
        </div>
    </div>

    @yield('content')





    @include('components.footer')
</body>
</html>