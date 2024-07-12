<div class="item">
    <a href="/vehicle-info/{{ $id }}">
        <img src="{{ env('STOCK_IMG_LINK') . $img }}" alt="stock-image">
        <h4>{{ strtoupper($make) }} {{ strtoupper($model) }}</h4>
        @if ($fob == 'Inquiry')
            <p><span>{{ $fob }}</span></p>
        @else
            <p>{{ $currency }} <span>{{ $fob }}</span></p>
        @endif
    </a>
</div>
