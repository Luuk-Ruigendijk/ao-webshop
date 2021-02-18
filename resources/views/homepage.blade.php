@extends ('layouts.altLayout')

@section ('content')

//make data optional. add javascript if statement for cart. only show if something other than the optional variable is shown


<?php //$data = $request->session()->all();
use Illuminate\Support\Facades\Auth;
     
    if (isset($_SESSION["cart"])) {
        $cartItems = $_SESSION["cart"];
        $cartExists = true;
    }
    else {
        $cartItems = [];
    }
?>
    <p><b>Start typing a name in the input field below:</b></p>

    <p>Suggestions: <span id="txtHint"></span></p>

    <form>
        First name: <input type="text" onkeyup="showHint(this.value)">
    </form>
    <h1><?php// echo($data); ?></h1>

<?php 
    if (Auth::check()) {
        ?><h1>You are logged in, I think...</h1><?php
    } 
    else {
        ?><h1>You aren't logged in, I think...</h1><?php
    }
?>

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