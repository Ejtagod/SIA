<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_Product extends Model
{
    use HasFactory;
    protected $table = 'cart_products';
    protected $foreignKey = 'product_id';
    protected $with = ['product'];

    public function Product() {
        return $this->hasOne(Product::class, 'product_id', 'product_id');
    }
}
