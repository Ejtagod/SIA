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
//        dd($products[0]->product);
        return view('ShoppingCart', [
            'products' => $products,
        ]);
    }

/*    public function addToCart(Product $product) {
        $ShoppingCart = session()->get('ShoppingCart');

        if(!$ShoppingCart) {
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

        if(isset($ShoppingCart[$product->product_id])) {
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
    }*/

    public function addToCart(Request $request) {
//        dd($request->product_id);
        $new_product = new Cart_Product;
        $new_product->user_id = 1;
        $new_product->product_id = $request->product_id;
        $new_product->quantity = 1;
        $new_product->save();
        $products = Cart_Product::where('user_id', 1)->get();
//        dd($products);
//        return redirect(route('ShoppingCart', $products));
    }

    public function removeFromCart($product_id) {

    }
}
