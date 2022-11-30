<?php
namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Product;
use Illuminate\Http\Request;

class DiscountController extends Controller
{

        public function index()
    {
        $produse = Product::all();
        $discounts = Discount::orderBy('new_price')->get();
        
        return view('index',compact('produse','discounts'));
    }

}
