<?php

namespace App;

use App\Product;

class Cart
{
    private $items;
    /*
    creates the cart class
    */
    public function __construct(Request $request)
    {
        if ($request->session()->has('cart')) {
            //cart bestaat al in sessie. haal op.
            $this->items = $request->session('cart');
        } else {
           // maak lege cart en voeg toe aan sessie
            $this->items = [];
            saveCartToSession();
        }

        //$this->addItem($productId, $amount);
    }

    public function saveCartToSession() {
        $request->session()->put('cart', $this->items);
    }

    public function getAllItems()
    {
        return $items;
    }

    public function addItem($productId, $amount)
    {
        $product = Product::where('id', $productId)->first();
        $product_name = $product->productName;
        $product_price = $product->price;
        foreach ($this->items as $cartItem) {
            if ($cartItem[0]==$productId) {
                $amount = $amount + $cartItem[2];
                $this->removeItem($productId);
            }
        }
        $this->items[]=[$productId, $product_name, $amount, $product_price];
        $this->saveSession();
    }

    public function GetAllItems()
    {
        
    }

    public function changeItemAmount($productId, $amount)
    {

    }

    public function removeItem($productId)
    {
        $counter = 0;
        //$fullCart = $_SESSION['cart'];
        $product = Product::where('id', $productId)->first();
        foreach ($this->items as $cartItem) {
            if ($cartItem[0]==$productId) {
                // $amount = $amount + $cartItem[2];
                //unset($this->items[$counter]);
                array_splice($this->items, $counter, 1);
                //$_SESSION['cart'] = $fullCart;
                break;
            }
            $counter++;
        }
        $this->saveCartToSession();
    }

    public function dropCart()
    {
        $this->items = [];
        $this->saveCartToSession();
    }
//maak global variable van hoeveelheid in cart. als er niks (0) in de cart zit, laat dan niks laden. als er meer dan 0 in zit, laad dan de rest. zorg dat de dingen die ingeladen worden ook global variables zijn zodat ze geen errors geven.    
}
