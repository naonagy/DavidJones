<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderline extends Model
{
    use HasFactory;
    protected $fillable=["order_id", "product_id", "quantity", "price_each"];
    public $timestamps = false;
    protected $primaryKey = 'orderline_id';
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
