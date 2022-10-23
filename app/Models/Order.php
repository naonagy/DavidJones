<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Order extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'order_id';
    protected $fillable=["customer_id", "status", "total_price", "country", "city", "address"];
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }
    public function orderlines() { 
        return $this->hasMany(Orderline::class); 
    }
}
