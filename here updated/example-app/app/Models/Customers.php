<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $primarykey = 'customer_id';

    protected $fillable = [
        'product_id',
        'customer_name',
        'address',
        'contacts'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
