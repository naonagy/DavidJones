<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;
    /**
     * Get the user that owns the Cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    protected $fillable=["product_id", "customer_id", "quantity", "price_each"];
    
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }


    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
