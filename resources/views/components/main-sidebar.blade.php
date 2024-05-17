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
            <li><a href="/make/toyota"><img src="{{ asset('images/makes/toyota.png') }}" alt="">
                    <span>Toyota({{ $count['toyota'] }})</span></a></li>
            <li><a href="/make/nissan"><img src="{{ asset('images/makes/nissan.png') }}" alt="">
                    <span>Nissan({{ $count['nissan'] }})</span></a></li>
            <li><a href="/make/mazda"><img src="{{ asset('images/makes/mazda.png') }}" alt="">
                    <span>Mazda({{ $count['mazda'] }})</span></a></li>
            <li><a href="/make/mitsubishi"><img src="{{ asset('images/makes/mitsubishi.png') }}" alt="">
                    <span>Mitsubishi({{ $count['mitsubishi'] }})</span></a></li>
            <li><a href="/make/honda"><img src="{{ asset('images/makes/honda.png') }}" alt="">
                    <span>Honda({{ $count['honda'] }})</span></a></li>
            <li><a href="/make/suzuki"><img src="{{ asset('images/makes/suzuki.png') }}" alt="">
                    <span>Suzuki({{ $count['suzuki'] }})</span></a></li>
            <li><a href="/make/subaru"><img src="{{ asset('images/makes/subaru.png') }}" alt="">
                    <span>Subaru({{ $count['subaru'] }})</span></a></li>
            <li><a href="/make/isuzu"><img src="{{ asset('images/makes/isuzu.png') }}" alt="">
                    <span>Isuzu({{ $count['isuzu'] }})</span></a></li>
            <li><a href="/make/daihatsu"><img src="{{ asset('images/makes/daihatsu.png') }}" alt="">
                    <span>Daihatsu({{ $count['daihatsu'] }})</span></a></li>
            <li><a href="/make/mitsuoka"><img src="{{ asset('images/makes/mitsuoka.png') }}" alt="">
                    <span>Mitsuoka({{ $count['mitsuoka'] }})</span></a></li>
            <li><a href="/make/lexus"><img src="{{ asset('images/makes/lexus.png') }}" alt="">
                    <span>Lexus({{ $count['lexus'] }})</span></a></li>
            <li><a href="/make/BMW"><img src="{{ asset('images/makes/BMW.png') }}" alt="">
                    <span>BMW({{ $count['BMW'] }})</span></a></li>
            <li><a href="/make/hino"><img src="{{ asset('images/makes/hino.png') }}" alt="">
                    <span>Hino({{ $count['hino'] }})</span></a></li>
            <li><a href="/make/volkswagen"><img src="{{ asset('images/makes/volkswagon.png') }}" alt="">
                    <span>Volkswagen({{ $count['volkswagen'] }})</span></a></li>
        </ul>
    </div>
    <div class="type">
        <h2 class="heading">Search By Type</h2>
        <ul>
            <li><a href="/type/hatchback"><img src="{{ asset('images/type/hatchback.png') }}" alt="">
                    <span>Hatchback({{ $count['hatchback'] }})</span></a></li>
            <li><a href="/type/sedan"><img src="{{ asset('images/type/sedan.png') }}" alt="">
                    <span>Sedan({{ $count['sedan'] }})</span></a></li>
            <li><a href="/type/truck"><img src="{{ asset('images/type/truck.png') }}" alt="">
                    <span>Truck({{ $count['truck'] }})</span></a></li>
            <li><a href="/type/suv"><img src="{{ asset('images/type/suv.png') }}" alt="">
                    <span>SUV({{ $count['suv'] }})</span></a></li>
            <li><a href="/type/van"><img src="{{ asset('images/type/van.png') }}" alt="">
                    <span>Van({{ $count['van'] }})</span></a></li>
            <li><a href="/type/suv"><img src="{{ asset('images/type/suv.png') }}" alt="">
                    <span>Suv({{ $count['suv'] }})</span></a></li>
            <li><a href="/type/pickup"><img src="{{ asset('images/type/pickup.png') }}" alt="">
                    <span>Pickup({{ $count['pickup'] }})</span></a></li>
            <li><a href="/type/wagon"><img src="{{ asset('images/type/wagon.png') }}" alt="">
                    <span>Wagon({{ $count['wagon'] }})</span></a></li>
            <li><a href="/type/buses"><img src="{{ asset('images/type/bus.png') }}" alt="">
                    <span>Buses({{ $count['buses'] }})</span></a></li>
            <li><a href="/type/mini buses"><img src="{{ asset('images/type/minibus.png') }}" alt="">
                    <span>Mini
                        Buses({{ $count['mini buses'] }})</span></a></li>
        </ul>
    </div>
    <div class="region">
        <h2 class="heading">Search By Country</h2>
        <ul>
            <li><a href="/country/jamaica"><img src="{{ asset('images/flags/jamaica.png') }}"
                        alt="country">Jamaica</a></li>
            <li><a href="/country/Bahamas"><img src="{{ asset('images/flags/bahamas.png') }}"
                        alt="country">Bahamas</a>
            </li>
            <li><a href="/country/guyana"><img src="{{ asset('images/flags/guyana.png') }}"
                        alt="country">Guyana</a>
            </li>
            <li><a href="/country/barbados"><img src="{{ asset('images/flags/barbados.png') }}"
                        alt="country">Barbados</a>
            </li>
            <li><a href="/country/kenya"><img src="{{ asset('images/flags/kenya.png') }}" alt="country">Kenya</a>
            </li>
            <li><a href="/country/tanzania"><img src="{{ asset('images/flags/tanzania.png') }}"
                        alt="country">Tanzania</a>
            </li>
            <li><a href="/country/ireland"><img src="{{ asset('images/flags/ireland.png') }}"
                        alt="country">Ireland</a>
            </li>
            <li><a href="/country/uk"><img src="{{ asset('images/flags/uk.png') }}" alt="country">UK</a></li>
            <li><a href="/country/pakistan"><img src="{{ asset('images/flags/pakistan.png') }}"
                        alt="country">Pakistan</a>
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
