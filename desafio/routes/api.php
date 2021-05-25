<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'clients'], function(){
    Route::get('', [ClientController::class,'index'])->name('clients.index');
    Route::post('', [ClientController::class,'store'])->name("clients.store");
    Route::get('{client}', [ClientController::class,'find'])->name("clients.store");
    Route::patch('{client}', [ClientController::class,'update'])->name("clients.update");
    Route::delete('{client}', [ClientController::class,'destroy'])->name("clients.destroy");
});
Route::group(['prefix' => 'products'], function() {
    Route::get('', [ProductController::class,'index'])->name('products.index');
    Route::post('', [ProductController::class,'store'])->name("products.store");
    Route::get('{product}', [ProductController::class,'find'])->name("products.find");
    Route::delete('{product}', [ProductController::class,'destroy'])->name("products.destroy");
    Route::patch('{product}', [ProductController::class,'update'])->name("products.update");
});

Route::group(['prefix' => 'orders'], function() {
    Route::get('', [OrderController::class,'index'])->name('orders.index');
    Route::get('{order}', [OrderController::class,'find'])->name('orders.find');
    Route::post('', [OrderController::class,'store'])->name('orders.store');
    Route::patch('{order}', [OrderController::class,'update'])->name("orders.update");
    Route::delete('{order}', [OrderController::class,'destroy'])->name("orders.destroy");
});


