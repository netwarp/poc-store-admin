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

Route::get('admin/products', [ProductsController::class, 'index']);
Route::get('admin/products/create', [ProductsController::class, 'create']);
Route::post('admin/products/create', [ProductsController::class, 'store']);
Route::get('admin/products/{id}', [ProductsController::class, 'edit']);

Route::get('image/{path}', [FrontController::class, 'image']);

