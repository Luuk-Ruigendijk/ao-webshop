<?php

namespace App\Http\Controllers;

use App\Category;

use App\Product;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
	public function showAll(){
		$categories = Category::get();
		return view('categories.showAll', ['categories' => $categories]);
	}

    public function filter($id){
    	$category = Category::find($id);
    	$products = Product::all()->where('categoryId', $id);
    	return view('categories.filter', ['category' => $category, 'products' => $products]);
    }
}
