<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

/*Route::get('/addproduct', function () {
    return view('products/add_product');
}); */
//Route::get('/product',[ProductController::class,'index']);
Route::post('/store',[ProductController::class,'store']);
Route::resource('product', ProductController::class);
