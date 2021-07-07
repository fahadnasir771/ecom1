<?php

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\Wishlist;
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

Route::get('/products', function(){
    return Product::all();
});

Route::get('/categories', function(){
    return Category::all();
});

Route::get('/banners', function(){
    return Banner::all();
});

Route::get('/wishlist', function(){
    return Wishlist::all();
});



