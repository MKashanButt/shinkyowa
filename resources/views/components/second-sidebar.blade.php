<aside class="second-sidebar">
    <div class="vehicle-of-day">
        <h2>Vehicles Of The Day</h2>
        <div class="stage">
            <div class="item">
                <div class="swiper mySwiper" id="vehicleOfDay">
                    <div class="swiper-wrapper">
                        @foreach ($vehicleOfDay as $item)
                            <div class="swiper-slide">
                                <img src="{{ env('STOCK_IMG_LINK') . $item['thumbnail'] }}" alt="vehicle-of-the-day">
                                <p>{{ $item['make'] . ' / ' . $item['model'] . ' ' . $item['year'] }}</p>
                                <span>Stock No. {{ $item['stock_id'] }}</span>
                                <button>Details</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="action">
            <button><i class='bx bx-chevron-left'></i></button>
            <button><i class='bx bx-chevron-right'></i></button>
        </div> --}}
        <div class="swiper-pagination"></div>
    </div>
    <hr>
    <div class="offers">
        <img src="{{ asset('images/offers/offer-one.gif') }}" alt="">
        <img src="{{ asset('images/offers/offer-two.gif') }}" alt="">
        <img src="{{ asset('images/offers/offer-three.gif') }}" alt="">
    </div>
    <hr>
    <div class="testimonials">
        <h2>Testimonials</h2>
        <div class="stage">
            <div class="item">
                <img src="https://www.carjunction.com/testi_images/558/Image%2001.png" alt="">
                <p>Thank you very much I received my vehicle with good condition of everything. I am very happy to
                    purchase
                    a
                    vehicle from Car Junction....</p>
            </div>
            <div class="item">
                <img src="https://www.carjunction.com/testi_images/558/Image%2001.png" alt="">
                <p>Thank you very much I received my vehicle with good condition of everything. I am very happy to
                    purchase
                    a
                    vehicle from Car Junction....</p>
            </div>
            <div class="item">
                <img src="https://www.carjunction.com/testi_images/558/Image%2001.png" alt="">
                <p>Thank you very much I received my vehicle with good condition of everything. I am very happy to
                    purchase
                    a
                    vehicle from Car Junction....</p>
            </div>
        </div>
    </div>
</aside>
<script>
    var vehicleSwiper = new Swiper(".vehicleSwiper", {
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
