@extends ('layouts.altLayout')

@section ('content')
    <p><b>Start typing a name in the input field below:</b></p>

    <p>Suggestions: <span id="txtHint"></span></p>

    <form>
        First name: <input type="text" onkeyup="showHint(this.value)">
    </form>
    <div class="row">
        @foreach ($products as $product)
        <div class="product col-md-3 col-sd-6">
            <img src="{{ $product->picture }}.jpg">
            <a class="productList" href="/products/{{ $product->id }}">{{ $product->productName }}</a>
            <p>{{ $product->price }}</p>
            <form method="post" action="/../{{ $product->id }}">
                <input type="number" name="amount" value="1">
                <button type="submit">Add to cart</button>
            </form>
        </div>
        @endforeach
    </div>
    
@endsection