<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'order_id',
        'first_name',
        'last_name',
        'phone',
        'street_address',
        'state',
        'zip_code',
    ];

    function order()
    {
        return $this->belongsTo(Order::class);
    }

    function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}