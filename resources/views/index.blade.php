@extends('template')
@section('content')
    <div class="tabs flex">
        <div class="option">
            <p>New Arrivals</p>
        </div>
    </div>
    <div class="budget-vehicle">
        @foreach ($newarival as $item)
            <x-home-vehicle-card :img="$item->thumbnail" :id="$item->id" :make="$item->make" :model="$item->model" :fob="$item->fob"
                :currency="$item->currency" />
        @endforeach
        <a href="/filter?category=new arrival"><button>View All</button></a>
    </div>
    <div class="tabs flex">
        <div class="option">
            <p>Discounted</p>
        </div>
    </div>
    <div class="budget-vehicle">
        @foreach ($discounted as $item)
            <x-home-vehicle-card :img="$item->thumbnail" :id="$item->id" :make="$item->make" :model="$item->model" :fob="$item->fob"
                :currency="$item->currency" />
        @endforeach
        <a href="/filter?category=discounted"><button>View All</button></a>
    </div>
    <div class="tabs flex">
        <div class="option">
            <p>Commercial</p>
        </div>
    </div>
    <div class="budget-vehicle">
        @foreach ($commercial as $item)
            <x-home-vehicle-card :img="$item->thumbnail" :id="$item->id" :make="$item->make" :model="$item->model"
                :fob="$item->fob" :currency="$item->currency" />
        @endforeach
        <a href="/filter?category=commercial"><button>View All</button></a>
    </div>
    <div class="tabs flex">
        <div class="option">
            <p>All Stock</p>
        </div>
    </div>
    <div class="budget-vehicle">
        @foreach ($allStock as $item)
            <x-home-vehicle-card :img="$item->thumbnail" :id="$item->id" :make="$item->make" :model="$item->model"
                :fob="$item->fob" :currency="$item->currency" />
        @endforeach
        <a href="/stock"><button>View All</button></a>
    </div>
@endsection
