<?php

namespace App\Http\Controllers;

use App\Cart;

use Illuminate\Http\Request;

class CartController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $amount = $request->input('amount');
        // session_start();
        // if (isset($_SESSION["cart"])) {
        //     $cart = $_SESSION["cart"];
        // }
        // else {
        //     $cart = [];
        // }
        // $cart[]= ['id' => $id, 'amount'=> $amount];
        // $_SESSION["cart"] = $cart;
        $cart = new Cart();
        $cart->addItem($id, $amount);
        
        return back();
    }

    public function retrieveData(Request $request)
    {
        $data = $request->session()->all();
    }

    public function deleteItem($id){
        $cart = new Cart();
        $cart->removeItem($id);
        return redirect()->back();
    }


    //$items = [];

// items declaren als array
    //constructie:
    //als de sessie al items bevat dan haal die items op en zet ze in de items array
    
    //private methodes:
    //saveSession

    //publieke methodes:
    //addItem; productId en Amount meegeven
        //process items array (if item exists, only add amount to the old amount)
    //GetAllItems; niks meegeven
    //changeItemAmount; ProductId en amount-change meegeven
    //removeItem; productId meegeven
    //dropCart; niks meegeven
    //


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
