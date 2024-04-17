@extends('stock.template')
@section('content')
    <div class="stock-content">
        <div class="filter">
            <h2>Filter Results</h2>
            <form action="" method="get">
                <div class="row">
                    <select name="make" id="make">
                        <option value="" disabled selected>Select Make</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Honda">Honda</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                    </select>
                    <select name="model" id="model">
                        <option value="" disabled selected>Select Model</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Honda">Honda</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                    </select>
                    <select name="category" id="category">
                        <option value="" disabled selected>Select Model</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Honda">Honda</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                    </select>
                    <select name="fueltype" id="fueltype">
                        <option value="" disabled selected>Fuel Type</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Honda">Honda</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                    </select>
                    <select name="transmission" id="transmission">
                        <option value="" disabled selected>Transmission</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Honda">Honda</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                    </select>
                    <select name="color" id="color">
                        <option value="" disabled selected>Color</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Honda">Honda</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                    </select>
                    <select name="yearfrom" id="yearfrom">
                        <option value="" disabled selected>Year From</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Honda">Honda</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                    </select>
                    <select name="yearto" id="yearto">
                        <option value="" disabled selected>Year To</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Honda">Honda</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                    </select>
                </div>
                <button type="submit">Filter</button>
            </form>
        </div>
        <div class="sort-filter flex">
            <p>Total number of vehicles: <span>{{ $totalvehicles }}</span></p>
            <form action="">
                <label for="sort">Sort By:</label>
                <select name="sort" id="sort">
                    <option value="" disabled selected>Default</option>
                    <a href="/stock?sortBy=hightolow">
                        <option value="high to low">High to Low</option>
                    </a>
                    <a href="/stock?sortBy=lowtohigh">
                        <option value="low to high">Low to High</option>
                    </a>
                </select>
            </form>
        </div>
        <div class="listing">
            @if ($msg)
                <p>{{ $msg }}</p>
            @endif
            @foreach ($vehicles as $item)
                <x-vehicle-listing-card :img="$item->thumbnail" :id="$item->vehicle_id" :make="$item->make" :model="$item->model"
                    :year="$item->year" :mileage="$item->mileage" :engine="$item->engine" :doors="$item->doors" :transmission="$item->transmission" />
            @endforeach
        </div>
        <div class="pagination">
            @if (!$msg)
                <div class="btn">
                    <button><i class='bx bx-chevron-left'></i></button>
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button><i class='bx bx-chevron-right'></i></button>
                </div>
            @endif
            {{-- {{ $vehicles->links() }} --}}
        </div>
    </div>
    <x-second-sidebar />
@endsection
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
