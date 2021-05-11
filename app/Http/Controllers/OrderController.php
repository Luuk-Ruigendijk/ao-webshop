<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

use App\Product;

use App\User;

use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = Order::create([
            'user_id' => Auth::user()->id,
            'total' => 3
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function showAll()
    {
        $user = Auth::user();
        $orders = $user->orders;
        //$products = Product::all()->where('categoryId', $id);
        return view('orders', ['orders' => $orders]);
    }

    public function show()
    {
        $user = Auth::user();
        $orders = $user->orders;
        $order = Order::all()->where('id', $id);
        //$products = Product::all()->where('categoryId', $id);
        return view('orders', ['orders' => $orders]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
