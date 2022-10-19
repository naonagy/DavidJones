<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class RucsacuriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data= Product::where('product_category','=', 'Rucsacuri')->paginate(9);
        return view('clientside.rucsacuri',compact('data'))->with('i',(request()->input('page',1)-1*9));
        
    }

   
   
}
