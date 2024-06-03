@extends('template')
@section('content')
    <div class="filter">
        <h2>Filter Results</h2>
        <form action="filter" method="get">
            <div class="row">
                <select name="make" id="filtermake">
                    @if (Request::get('make'))
                        <option disabled selected>{{ strtoupper(Request::get('make')) }}</option>
                    @else
                        <option disabled selected>Select Make</option>
                    @endif
                    @foreach ($filteroptions['make'] as $item)
                        <option value="{{ $item->make }}">{{ strtoupper($item->make) }}</option>
                    @endforeach
                </select>
                <select name="model" id="filtermodel">
                    @if (Request::get('model'))
                        <option disabled selected>{{ strtoupper(Request::get('model')) }}</option>
                    @else
                        <option disabled selected>Select Model</option>
                    @endif
                </select>
                <select name="category" id="filtercategory">
                    @if (Request::get('category'))
                        <option disabled selected>{{ strtoupper(Request::get('category')) }}</option>
                    @else
                        <option value="" disabled selected>Select Category</option>
                        <option value="new arrival">NEW ARRIVAL</option>
                        <option value="discounted">DISCOUNTED</option>
                        <option value="commercial">COMMERCIAL</option>
                    @endif
                </select>
                <select name="fueltype" id="filterfueltype">
                    @if (Request::get('fueltype'))
                        <option disabled selected>{{ strtoupper(Request::get('fueltype')) }}</option>
                    @else
                        <option value="" disabled selected>Select Fuel Type</option>
                        <option value="petrol">PETROL</option>
                        <option value="diesel">DIESEL</option>
                        <option value="hybrid">HYBRID</option>
                    @endif
                </select>
                <select name="transmission" id="transmission">
                    @if (Request::get('transmission'))
                        <option disabled selected>{{ strtoupper(Request::get('transmission')) }}</option>
                    @else
                        <option value="" disabled selected>Select Transmission</option>
                        <option value="manual">MANUAL</option>
                        <option value="automatic">AUTOMATIC</option>
                    @endif
                </select>
                <select name="yearfrom" id="yearfrom">
                    @if (Request::get('yearfrom'))
                        <option disabled selected>{{ Request::get('yearfrom') }}</option>
                    @else
                        <option value="" disabled selected>Year From</option>
                        @if ($years)
                            @foreach ($years as $item)
                                <option value="{{ $item->year }}">{{ $item->year }}</option>
                            @endforeach
                        @endif
                    @endif
                </select>
                <select name="yearto" id="yearto">
                    @if (Request::get('yearto'))
                        <option disabled selected>{{ Request::get('yearto') }}</option>
                    @else
                        <option value="" disabled selected>Year To</option>
                        @if ($years)
                            @foreach ($years as $item)
                                <option value="{{ $item->year }}">{{ $item->year }}</option>
                            @endforeach
                        @endif
                    @endif
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
            <p class="msg">No Vehicle Present</p>
        @endif
        @foreach ($vehicles as $item)
            <x-vehicle-listing-card :img="$item->thumbnail" :id="$item->id" :make="$item->make" :model="$item->model"
                :year="$item->year" :mileage="$item->mileage" :chassis="$item->chassis" :doors="$item->doors" :transmission="$item->transmission" />
        @endforeach
    </div>
    <div class="pagination">
        @if (!$msg)
            {{ $vehicles->links('vendor.pagination.custom') }}
        @endif
    </div>
@endsection
<script src="{{ asset('js/ajax.js') }}"></script>
