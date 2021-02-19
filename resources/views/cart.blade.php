@extends ('layouts.cartlessLayout')

@section ('content')

//make data optional. add javascript if statement for cart. only show if something other than the optional variable is shown


<?php //$data = $request->session()->all();
use Illuminate\Support\Facades\Auth;
     
    $cartExists = false;
    // session_start();
    if (isset($_SESSION["cart"])) {
        $cartItems = $_SESSION["cart"];
        $cartExists = true;
    }
    else {
        $cartItems = [];
    }
?>
<?php /*
    if (Auth::check()) {
        ?><h1>You are logged in, I think...</h1><?php
    } 
    else {
        ?><h1>You aren't logged in, I think...</h1><?php
    }*/
?>

<div>
    <div>
        <?php 
        if ($cartExists==true) { ?>
            @foreach ($cartItems as $cartItem)
                <div style="border-style: solid; margin: 5px; text-align: center; width: 100%;">
                   <div><a class="w3-bar-item w3-button" href="/products/{{ $cartItem[0] }}"> {{ $cartItem[1] }}</a>
                    <p>{{ $cartItem[2] }}</p>
                    <input type="number" name="number" value="{{ $cartItem[2] }}">
                    <p>{{ $cartItem[3] * $cartItem[2] }}</p>
                    <a href="/cart/removeItem/{{ $cartItem[0] }}">remove</a></div> 
                </div>
            @endforeach 
        <button>Go to checkout</button>         
        <?php }
        else {
            ?><p>yolo</p><?php
        }
        ?>
    </div>
</div>
    
@endsection