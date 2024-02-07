<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart_Product;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index() {
        return view('product')->with('products', Product::all());
    }

    public function ShoppingCart() {
        $products = Cart_Product::where('user_id', 1)->get();
        return view('ShoppingCart', [
            'products' => $products,
        ]);
    }

    public function addToCart(Request $request) {
        // Paki-improve pa to. If same item lang ang added to cart, dapat add quantity lang siya.
        $new_product = new Cart_Product;
        $new_product->user_id = 1;
        $new_product->product_id = $request->product_id;
        $new_product->quantity = 1;
        $new_product->save();
        $products = Cart_Product::where('user_id', 1)->get();
    }

    public function removeFromCart($product_id) {

    }

    public function Checkout(Request $request) {
//        dd($request->selected);
        if($request->selected === null) return back()->with('Error', 'Please select at least one item to check out.');
        $products = Cart_Product::whereIn('product_id', array_keys($request->selected))->get();
//        dd($products);
        return view('Checkout', [
            'products' => $products
        ]);
    }
}
