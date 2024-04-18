<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shinkyowa International | {{ $title }} </title>
    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('css/' . $stylesheet) }}">

    {{-- Box Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"
        integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    @include('partials._header')
    @if (Request::path() == '/')
        <div id="slider">
            <img src="https://www.carjunction.com/logo_images/383/lexus_lx_600_main.gif" alt="slider-image">
        </div>
    @endif
    <div class="content">
        @if (strpos(Request::path(), 'vehicle-info/') !== 0)
            <x-main-sidebar :make="$allmake" :count="$count" />
        @endif
        <div class="pageContent {{ $sidebar ? 'flex' : 'w-100' }}" style="gap: 10px">
            <div class="sub-content {{ $sidebar ? 'content-divide' : '' }}">
                @yield('content')
            </div>
            @if (Request::path() == '/' || Request::path() == 'stock')
                <x-second-sidebar />
            @endif
        </div>
    </div>
    @include('partials._footer')
    <a href="https://wa.me/817015241308" target="__blank">
        <button class="whatsapp">
            <i class='bx bxl-whatsapp'></i>
        </button>
    </a>
    <dialog id="contactDialog">
        <div class="message">
            <button onclick="toggleDisplay()"><i class='bx bx-x'></i></button>
            <h3>Contact Us</h3>
            <form action="" method="dialog" onsubmit="toggleDisplay()">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
                <label for="message">Message:</label>
                <textarea name="message" id="message" rows="10"></textarea>
                <button>Send</button>
            </form>
        </div>
    </dialog>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
