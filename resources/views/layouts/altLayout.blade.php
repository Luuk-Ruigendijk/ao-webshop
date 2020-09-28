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
	</head>
	<body>
		<ul id="navbar">
			<li class="w3-dropdown-hover navItem">
		    	<span class="w3-button">Categories</span>
		    	<ul class="w3-dropdown-content w3-bar-block w3-border">
		    		@foreach ($categories as $categorie)
		    		<li><a href="/category/{{ $categorie->id }}" class="w3-bar-item w3-button">{{ $categorie->category }}</a></li>
		    		@endforeach
		    	</ul>
	    	</li>
	    	<li class="w3-button navItem">da<a href="/">Homepage</a></li>
	    </ul>	
		@yield ('content')
	</body>
</html>