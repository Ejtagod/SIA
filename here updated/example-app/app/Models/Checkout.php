<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'customer_name', 
        'product_name',
        'product_variation', 
        'price', 
        'quantity',
        'address',
        'total_amount',
        'contacts', // Add other fields as needed
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
