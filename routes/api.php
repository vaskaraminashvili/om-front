<?php

use App\Http\Resources\ProductCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/categories', function (Request $request) {
    $categories = DB::table('categories')
    ->select('categories.*')
    ->orderBy('parent_id', 'asc')
    ->get();
    return $categories;
});

Route::get('/slides', function (Request $request) {
    $slides = DB::table('main_slides')
    ->orderBy('sort', 'asc')
    ->get();
    return $slides;
});



Route::get('/products', function (Request $request) {
    $products = DB::table('products')
    ->addSelect('products.*', 'categories.id', 'categories.name as category_name','merchants.id', 'merchants.name as merchant_name')
    ->join('categories', 'products.category_id', '=', 'categories.id')
    ->join('merchants', 'products.merchant_id', '=', 'merchants.id')
    ->where('products.status',1)
    ->orderBy('sort', 'asc')
    ->paginate(15)->withPath('/products');
    return $products;
});
