<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Discount;

//use Illuminate\Support\Facades\DB;

class ClproductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discounts = Discount::all();
        $data=Product::latest()->paginate(9);
        return view('clientside.products', compact('discounts', 'data'))->with('i',(request()->input('page',1)-1*9));
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
    public function store(Request $request)
    {
        //$data= Product::where('product_category','=', 'Genti')->paginate(9);
        //return view('clientside.products',compact('data'))->with('i',(request()->input('page',1)-1*9));
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
    public function show($id)
    {
        
        $discounts = Discount::where('product_id', '=', $id)->get();
        return view('clientside.show', ['product'=> Product::findOrFail($id)],compact('discounts'));
        //return 'test';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
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
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */


    public function destroy()
    {
        //$data= Product::where('product_category','=', 'Genti')->paginate(9);
        //return view('clientside.genti',compact('data'))->with('i',(request()->input('page',1)-1*9));
    }
    public function categorie($category)
    {
        $discounts = Discount::all();
        $data= Product::where('product_category','=', $category)->paginate(9);
        return view('clientside.products',compact('discounts', 'data'))->with('i',(request()->input('page',1)-1*9));
    }
    public function discount()
    {
        $produse = Product::all();
        $discounts = Discount::orderBy('new_price')->get();
        return view('index',compact('produse','discounts'));
    }
    
    

}
