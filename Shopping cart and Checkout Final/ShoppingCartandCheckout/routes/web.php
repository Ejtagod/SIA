<?php


use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return redirect('product');
});

Route::get('/product', [ProductController::class, 'index'])
    ->name('product');
Route::get('/ShoppingCart', [ProductController::class, 'ShoppingCart'])
    ->name('ShoppingCart');
Route::get('/add-to-cart/{product_id}', [ProductController::class, 'addToCart'])
    ->name('add-cart');
Route::get('/remove/{id}', [ProductController::class, 'removeFromCart'])
    ->name('remove');

Route::get('/Checkout', function (){
    return view('Checkout');
});
