@extends ('layouts.altLayout')

@section ('content')
	<img id="productImage" src="../{{ $product->picture }}.jpg">
	<h1>{{ $product->productName }}</h1>
	<p>{{ $product->description }}</p>
	<p>{{ $product->price }}</p>
	<a class="addToCartButton" href="#">Add to cart</a>
@endsection