<div class="item">
    <a href="/vehicle-info/{{ $id }}">
        <img src="{{ Storage::url('images/' . $img) }}" alt="stock-image">
        <h4>{{ $make }} {{ $model }}</h4>
        <p>{{ $currency }} <span>{{ $fob }}</span></p>
    </a>
</div>
