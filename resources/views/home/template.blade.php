<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squad Autos London | {{ $title }} </title>
    @vite('resources/css/root.css')
    @vite('resources/css/home.css')

    {{-- Box Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    @include('partials._header')
    <div class="slider">
        <img src="https://www.carjunction.com/logo_images/383/lexus_lx_600_main.gif" alt="slider-image">
    </div>
    <div class="content">
        <x-main-sidebar />
        @yield('content')
    </div>
    @include('partials._footer')
</body>

</html>
