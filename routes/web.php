<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
	$name = request('name');

	return view('test', [
		'name' => $name
	]);
});*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
	$categories = App\Category::all();
	$products = App\Product::all();

    return view('homepage', [
    	'categories' => $categories,
    	'products' =>$products
    ]);
});

Route::get('/homepage/noFilter', 'CategoriesController@showAll');

Route::get('/category/{categoryId}', 'CategoriesController@filter');

Route::get('products/{productId}', 'ProductController@show');

/*Route::get('/posts/{post}', function ($post) {
	$posts = [
		'my-first-post' => 'hello, this is my first post',
		'my-second-post' => 'two posts already? wow!'
	];

	if (! array_key_exists($post, $posts)) {
		abort(404, 'sorry, that post does not exist');
	}

	return view('post', [
		'post' => $posts[$post]
	]);
});*/

Route::get('/posts/{post}', 'PostsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
