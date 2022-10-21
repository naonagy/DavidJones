<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=["product_name", "description", "product_category", "product_image", "quantity", "product_price", "product_color"];
    
    public function Cart()
    {
        return $this->belongsToMany(Cart::class);
    }
}
