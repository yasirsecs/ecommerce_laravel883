<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\CheckoutController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/pcard', function () {
    return view('pcard');
});
Route::get('/pcard1', function () {
    return view('pcard1');
});
Route::get('/amir', function () {
    return view('amir');
});

Route::get('/pcard2', function () {
    return view('pcard2');
});
Route::get('/pcard3', function () {
    return view('pcard3');
});
Route::get('/pcard4', function () {
    return view('pcard4');
});
Route::get('/pcard5', function () {
    return view('pcard5');
});
Route::get('/pcard6', function () {
    return view('pcard6');
});

Route::get('/product', function () {
    return view('product-list');
});
Route::get('/product-women', function () {
    return view('product-women');
});
Route::get('/landing', function () {
    return view('landing-front');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/amirlanding', function () {
    return view('amirlanding');
});
Route::get('/yasir', function () {
    return view('yasir');
});
Route::post('/yasir', function () {
    return view('yasir');
});

Route::get('/paymenttest', function () {
    return view('paymenttest');
});
 Route::get('/checkout1', function () {
    return view('checkout');
}); 
Route::get('/checkout2', function () {
    return view('checkout2');
});

Route::get('/checkout3', function () {
    return view('checkout3');
});
Route::get('/cart', function () {
    return view('layouts.cart');
});
Route::get('/success', function () {
    return view('success');
});

Route::get('checkout',[CheckoutController::class, 'checkout']);
Route::post('checkout','App\Http\Controllers\CheckoutController@afterPayment')->name('checkout.credit-card');
Route::post('checkout2','App\Http\Controllers\CheckoutController@checkout')->name('checkout.credit-card2');

Route::get('checkout4',[CheckoutController::class, 'checkout4']);

//Route::post('checkout',[CheckoutController::class, 'checkout']);

