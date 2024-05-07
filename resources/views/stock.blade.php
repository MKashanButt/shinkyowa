@extends('template')
@section('content')
    <div class="filter">
        <h2>Filter Results</h2>
        <form action="" method="get">
            <div class="row">
                <select name="make" id="filtermake">
                    <option value="" disabled selected>Select Make</option>
                    @foreach ($filteroptions['make'] as $item)
                        <option value="{{ $item->make }}">{{ $item->make }}</option>
                    @endforeach
                </select>
                <select name="model" id="filtermodel">
                    <option value="" disabled selected>Select Model</option>
                </select>
                <select name="category" id="filtercategory">
                    <option value="" disabled selected>Select Category</option>
                    <option value="commercial">New Arrival</option>
                    <option value="commercial">Discounted</option>
                </select>
                <select name="fueltype" id="filterfueltype">
                    <option value="" disabled selected>Select Fuel Type</option>
                </select>
                <select name="transmission" id="transmission">
                    <option value="" disabled selected>Select Transmission</option>
                    <option value="manual">Manual</option>
                    <option value="automatic">Automatic</option>
                </select>
                <select name="yearfrom" id="yearfrom">
                    <option value="" disabled selected>Year From</option>
                </select>
                <select name="yearto" id="yearto">
                    <option value="" disabled selected>Year To</option>
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
            <p class="msg">{{ $msg }}</p>
        @endif
        @foreach ($vehicles as $item)
            <x-vehicle-listing-card :img="$item->thumbnail" :id="$item->id" :make="$item->make" :model="$item->model"
                :year="$item->year" :mileage="$item->mileage" :engine="$item->engine" :doors="$item->doors" :transmission="$item->transmission" />
        @endforeach
    </div>
    <div class="pagination">
        @if (!$msg)
            {{ $vehicles->links('vendor.pagination.custom') }}
        @endif
    </div>
@endsection
<script src="{{ asset('js/ajax.js') }}"></script>
