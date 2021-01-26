<?php

namespace App;

use App\Product;

class Cart
{
    private $items;
    /*
    creates the cart class
    */
    public function __construct()
    {
        if (isset($_SESSION["cart"])) {
            //cart bestaat al in sessie. haal op.
            $this->items = $_SESSION['cart'];
        } else {
           // maak lege cart en voeg toe aan sessie
            $this->items = [];
            $this->saveSession(); 
        }

        //$this->addItem($productId, $amount);
    
    }

    private function saveSession()
    {
    	$_SESSION['cart'] = $this->items;
    }

    public function addItem($productId, $amount)
    {
        $product = Product::where('id', $productId)->first();
        $product_name = $product->productName;
        $product_price = $product->price;
        foreach ($_SESSION['cart'] as $cartItem) {
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
        foreach ($_SESSION['cart'] as $cartItem) {
            if ($cartItem[0]==$productId) {
                // $amount = $amount + $cartItem[2];
                //unset($this->items[$counter]);
                array_splice($this->items, $counter, 1);
                //$_SESSION['cart'] = $fullCart;
                break;
            }
            $counter++;
        }
        $this->saveSession();
    }

    public function dropCart()
    {
        $this->items = [];
        session_destroy();
    }
//maak global variable van hoeveelheid in cart. als er niks (0) in de cart zit, laat dan niks laden. als er meer dan 0 in zit, laad dan de rest. zorg dat de dingen die ingeladen worden ook global variables zijn zodat ze geen errors geven.    
}
