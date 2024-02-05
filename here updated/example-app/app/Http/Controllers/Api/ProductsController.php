<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function productInfoRetrieve()
    {
        $product = Products::all();

        if($product->count() > 0){
            return response()->json([
                'status' => 200,
                'products' => $product
            ], 200);
        }else {
            return response()->json([
                'status' => 404,
                'message' => 'No Records Found'
            ], 404);
        }
    }

    public function productInfoInput(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|string|max:255',
            'product_description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        } else {
            $product = Products::create([
                'product_name' => $request->product_name,
                'product_description' => $request->product_description,
                'price' => $request->price,
                'quantity' => $request->quantity
            ]);

            if ($product) {
                return response()->json([
                    'status' => 200,
                    'message' => "Product Create Successfully"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Something Went Wrong"
                ], 500);
            }
        }
    }
    public function productInfoShow ($id): \Illuminate\Http\JsonResponse
    {
        $product = Products::find($id);
        if($product){
            return response()->json([
                'status' => 200,
                'products' => $product
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Such Record Found'
            ], 404);
        }
    }


    public function productInfoEdit($id)
    {
        $product = Products::find($id);
        $products = Products::all();  // Assuming you need the list of products for some reason
        $slug = 'edit_product';

        return view('admin_view', ['product' => $product, 'products' => $products, 'slug' => $slug]);
    }

    public function productInfoUpdate (Request $request, Int $id): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|string|max:255',
            'product_description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric'
        ]);

        $product = Products::find($id);


        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        } else {
            if($product){
                $product->update([
                    'product_name' => $request->product_name,
                    'product_description' => $request->product_description,
                    'price' => $request->price,
                    'quantity' => $request->quantity
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Product Updated Successfully"
                ], 200);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => "No Such Record Found"
                ],500);
            }
        }
    }
}