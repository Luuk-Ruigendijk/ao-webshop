<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
	public $timestamps = false;
	protected $fillable = ['order_id', 'product_id', 'amount'];

    public function orderProduct()
    {
    	return $this->belongsTo('App\OrderProduct');
    }
}
