@extends('template')
@section('content')
    <h2>{{ strtoupper($vehicle->make) }} {{ strtoupper($vehicle->model) }} {{ strtoupper($vehicle->transmission) }}
        {{ $vehicle->year }}
        {{ $vehicle->engine }}
        {{ $vehicle->fuel }} for Sale</h2>
    <div class="stage flex">
        <div class="item">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ env('STOCK_IMG_LINK') . $vehicle->thumbnail }}" alt="vehicle-image" class="main-image">
                    </div>
                    @foreach (explode(',', $vehicle->stock_images) as $image)
                        <div class="swiper-slide">
                            <img src="{{ env('STOCK_IMG_LINK') . trim($image, '[]""') }}" alt="vehicle-image"
                                class="main-image">
                        </div>
                    @endforeach
                </div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ env('STOCK_IMG_LINK') . $vehicle->thumbnail }}" alt="vehicle-image" class="main-image">
                    </div>
                    @foreach (explode(',', $vehicle->stock_images) as $image)
                        <div class="swiper-slide">
                            <img src="{{ env('STOCK_IMG_LINK') . trim($image, '[]""') }}" alt="vehicle-image"
                                class="main-image">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="item">
            <div class="tabs">
                <button disabled><i class='bx bxs-car-garage'></i> Vehicle Details</button>
            </div>
            <div class="stage">
                <div class="vehicle-details">
                    <div class="table">
                        <div class="col flex">
                            <div class="row">
                                <p>S.No</p>
                            </div>
                            <div class="row">
                                <p>{{ $vehicle->stock_id }}</p>
                            </div>
                        </div>
                        <div class="col flex">
                            <div class="row">
                                <p>Chassis</p>
                            </div>
                            <div class="row">
                                <p>{{ $vehicle->chassis }}</p>
                            </div>
                        </div>
                        <div class="col flex">
                            <div class="row">
                                <p>Make / Model</p>
                            </div>
                            <div class="row">
                                <p>{{ strtoupper($vehicle->make) }} / {{ strtoupper($vehicle->model) }}</p>
                            </div>
                        </div>
                        <div class="col flex">
                            <div class="row">
                                <p>Year</p>
                            </div>
                            <div class="row">
                                <p>{{ $vehicle->year }}</p>
                            </div>
                        </div>
                        <div class="col flex">
                            <div class="row">
                                <p>Body Type</p>
                            </div>
                            <div class="row">
                                <p>{{ strtoupper($vehicle->body_type) }}</p>
                            </div>
                        </div>
                        <div class="col flex">
                            <div class="row">
                                <p>Fuel</p>
                            </div>
                            <div class="row">
                                <p>{{ $vehicle->fuel }}</p>
                            </div>
                        </div>
                        <div class="col flex">
                            <div class="row">
                                <p>Mileage</p>
                            </div>
                            <div class="row">
                                <p>{{ $vehicle->mileage }}</p>
                            </div>
                        </div>
                        <div class="col flex">
                            <div class="row">
                                <p>Transmission</p>
                            </div>
                            <div class="row">
                                <p>{{ $vehicle->transmission }}</p>
                            </div>
                        </div>
                        <div class="col flex">
                            <div class="row">
                                <p>Doors</p>
                            </div>
                            <div class="row">
                                <p>{{ $vehicle->doors }}</p>
                            </div>
                        </div>
                        <div class="col flex">
                            <div class="row">
                                <p>FOB Price</p>
                            </div>
                            <div class="row">
                                <p>{{ $vehicle->currency . strpos($vehicle->fob, ',') ? $vehicle->fob : number_format($vehicle->fob) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="extras">
                        <h4>Features</h4>
                        <p>{!! $vehicle->features !!}</p>
                    </div>
                </div>
                <div class="action">
                    <form action="" method="post">
                        <div class="destination">
                            <h3>Step 1: Select Vehicle Destination</h3>
                            <select name="destination" id="destination">
                                <option value="" disabled selected>Select Destination</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Ireland">Ireland</option>
                                <option value="UK">UK</option>
                                <option value="Pakistan">Pakistan</option>
                            </select>
                        </div>
                        <div class="destination">
                            <h3>Step 2: Vehicle Enquiry Form</h3>
                            <p>Enter your details below to send your enquiry for this vehicle</p>
                            <input type="text" name="name" id="name" placeholder="Full Name" required>
                            <input type="email" name="email" id="email" placeholder="Email Address" required>
                            <input type="number" name="phone" id="phone" placeholder="Phone No">
                            <select name="destination" id="destination" required>
                                <option value="" disabled selected>Select Country</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Ireland">Ireland</option>
                                <option value="UK">UK</option>
                                <option value="Pakistan">Pakistan</option>
                            </select>
                            <textarea name="comment" id="comment" cols="30" rows="10"
                                placeholder="Enter Comment any other details you want to provide" required></textarea>
                        </div>
                        <div class="destination">
                            <button>Send Enquiry</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- <div class="customer-testimonials">
        <h3>Customer Testimonials</h3>
        <div class="stage flex">
            <div class="item">
                <img src="https://www.carjunction.com/testi_images/926/101599aa-(1).jpg" alt="">
                <p>Imported our first vehicle from Car Junction, Services were upto the mark, very happy working with this
                    company, Agent was very professional, Experienced and efficient, Thank you</p>
                <span>MR. ISAACS (GUYANA)</span>
            </div>
            <div class="item">
                <img src="https://www.carjunction.com/UserFiles/53098-1.jpg" alt="">
                <p>Finally the wait is over! I have received my vehicle smoothly. Thanks very much for your attention. Now I
                    know Car Junction Company is the one to Trust. I do promise to guide my best friends to your company in
                    case they want to import vehicles.</p>
                <span>CAR JUNCTION (UGANDA)</span>
            </div>
            <div class="item">
                <img src="https://www.carjunction.com/testi_images/379/2.jpg" alt="">
                <p>Very Happy Dealing with Car Junction and working together with an Agent, Many More Business to Come.
                    Thanks Car Junction Japan, You are the best company. My Client Loved the vehicle.</p>
                <span>BARHAM (JAMAICA)</span>
            </div>
            <div class="item">
                <img src="https://www.carjunction.com/UserFiles/IMG-20180819-WA0000.jpg" alt="">
                <p>Thank you very much I received my car about 3 weeks ago now. Its really a nice car and everything inside
                    is nice and in good condition.</p>
                <span>ALISTER HATIPEDZI (ZIMBABWE)</span>
            </div>
        </div>
    </div> --}}
@endsection
