<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=["customer_id", "status", "total_price"];
    public function orderline() { 
        return $this->belongsTo(Orderline::class, 'id', 'product_id', 'quantity', 'price_each'); 
    }
}
