<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Shinkyowa International exports high-quality used cars from Japan to Kenya, Tanzania, Jamaica, Bahamas, Guyana, Barbados, UK, Ireland, and Pakistan. Trustworthy service, competitive prices">
    <meta name="keywords"
        content="Japanese used cars for sale in Kenya, Used cars exported from Japan to Tanzania, Japanese car exporters in Jamaica, Second-hand Japanese cars for sale in UK, Used Japanese vehicles imported from Japan in Ireland, Japanese used cars for sale in Pakistan, Japanese vehicle exporters in the Bahamas, Japanese car imports in Guyana, Japanese auto exporters in Barbados, Used Japanese cars for sale in Kenya">

    <title>Shinkyowa International | {{ $title }} </title>
    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('css/' . $stylesheet) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- Box Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-R4DTP9C1YC"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-R4DTP9C1YC');
</script>

<body>
    @include('partials._header')
    @if (Request::path() == '/')
        <div class="swiper mySwiper" id="slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/stock">
                        <img src="{{ env('IMAGE_API_URL') . 'images/banner-one.png' }}" alt="slider-image">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/filter?make=toyota&model=hilux&year=2024">
                        <img src="{{ env('IMAGE_API_URL') . 'images/banner-two.png' }}" alt="slider-image">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/filter?make=honda&model=crv">
                        <img src="{{ env('IMAGE_API_URL') . 'images/banner-three.png' }}" alt="slider-image">
                    </a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    @endif
    <div class="content">
        @if (strpos(Request::path(), 'vehicle-info/') !== 0)
            <x-main-sidebar :make="$allmake" :count="$count" :country="$country" />
        @endif
        <div class="pageContent {{ $sidebar ? 'flex' : 'w-100' }}" style="gap: 10px">
            <div class="sub-content {{ $sidebar ? 'content-divide' : '' }}">
                @yield('content')
            </div>
            @if ($sidebar)
                <x-second-sidebar :vehicleOfDay="$vehicleOfDay" />
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"
        integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if (Request::is('/'))
        <script>
            var swiper = new Swiper(".mySwiper", {
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
            });
        </script>
    @endif
    <script>
        var swiper = new Swiper(".mySwiper1", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            clickable: true,
            freemode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            thumbs: {
                swiper: swiper,
            },
            autoplay: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>
