<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'unit_amount',
        'total_amount',
    ];

    function order()
    {
        return $this->belongsTo(Order::class);
    }

    function product()
    {
        return $this->belongsTo(Product::class);
    }
}