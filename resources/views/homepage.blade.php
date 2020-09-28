@extends ('layouts.altLayout')

@section ('content')
    @foreach ($products as $product)
    <div class="product">
        <img src="{{ $product->picture }}.jpg">
        <a class="productList" href="/products/{{ $product->id }}">{{ $product->productName }}</a>
        <p>{{ $product->price }}</p>
        <a class="addToCartButton" href="#">Add to cart</a>
    </div>
    
    @endforeach
@endsection