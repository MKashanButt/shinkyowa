<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shinkyowa International | {{ $title }} </title>
    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vehicle-info.css') }}">

    {{-- Box Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    @include('partials._header')
    <div class="content">
        @yield('content')
    </div>
    @include('partials._footer')
    <a href="https://wa.me/817015241308" target="__blank"><button class="whatsapp"><i
                class='bx bxl-whatsapp'></i></button></a>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>

</html>
