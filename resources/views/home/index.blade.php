@extends('home.template')
@section('content')
    <div class="home-content">
        <div class="tabs flex">
            <div class="option">
                <p>New Arrivals</p>
            </div>
        </div>
        <div class="budget-vehicle">
            @foreach ($vehicle as $item)
                <x-home-vehicle-card :img="$item->thumbnail" :id="$item->id" :make="$item->make" :model="$item->model"
                    :fob="$item->fob" :currency="$item->currency" />
            @endforeach
            <a href="/stock"><button>View All</button></a>
        </div>
        <div class="tabs flex">
            <div class="option">
                <p>Discounted</p>
            </div>
        </div>
        <div class="budget-vehicle">
            @foreach ($vehicle as $item)
                <x-home-vehicle-card :img="$item->thumbnail" :id="$item->id" :make="$item->make" :model="$item->model"
                    :fob="$item->fob" :currency="$item->currency" />
            @endforeach
            <a href="/stock"><button>View All</button></a>
        </div>
        <div class="tabs flex">
            <div class="option">
                <p>Commercial</p>
            </div>
        </div>
        <div class="budget-vehicle">
            @foreach ($vehicle as $item)
                <x-home-vehicle-card :img="$item->thumbnail" :id="$item->id" :make="$item->make" :model="$item->model"
                    :fob="$item->fob" :currency="$item->currency" />
            @endforeach
            <a href="/stock"><button>View All</button></a>
        </div>
    </div>
    <x-second-sidebar />
@endsection
