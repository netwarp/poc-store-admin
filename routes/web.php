<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\ProductsController;

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

Route::get('/', [FrontController::class, 'index']);
Route::get('/product/{slug}/{id}', [FrontController::class, 'product']);

Route::prefix('admin')->group(function() {

    Route::prefix('products')->group(function() {
        Route::get('/', [ProductsController::class, 'index']);
        Route::get('/create', [ProductsController::class, 'create']);
        Route::post('/create', [ProductsController::class, 'store']);
        Route::get('/{id}', [ProductsController::class, 'edit']);
        Route::put('/{id}', [ProductsController::class, 'update']);
        Route::delete('/{id}', [ProductsController::class, 'destroy']);
    });
});


Route::get('image/{path}', [FrontController::class, 'image']);

