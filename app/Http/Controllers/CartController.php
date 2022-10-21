<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Http\Request;

use App\Models\User;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
/**
 * Get the user that owns the CartController
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
    public function index()
    {
        $user = Auth::user();
        $cart = Cart::whereBelongsTo($user)->get();

        return view('clientside.shoppingCart', compact('cart'));

    }

        /**
     * Get the user that owns the CartController
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request, $id)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
    public function addToCart(Request $request)
    {

        $user = Auth::user();
        $cart= new Cart();
        $id=$request->id;
        $product= Product::find($id);
        
        $cart->customer_id=$user->id;
        $cart->product_id=$product->id;
        $cart->price_each=$product->product_price;
        $cart->quantity=$request->quantity;

        $cart->save();

        return redirect()->route('shoppingCart.index')->with('success',"Produs adaugat cu succes");
        
    }

    public function removeCart(Request $request)
    {
        $cart_id=$request->cart_id;
        $cart= Cart::where('cart_id', '=', $cart_id);
        $cart->delete();
        return redirect()->route('shoppingCart.index');
    }
}
