<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Orderline;
use Faker\DefaultGenerator;

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
        $products= Product::all();
        return view('clientside.shoppingCart', compact('cart','products'));

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
        $user = Auth::user();
        $cart= Cart::where('customer_id', '=', $user->id)->get();
        $cart->delete();
        return redirect()->route('master')->with('success',"Produs adaugat cu succes");
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
        $cart->product_name=$product->product_name;

           // $file_name=time().".".request()->$product->product_image->getClientOriginalExtension();
            //request()->$product->product_image->move(public_path('images'), $file_name);
           // $cart->product_image=$product->product_image->getFilename().'.'.$extension;
        

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
    public function checkout(Request $request)
    {

        $user = Auth::user();
        $cart= Cart::where('customer_id', '=', $user->id)->get();

        $order= new Order();
        $totalprice=18;
        foreach ($cart as $row)
        {
            $totalprice += $row->quantity*$row->price_each;
        }
        $order->customer_id=$user->id;
        $order->status="Comanda noua";
        $order->total_price=$totalprice;
        $order->country=$request->country;
        $order->city=$request->city;
        $order->address=$request->address;

        $order->save();

        $order= Order::where('customer_id', '=', $user->id)->latest()->first();
        $order_id= $order->order_id;

        foreach ($cart as $row)
        {

            $product= Product::where('id', '=', $row->product_id)->latest()->first();
            $product->quantity = $product->quantity - $row->quantity;
            $product->save();
        }

        foreach ($cart as $row)
        {

            $orderline = new Orderline();
            $orderline->order_id = $order_id;
            $orderline->product_id = $row->product_id;
            $orderline->quantity = $row->quantity;
            $orderline->price_each = $row->price_each;
            $orderline->save();

        }
        foreach ($cart as $row)
        {
            $row->delete();

        }
        return redirect()->route('master')->with('success',"Produs adaugat cu succes");

    }
}
