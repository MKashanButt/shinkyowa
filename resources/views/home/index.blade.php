@extends('home.template')
@section('content')
    <div class="home-content">
        <div class="tabs flex">
            <div class="option">
                <p>Budget Vehicles</p>
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
                <p>New Vehicles</p>
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
        <div class="popular-cars">
            <h3>Popular Japanese Cars</h3>
            <hr>
            <div class="stage flex">
                <a href="/vehicle-info">
                    <div class="item">
                        <img src="https://www.carjunction.com/car_images2/106362_118296/118296-1_135x90.jpg" alt="">
                        <h4>Toyota Vitz</h4>
                    </div>
                </a>
                <a href="/vehicle-info">
                    <div class="item">
                        <img src="https://www.carjunction.com/images/coming_soon.png" alt="">
                        <h4>Toyota Vitz</h4>
                    </div>
                </a>
                <a href="/vehicle-info">
                    <div class="item">
                        <img src="https://www.carjunction.com/car_images2/106077_118011/118011-1_135x90.jpg" alt="">
                        <h4>Toyota Vitz</h4>
                    </div>
                </a>
                <a href="/vehicle-info">
                    <div class="item">
                        <img src="https://www.carjunction.com/images/coming_soon.png" alt="">
                        <h4>Toyota Vitz</h4>
                    </div>
                </a>
                <a href="/vehicle-info">
                    <div class="item">
                        <img src="https://www.carjunction.com/car_images2/100035_111970/a1_135x90.jpg" alt="">
                        <h4>Toyota Vitz</h4>
                    </div>
                </a>
                <a href="/vehicle-info">
                    <div class="item">
                        <img src="https://www.carjunction.com/images/coming_soon.png" alt="">
                        <h4>Toyota Vitz</h4>
                    </div>
                </a>
                <a href="/vehicle-info">
                    <div class="item">
                        <img src="https://www.carjunction.com/images/coming_soon.png" alt="">
                        <h4>Toyota Vitz</h4>
                    </div>
                </a>
                <a href="/vehicle-info">
                    <div class="item">
                        <img src="https://www.carjunction.com/images/coming_soon.png" alt="">
                        <h4>Toyota Vitz</h4>
                    </div>
                </a>
                <a href="/vehicle-info">
                    <div class="item">
                        <img src="https://www.carjunction.com/images/coming_soon.png" alt="">
                        <h4>Toyota Vitz</h4>
                    </div>
                </a>
                <a href="/vehicle-info">
                    <div class="item">
                        <img src="https://www.carjunction.com/car_images2/106361_118295/118295-1_135x90.jpg" alt="">
                        <h4>Toyota Vitz</h4>
                    </div>
                </a>
            </div>
        </div>
        <div class="industry-news">
            <h3>Latest Industry News</h3>
            <hr>
            <div class="stage flex">
                <div class="item">
                    <img src="https://blog.carjunction.com/wp-content/uploads/2024/01/toyota-hilux-champ-2024-2-1024x533.webp"
                        alt="">
                    <h4>2024 Toyota Hilux Champ Pickup</h4>
                    <p>2024 Toyota Hilux Champ Pickup, a new offering in the automotive world, is making waves with its
                        impressive affordability and versatility. This rugged workhorse, which debuted in Thailand, is set
                        to redefine the global pickup truck market, particularly in emerging markets. The Hilux Champ is
                        more affordable than the regular Hilux and many other pickups...</p>
                </div>
                <div class="item">
                    <img src="https://blog.carjunction.com/wp-content/uploads/2023/11/toyota-crown-fcev-toyotas-hydrogen-1024x576.webp"
                        alt="">
                    <h4>Toyota Crown Z Fuel Cell Vehicle</h4>
                    <p>Toyota Crown Z Fuel Cell Vehicle (FCEV) is a new flagship vehicle for Toyota’s hydrogen ambitions. It
                        is a high-performance, luxury vehicle that showcases the best of Toyota’s hydrogen fuel cell
                        technology. The Crown Z FCEV uses the same high-performance fuel-cell system as the Mirai, but with
                        three high-pressure hydrogen tanks instead of two. This...</p>
                </div>
            </div>
        </div>
    </div>
    <x-second-sidebar />
@endsection
