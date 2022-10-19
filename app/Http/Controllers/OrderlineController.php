<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderlineController extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'customer_id'=>"customer_id",
            'status'=>"required",
            'total_price' => "required",
        ]);

        $order= new Order();
        
        $order->customer_id=$request->customer_id;
        $order->status=$request->status;
        $order->total_price=$request->total_price;
        $order->save();

        return redirect()-> route('orders.index')->with('success',"Comanda a fost adaugata cu succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('workspace.orders.show', compact("order"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('workspace.orders.edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'customer_id'=>"customer_id",
            'status'=>"required",
            'total_price' => "required",
        ]);



        $order=Order::find($request->hidden_id);

        $order->customer_id=$request->customer_id;
        $order->status=$request->status;
        $order->total_price=$request->total_price;

        $order->save();

        return redirect()-> route('products.index')->with('success',"Comanda modificata cu succes");
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order=Order::find($id);
        $order->delete();
        return redirect()-> route('orders.index')->with('success',"Comanda stearsa cu succes");
   
    }
}

