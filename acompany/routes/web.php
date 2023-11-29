<?php

use App\Http\Controllers\SalesController;
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
//Route Fix Jangan dirubah ya ges yak - caca
Route::get('sales', [SalesController::class, 'index'])->name('sales');

//Yang ini boleh dirubah
Route::get('/', function () {
    return view('landingPage');
})->name('landingPage');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/customer', function () {
    return view('customer');
})->name('customer');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');
