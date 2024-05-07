<aside class="main-sidebar">
    <div class="search">
        <h2 class="heading">Search</h2>
        <form action="filter" method="GET">
            <div class="item">
                <label for="make">Make:</label>
                <select name="make" id="make">
                    @if (Request::get('make'))
                        <option disabled selected>{{ Request::get('make') }}</option>
                    @else
                        <option disabled selected>Select Make</option>
                    @endif
                    @foreach ($make as $item)
                        <option value="{{ $item->make }}">{{ $item->make }}</option>
                    @endforeach
                </select>
            </div>
            <div class="item">
                <label for="model">Model:</label>
                <select name="model" id="model">
                    @if (Request::get('model'))
                        <option disabled selected>{{ Request::get('model') }}</option>
                    @else
                        <option disabled selected>Select Model</option>
                    @endif
                </select>
            </div>
            <div class="item">
                <label for="stock">Stock:</label>
                <input type="text" name="stock" id="stock" placeholder="Stock No">
            </div>
            <button>Search</button>
        </form>
    </div>
    <div class="make">
        <h2 class="heading">Search By Make</h2>
        <ul>
            <li><a href="/make/toyota"><img src="https://www.carjunction.com/make_image/34/Toyota.gif" alt="">
                    <span>Toyota({{ $count['toyota'] }})</span></a></li>
            <li><a href="/make/nissan"><img src="https://www.carjunction.com/make_image/27/Nissan.gif" alt="">
                    <span>Nissan({{ $count['nissan'] }})</span></a></li>
            <li><a href="/make/mazda"><img src="https://www.carjunction.com/make_image/22/Mazda.gif" alt="">
                    <span>Mazda({{ $count['mazda'] }})</span></a></li>
            <li><a href="/make/mitsubishi"><img src="https://www.carjunction.com/make_image/26/Mitsubishi.gif"
                        alt="">
                    <span>Mitsubishi({{ $count['mitsubishi'] }})</span></a></li>
            <li><a href="/make/honda"><img src="https://www.carjunction.com/make_image/11/Honda.gif" alt="">
                    <span>Honda({{ $count['honda'] }})</span></a></li>
            <li><a href="/make/suzuki"><img src="https://www.carjunction.com/make_image/47/Suzuki.gif" alt="">
                    <span>Suzuki({{ $count['suzuki'] }})</span></a></li>
            <li><a href="/make/subaru"><img src="https://www.carjunction.com/make_image/47/Suzuki.gif" alt="">
                    <span>Subaru({{ $count['subaru'] }})</span></a></li>
            <li><a href="/make/isuzu"><img src="https://www.carjunction.com/make_image/14/Isuzu.gif" alt="">
                    <span>Isuzu({{ $count['isuzu'] }})</span></a></li>
            <li><a href="/make/daihatsu"><img src="https://www.carjunction.com/make_image/14/Isuzu.gif" alt="">
                    <span>Daihatsu({{ $count['daihatsu'] }})</span></a></li>
            <li><a href="/make/mitsuoka"><img src="https://www.carjunction.com/make_image/14/Isuzu.gif" alt="">
                    <span>Mitsuoka({{ $count['mitsuoka'] }})</span></a></li>
            <li><a href="/make/lexus"><img src="https://www.carjunction.com/make_image/14/Isuzu.gif" alt="">
                    <span>Lexus({{ $count['lexus'] }})</span></a></li>
            <li><a href="/make/BMW"><img src="https://www.shinkyowa.com/images/brand12.png" alt="">
                    <span>BMW({{ $count['BMW'] }})</span></a></li>
            <li><a href="/make/hino"><img src="https://www.carjunction.com/make_image/49/Hino.gif" alt="">
                    <span>Hino({{ $count['hino'] }})</span></a></li>
            <li><a href="/make/volkswagen"><img src="https://www.shinkyowa.com/images/brand8.png" alt="">
                    <span>Volkswagen({{ $count['volkswagen'] }})</span></a></li>
        </ul>
    </div>
    <div class="type">
        <h2 class="heading">Search By Type</h2>
        <ul>
            <li><a href="/type/hatchback"><img src="https://www.carjunction.com/category_image/6/Hatchback-Icn-Blue.png"
                        alt=""> <span>Hatchback({{ $count['hatchback'] }})</span></a></li>
            <li><a href="/type/sedan"><img src="https://www.carjunction.com/category_image/2/Sedan-Icn-Blue.png"
                        alt=""> <span>Sedan({{ $count['sedan'] }})</span></a></li>
            <li><a href="/type/truck"><img src="https://www.carjunction.com/category_image/7/Trucks-Icn-Blue.png"
                        alt=""> <span>Truck({{ $count['truck'] }})</span></a></li>
            <li><a href="/type/van"><img src="https://www.carjunction.com/category_image/8/Vans-Icn-Blue.png"
                        alt=""> <span>Van({{ $count['van'] }})</span></a></li>
            <li><a href="/type/suv"><img src="https://www.carjunction.com/category_image/1/Suv-Icn-Blue.png"
                        alt=""> <span>Suv({{ $count['suv'] }})</span></a></li>
            <li><a href="/type/pickup"><img src="https://www.carjunction.com/category_image/52/Pickups-Icn-Blue.png"
                        alt=""> <span>Pickup({{ $count['pickup'] }})</span></a></li>
            <li><a href="/type/wagon"><img src="https://www.carjunction.com/category_image/3/Wagons-Icn-Blue.png"
                        alt=""> <span>Wagon({{ $count['wagon'] }})</span></a></li>
            <li><a href="/type/busses"><img src="https://www.carjunction.com/category_image/4/Bus-Icn-Blue.png"
                        alt=""> <span>Buses({{ $count['buses'] }})</span></a></li>
            <li><a href="/type/mini busses"><img src="https://www.carjunction.com/category_image/4/Bus-Icn-Blue.png"
                        alt=""> <span>Mini Buses({{ $count['mini buses'] }})</span></a></li>
        </ul>
    </div>
    <div class="region">
        <h2 class="heading">Search By Region</h2>
        <ul>
            <li><a href="/region/japan"><img src="{{ asset('https://www.carjunction.com/images/japan.png') }}"
                        alt="region">Japan</a></li>
            <li><a href="/region/thailand"><img src="{{ asset('https://www.carjunction.com/images/thailand.png') }}"
                        alt="region">Thailand</a>
            </li>
            <li><a href="/region/uk"><img src="{{ asset('images/uk-flag.png') }}" alt="region">UK</a></li>
            <li><a href="/region/pakistan"><img src="{{ asset('https://www.carjunction.com/images/pakistan.png') }}"
                        alt="region">Pakistan</a>
            </li>
        </ul>
    </div>
</aside>
<script>
    document.getElementById('make').addEventListener('change', function() {
        var make = this.value;
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/get-models?make=' + make, true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                var models = JSON.parse(xhr.responseText);
                var modelDropdown = document.getElementById('model');
                modelDropdown.innerHTML = '<option disabled selected>Select Model</option>';
                models.forEach(function(model) {
                    var option = document.createElement('option');
                    option.value = model;
                    option.text = model;
                    modelDropdown.appendChild(option);
                });
            }
        };
        xhr.send();
    });
</script>
