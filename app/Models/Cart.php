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
    protected $fillable=["quantity"];
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }


    public function product()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
        return $this->hasMany(Product::class, 'product_price', 'product_price');

    }
}
