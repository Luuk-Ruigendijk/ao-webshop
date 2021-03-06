<?php 
	use App\Category;
	use Illuminate\Http\Request;
	$categories = Category::all();
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

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ao-webshop</title>
		<link href="{{ asset('css/w3.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link href="{{ asset('css/webshop.css') }}" rel="stylesheet">
	</head>
	<body>
		<ul id="navbar">
			<li class="w3-dropdown-hover navItem">
		    	<span class="w3-button">Categories</span>
		    	<ul class="w3-dropdown-content w3-bar-block w3-border noListStyle">
		    		@foreach ($categories as $categorie)
		    		<li><a href="/category/{{ $categorie->id }}" class="w3-bar-item w3-button">{{ $categorie->category }}</a></li>
		    		@endforeach
		    	</ul>
	    	</li>
	    	<li class="w3-dropdown-hover navItem grayBackground">
	    		<a href="/">Homepage</a>
	    	</li>
	    	<li class="w3-dropdown-hover navItem grayBackground">
	    		<a href="/home">Account</a>
	    	</li>
	    	<li class="w3-dropdown-hover navItem grayBackground" id="shoppingCart">
		    	<span class="w3-button">Shopping Cart</span>
		    	<ul class="w3-dropdown-content w3-bar-block w3-border noListStyle">
		    		<?php 
		    		if ($cartExists==true) { ?>
		    		@foreach ($cartItems as $cartItem)
					<li><a class="w3-bar-item w3-button" href="/products/{{ $cartItem[0] }}">
                        {{ $cartItem[1] }}
                    </a><p>{{ $cartItem[2] }}</p><p>{{ $cartItem[3] * $cartItem[2] }}</p><a href="/cart/removeItem/{{ $cartItem[0] }}">remove</a></li>
		    		@endforeach 
		    		<a href="/cart">Go to checkout</a>
					<?php
		    		}
		    		else {
		    			?><p>Add something to your cart before you check out</p><?php
		    		}
		    		?>
		    	</ul>
	    	</li>
	    </ul>	
		@yield ('content')
		<script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>