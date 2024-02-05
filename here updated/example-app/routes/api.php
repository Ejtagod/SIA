<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\CustomerController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Customer
Route::get('customers', [CustomerController::class, 'customerInfoRetrieve']);
Route::post('customers', [CustomerController::class, 'customerInfoInput']);
Route::get('customers/{id}', [CustomerController::class, 'customerInfoShow']);
Route::get('customers/{id}/edit', [CustomerController::class, 'customerInfoEdit']);
Route::put('customers/{id}/edit', [CustomerController::class, 'customerInfoUpdate']);
// Product
Route::get('products', [ProductsController::class, 'productInfoRetrieve']);
Route::post('products', [ProductsController::class, 'productInfoInput']);
Route::get('products/{id}', [ProductsController::class, 'productInfoShow']);
Route::get('products/{id}/edit', [ProductsController::class, 'productInfoEdit']);
Route::put('products/{id}/edit', [ProductsController::class, 'productInfoUpdate']);