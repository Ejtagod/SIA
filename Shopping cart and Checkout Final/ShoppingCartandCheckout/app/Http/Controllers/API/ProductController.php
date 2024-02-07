<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        return view('product')->with('product', Product::all());
    }

    public function ShoppingCart()
    {   
        return view('ShoppingCart');
    }

    public function addToCart(Product $product)
    {
        $ShoppingCart = session()->get('ShoppingCart');


        if(!$ShoppingCart){
            $ShoppingCart = [
                $product->product_id =>[
                    'product_name'      => $product->product_name,
                    'quantity'          => 1,
                    'price'             => $product->price,
                ]
            ];
            
            session()->put('ShoppingCart', $ShoppingCart);
            return redirect()->route('ShoppingCart')->with('success', "Added to Cart");
        }

        if(isset($ShoppingCart[$product->product_id])){
            $ShoppingCart[$product->product_id]['quantity']++;
            session()->put('ShoppingCart', $ShoppingCart);
            return redirect()->route('ShoppingCart')->with('success', "Added to Cart");
        }

        $ShoppingCart[$product->product_id] = [
            'product_name'      => $product->product_name,
            'quantity'          => 1,
            'price'             => $product->price,
        ];

        session()->put('ShoppingCart', $ShoppingCart);

        return redirect()->route('ShoppingCart')->with('success', "Added to Cart");
    }

    public function removeFromCart($product_id)
    {

    }
}