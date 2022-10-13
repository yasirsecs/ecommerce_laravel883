<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/pcard', function () {
    return view('pcard');
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
Route::get('/product', function () {
    return view('product-list');
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