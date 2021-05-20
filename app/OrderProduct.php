<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    public function orderProduct()
    {
    	return $this->belongsTo('App\OrderProduct');
    }
}
