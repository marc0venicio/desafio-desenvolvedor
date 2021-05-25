<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Auth::routes();


Route::prefix('clients')->group(function (){
    Route::get('', [ClientController::class, 'home'])->name('clients.home');
});

Route::prefix('products')->group(function (){
    Route::get('', [ProductController::class,'home'])->name('products.home');
});

Route::prefix('orders')->group(function (){
    Route::get('', [OrderController::class,'home'])->name('orders.home');
});