<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'customer_name', 
        'email',
        'contacts', 
        'address', 
        'product_name',
        'price',
        'quantity',
        'images',
        'product_id',
        'user_id' // Add other fields as needed
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
