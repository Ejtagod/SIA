<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function customerInfoRetrieve()
    {
        $customer = Customers::all();

        if($customer->count() > 0){
            return response()->json([
                'status' => 200,
                'customers' => $customer
            ], 200);
        }else {
            return response()->json([
                'status' => 404,
                'message' => 'No Records Found'
            ], 404);
        }
    }

    public function customerInfoInput(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'nullable|numeric',
            'customer_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contacts' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        } else {
            $customer = Customers::create([
                'product_id' => $request->product_id,
                'customer_name' => $request->customer_name,
                'address' => $request->address,
                'contacts' => $request->contacts
            ]);

            if ($customer) {
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
    public function customerInfoShow ($id): \Illuminate\Http\JsonResponse
    {
        $customer = Customers::find($id);
        if($customer){
            return response()->json([
                'status' => 200,
                'Customers' => $customer
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Such Record Found'
            ], 404);
        }
    }


    public function customerInfoEdit($id)
    {
        $customer = Customers::find($id);
        $customers = Customers::all();  // Assuming you need the list of products for some reason
        $slug = 'edit_product';

        return view('ShoppingCart', ['customer' => $customer, 'customers' => $customers, 'slug' => $slug]);
    }

    public function customerInfoUpdate (Request $request, Int $id): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'nullable|numeric',
            'customer_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contacts' => 'required|numeric'
        ]);

        $customer = Customers::find($id);


        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        } else {
            if($customer){
                $customer->update([
                    'product_id' => $request->product_id,
                    'customer_name' => $request->customer_name,
                    'address' => $request->address,
                    'contacts' => $request->contacts
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Customer Updated Successfully"
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