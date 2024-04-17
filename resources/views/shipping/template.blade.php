<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shinkyowa International | {{ $title }} </title>
    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shipping.css') }}">

    {{-- Box Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"
        integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    @include('partials._header')
    <div class="content">
        <x-main-sidebar :make="$allmake" :count="$count" />
        @yield('content')
    </div>
    @include('partials._footer')
    <a href="https://wa.me/817015241308" target="__blank"><button class="whatsapp"><i
                class='bx bxl-whatsapp'></i></button></a>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>

</html>
