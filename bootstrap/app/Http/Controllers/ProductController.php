<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::latest()->paginate(10);
        return view('workspace.products.products',compact('data'))->with('i',(request()->input('page',1)-1*10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('workspace.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => "required",
            'description' => "required",
            'product_category'=>"required",
            'quantity'=>"required",
            'product_image'=>"image|mimes:jpg,png,jpeg",
            'product_price' => "required",
            'product_color' => "required"
        ]);

        $product= new Product();
        
        $product->product_name=$request->product_name;
        $product->description=$request->description;
        $product->quantity=$request->quantity;
        $product->product_category=$request->product_category;

        if($request->product_image!=""){

            $file_name=time().".".request()->product_image->getClientOriginalExtension();
            request()->product_image->move(public_path('images'), $file_name);
            $product->product_image=$file_name;
        }
        $product->product_price=$request->product_price;
        $product->product_color=$request->product_color;



        $product->save();

        return redirect()-> route('products.index')->with('success',"Produs adaugat cu succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('workspace.products.show', compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('workspace.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => "required",
            'description' => "required",
            'quantity'=>"required",
            'product_category'=>"required",
            'product_image'=>"image|mimes:jpg,png,jpeg",
            'product_price' => "required",
            'product_color' => "required"
            ]);
        $product_image=$request->hidden_product_image;



        $product=Product::find($request->hidden_id);

        $product->product_name=$request->product_name;
        $product->description=$request->description;
        $product->quantity=$request->quantity;
        $product->product_category=$request->product_category;
        if(!empty($request->product_image)){

            $file_name=time().".".request()->product_image->getClientOriginalExtension();
            request()->product_image->move(public_path('images'), $file_name);
            $product->product_image=$file_name;
        }

        $product->product_price=$request->product_price;
        $product->product_color=$request->product_color;


        $product->save();
        return redirect()-> route('products.index')->with('success',"Produs modificat cu succes");
  
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function destroy($id)
    {
       $product=Product::find($id);
       $product->delete();
       return redirect()-> route('products.index')->with('success',"Produs sters cu succes");
  
    }
}
