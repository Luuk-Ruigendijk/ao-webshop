<?php 
	use App\Category;
	$categories = Category::all(); 
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>ao-webshop</title>
		<link href="{{ asset('css/webshop.css') }}" rel="stylesheet">
		<link href="{{ asset('css/w3.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
	    	<li class="w3-button navItem">da<a href="/">Homepage</a></li>
	    	<li class="w3-dropdown-hover navItem" id="shoppingCart">
		    	<span class="w3-button">Shopping Cart</span>
		    	<ul class="w3-dropdown-content w3-bar-block w3-border noListStyle">
		    		@foreach ($categories as $categorie)
		    		<li><a href="/category/{{ $categorie->id }}" class="w3-bar-item w3-button">{{ $categorie->category }}</a></li>
		    		@endforeach
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