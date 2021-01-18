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

Route::get('/', 'ProductController@index');

Route::get('/homepage/noFilter', 'CategoriesController@showAll');

Route::get('/category/{categoryId}', 'CategoriesController@filter');

Route::get('/products/{productId}', 'ProductController@show');

Route::post('/cart/store/{productId}', 'CartController@store');

Route::post('/cart/removeItem/{productId}', 'CartController@deleteItem');

Route::get('/posts/{post}', 'PostsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');