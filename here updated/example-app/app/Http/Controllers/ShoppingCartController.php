<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Products;

class ShoppingCartController extends Controller
{
    public function shoppingcart(){
        $user = auth()->user();
        // $cart = Cart::where('user_id', $user->id);
        // $cart = Cart::all();
        $cart = Cart::all();
        return view('ShoppingCart', compact('cart'));
    }
}
