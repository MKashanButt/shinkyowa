<aside class="main-sidebar">
    <div class="search">
        <h2 class="heading">Search</h2>
        <form action="get">
            <div class="item">
                <label for="make">Make:</label>
                <select name="make" id="make">
                    <option disabled selected>Select Make</option>
                    @foreach ($make as $item)
                        <option value="{{ $item->make }}">{{ $item->make }}</option>
                    @endforeach
                </select>
            </div>
            <div class="item">
                <label for="model">Model:</label>
                <select name="model" id="model">
                    <option disabled selected>Select Model</option>
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
                    <span>Toyota(15)</span></a></li>
            <li><a href="/"><img src="https://www.carjunction.com/make_image/27/Nissan.gif" alt="">
                    <span>Nissan(12)</span></a></li>
            <li><a href="/"><img src="https://www.carjunction.com/make_image/11/Honda.gif" alt="">
                    <span>Honda(5)</span></a></li>
            <li><a href="/"><img src="https://www.carjunction.com/make_image/22/Mazda.gif" alt="">
                    <span>Mazda(78)</span></a></li>
            <li><a href="/"><img src="https://www.carjunction.com/make_image/47/Suzuki.gif" alt="">
                    <span>Suzuki(46)</span></a></li>
            <li><a href="/make/BMW"><img src="https://www.shinkyowa.com/images/brand12.png" alt="">
                    <span>BMW(89)</span></a></li>
            <li><a href="/"><img src="https://www.carjunction.com/make_image/14/Isuzu.gif" alt="">
                    <span>Isuzu(4)</span></a></li>
            <li><a href="/"><img src="https://www.carjunction.com/make_image/49/Hino.gif" alt="">
                    <span>Hino(40)</span></a></li>
            <li><a href="/"><img src="https://www.carjunction.com/make_image/26/Mitsubishi.gif" alt="">
                    <span>Mitsubishi(10)</span></a></li>
            <li><a href="/"><img src="https://www.shinkyowa.com/images/brand8.png" alt="">
                    <span>Volkswagen(3)</span></a></li>
        </ul>
    </div>
    <div class="type">
        <h2 class="heading">Search By Type</h2>
        <ul>
            <li><a href="/type/"><img src="https://www.carjunction.com/category_image/6/Hatchback-Icn-Blue.png"
                        alt=""> <span>Hatchback(15)</span></a></li>
            <li><a href="/type/coupe"><img src="https://www.carjunction.com/category_image/2/Sedan-Icn-Blue.png"
                        alt=""> <span>Sedan(12)</span></a></li>
            <li><a href="/"><img src="https://www.carjunction.com/category_image/7/Trucks-Icn-Blue.png"
                        alt=""> <span>Truck(5)</span></a></li>
            <li><a href="/"><img src="https://www.carjunction.com/category_image/8/Vans-Icn-Blue.png"
                        alt=""> <span>Van(78)</span></a></li>
            <li><a href="/"><img src="https://www.carjunction.com/category_image/1/Suv-Icn-Blue.png"
                        alt=""> <span>Suv(46)</span></a></li>
            <li><a href="/"><img src="https://www.carjunction.com/category_image/52/Pickups-Icn-Blue.png"
                        alt=""> <span>Pickup(89)</span></a></li>
            <li><a href="/"><img src="https://www.carjunction.com/category_image/3/Wagons-Icn-Blue.png"
                        alt=""> <span>Wagon(4)</span></a></li>
            <li><a href="/"><img src="https://www.carjunction.com/category_image/4/Bus-Icn-Blue.png"
                        alt=""> <span>Buses(40)</span></a></li>
            <li><a href="/"><img src="https://www.carjunction.com/category_image/4/Bus-Icn-Blue.png"
                        alt=""> <span>Mini Buses(10)</span></a></li>
        </ul>
    </div>
</aside>
<script>
    // Add event listener to the 'make' dropdown
    document.getElementById('make').addEventListener('change', function() {
        var make = this.value; // Get the selected make

        // Make an AJAX request to fetch models based on the selected make
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/get-models?make=' + make, true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Parse the response JSON
                var models = JSON.parse(xhr.responseText);

                // Populate the 'model' dropdown with fetched models
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
