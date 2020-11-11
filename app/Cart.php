<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /*
    creates the cart class
    */
    public function __construct()
    {
        $product=[];
    }
//maak global variable van hoeveelheid in cart. als er niks (0) in de cart zit, laat dan niks laden. als er meer dan 0 in zit, laad dan de rest. zorg dat de dingen die ingeladen worden ook global variables zijn zodat ze geen errors geven.    
}
