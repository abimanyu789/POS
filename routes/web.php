<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;

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

//halaman home
Route::get('/', [HomeController::class, 'home']);

//halaman product
Route::prefix('category')->group(function(){
    Route::get('/baby_kid', [ProductController::class, 'baby']);
    Route::get('/beauty_health', [ProductController::class, 'beauty']);
    Route::get('/food_beverage', [ProductController::class, 'food']);
    Route::get('/home_care', [ProductController::class, 'home']);
});

// halaman user
Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);

// halaman penjualan
Route::get('/penjualan', [SaleController::class, 'sale']);
