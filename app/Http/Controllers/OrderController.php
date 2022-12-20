<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Orderline;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::latest()->paginate(10);
        return view('workspace.orders.orders',compact('orders'))->with('i',(request()->input('page',1)-1*10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('workspace.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($order_id)
    {
        $order = Order::findOrFail($order_id);
        $orderline=Orderline::where('order_id', '=', $order_id)->get();
         return view('workspace.orders.show', compact('order', 'orderline'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($order_id)
    {
        $order = Order::findOrFail($order_id);
        $orderline=Orderline::where('order_id', '=', $order_id)->get();
         return view('workspace.orders.edit', compact('order', 'orderline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, $order_id)
    {
        $order= Order::find($request->hidden_id);

        $order->status=$request->status;
        $order->country=$request->country;
        $order->city=$request->city;
        $order->address=$request->address;

        $order->save();

        $orderline= Orderline::where('order_id', '=', $order->order_id)->get();

        foreach ($orderline as $row)
        {

            $orderline->product_id = $row->product_id;
            $orderline->quantity = $row->quantity;
            $orderline->price_each = $row->price_each;
            $orderline->each->save();

        }

        return redirect()->route('orders.index')->with('success',"Produs adaugat cu succes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($order_id)
    {
        $order=order::findOrFail($order_id);
        $orderline= Orderline::where('order_id', '=', $order_id)->get();
        $orderline->each->delete();
        
        $order->delete();

        return redirect()-> route('orders.index')->with('success',"Produs sters cu succes");
   
    }
    public function myorders()
    {
        $user = Auth::user();
        $orders = Order::whereBelongsTo($user)->paginate(10);
        return view('clientside.myorders', compact('orders'))->with('i',(request()->input('page',1)-1*10));
    }

    public function showmyorder($order_id)
    {
        $order = Order::findOrFail($order_id);
        $orderline=Orderline::where('order_id', '=', $order_id)->get();
         return view('clientside.showmyorders', compact('order', 'orderline'));
    }

}
