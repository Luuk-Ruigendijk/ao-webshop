@extends ('layouts.altLayout')

@section ('content')
    <h1>{{ $category->category }}</h1>
    <div class="rowContainer">
        <div class="row">
            @foreach ($products as $product)
            <div class="productContainer col-md-3 col-sd-6">
                <div class="product">
                    <img src="../{{ $product->picture }}.jpg">
                    <a class="productList" href="/products/{{ $product->id }}">
                        {{ $product->productName }}
                    </a>
                    <p>{{ $product->price }}</p>
                    <form method="post" action="{{'/cart/store/' . $product->id }}">
                        @csrf
                        <input type="number" name="amount" value="1">
                        <button type="submit">Add to cart</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection