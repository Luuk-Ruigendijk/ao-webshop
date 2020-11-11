@extends ('layouts.altLayout')

@section ('content')

//make data optional. add javascript if statement for cart. only show if something other than the optional variable is shown


<?php $data = $request->session()->all(); ?>
    <p><b>Start typing a name in the input field below:</b></p>

    <p>Suggestions: <span id="txtHint"></span></p>

    <form>
        First name: <input type="text" onkeyup="showHint(this.value)">
    </form>
    <h1><?php echo($data); ?></h1>
    <div class="rowContainer">
        <div class="row">
            @foreach ($products as $product)
            <div class="productContainer col-md-3 col-sd-6">
                <div class="product">
                    <img src="{{ $product->picture }}.jpg">
                    <a class="productList" href="/products/{{ $product->id }}">
                        {{ $product->productName }}
                    </a>
                    <p>{{ $product->price }}</p>
                    <form method="get" action="/cart/store/{{ $product->id }}">
                        <input type="number" name="amount" value="1">
                        <button type="submit">Add to cart</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    
@endsection