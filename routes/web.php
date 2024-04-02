<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/namasaya', function () {
    return view('nama-saya');
});

Route::get('/landingpages', function () {
    return view('about');
});

Route::get('/ujicoba', function(){
    return view('ujicoba');
});