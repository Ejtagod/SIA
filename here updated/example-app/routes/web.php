<?php

use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\CheckoutController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Navbar', function (){
    return view('Navbar');
});

Route::get('/ShoppingCart',[ShoppingCartController::class,'ShoppingCart']);

Route::post('/ShoppingCart',[ShoppingCartController::class,'ShoppingCart']);

Route::get('/Checkout', [CheckoutController::class, 'checkout']);



