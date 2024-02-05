<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){
        $user = auth()->user();
        // $cart = Cart::where('user_id', $user->id);
        // $cart = Cart::all();
        $checkout = Checkout::all();
        return view('Checkout', compact('checkout'));
    }
    
}
