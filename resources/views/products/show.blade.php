@extends ('layouts.altLayout')

@section ('content')
	<img id="productImage" src="../{{ $product->picture }}.jpg">
	<h1>{{ $product->productName }}</h1>
	<p>{{ $product->description }}</p>
	<p>{{ $product->price }}</p>
	<form method="post" action="{{'/cart/store/' . $product->id }}">
    	@csrf
    	<input type="number" name="amount" value="1">
    	<button type="submit">Add to cart</button>
    </form>
@endsection