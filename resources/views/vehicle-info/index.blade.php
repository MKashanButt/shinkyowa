@extends('vehicle-info.template')
@section('content')
    <div class="vehicle-content">
        <h2>{{ $vehicle->make }} {{ $vehicle->model }} {{ $vehicle_info->transmission }} {{ $vehicle_info->year }}
            {{ $vehicle_info->engine }}
            {{ $vehicle_info->fuel }} for Sale</h2>
        <div class="stage flex">
            <div class="item">
                @foreach ($vehicle_image as $image)
                    @for ($i = 0; $i < 5; $i++)
                        {{-- {{ var_dump($image['1']) }} --}}
                        <img src="{{ asset('storage/' . $image[0]) }}" alt="vehicle-image" class="main-image">
                    @endfor
                @endforeach
            </div>
            <div class="item">
                <div class="tabs">
                    <button><i class='bx bxs-car-garage'></i> Vehicle Details</button>
                    <button><i class='bx bx-exit'></i> Extra</button>
                </div>
                <div class="stage">
                    <div class="vehicle-details">
                        <div class="table">
                            <div class="col flex">
                                <div class="row">
                                    <p>S.No</p>
                                </div>
                                <div class="row">
                                    <p>{{ $vehicle->id }}</p>
                                </div>
                            </div>
                            <div class="col flex">
                                <div class="row">
                                    <p>Make / Model</p>
                                </div>
                                <div class="row">
                                    <p>{{ $vehicle->make }} / {{ $vehicle->model }}</p>
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
                                    <p>Driving Type</p>
                                </div>
                                <div class="row">
                                    <p>{{ $vehicle_info->type }}</p>
                                </div>
                            </div>
                            <div class="col flex">
                                <div class="row">
                                    <p>Engine</p>
                                </div>
                                <div class="row">
                                    <p>{{ $vehicle_info->engine }}</p>
                                </div>
                            </div>
                            <div class="col flex">
                                <div class="row">
                                    <p>Fuel</p>
                                </div>
                                <div class="row">
                                    <p>{{ $vehicle_info->fuel }}</p>
                                </div>
                            </div>
                            <div class="col flex">
                                <div class="row">
                                    <p>Mileage</p>
                                </div>
                                <div class="row">
                                    <p>{{ $vehicle_info->mileage }}</p>
                                </div>
                            </div>
                            <div class="col flex">
                                <div class="row">
                                    <p>Transmission</p>
                                </div>
                                <div class="row">
                                    <p>{{ $vehicle_info->transmission }}</p>
                                </div>
                            </div>
                            <div class="col flex">
                                <div class="row">
                                    <p>Doors</p>
                                </div>
                                <div class="row">
                                    <p>{{ $vehicle_info->doors }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="extras">
                            <h4>Extras</h4>
                            <p>{{ $vehicle_info->extras }}</p>
                        </div>
                    </div>
                    <div class="action">
                        <form action="" method="post">
                            <div class="destination">
                                <h3>Step 1: Select Vehicle Destination</h3>
                                <select name="destination" id="destination">
                                    <option value="" disabled selected>Select Destination</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="New Zealand">Madagascar</option>
                                    <option value="New Zealand">New Caledonia</option>
                                    <option value="New Zealand">Nepal</option>
                                    <option value="New Zealand">Nauru</option>
                                </select>
                            </div>
                            <div class="destination">
                                <h3>Step 2: Vehicle Enquiry Form</h3>
                                <p>Enter your details below to send your enquiry for this vehicle</p>
                                <input type="text" name="fullName" id="fullName" placeholder="Full Name" required>
                                <input type="email" name="emailAddress" id="emailAddress" placeholder="Email Address"
                                    required>
                                <input type="number" name="phoneNo" id="phoneNo" placeholder="Phone No">
                                <select name="destination" id="destination" required>
                                    <option value="" disabled selected>Select Country</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Nauru">Nauru</option>
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
    <div class="customer-testimonials">
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
    </div>
@endsection
