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

Route::get('/categories/{category?}', function ($category) {
    $category = DB::table('categories as t1')
    ->select('t1.*')
    ->where('t1.name', $category)
    ->orderBy('t1.parent_id', 'asc')
    ->first();
    return $category;
});

Route::get('/slides', function (Request $request) {
    $slides = DB::table('main_slides')
    ->orderBy('sort', 'asc')
    ->get();
    return $slides;
});



Route::get('/products/{category?}', function (Request $request) {
    $category = $request->category;
    $products = DB::table('products')
    ->addSelect('products.*', 'categories.id', 'categories.name as category_name','merchants.id', 'merchants.name as merchant_name')
    ->join('categories', 'products.category_id', '=', 'categories.id')
    ->join('merchants', 'products.merchant_id', '=', 'merchants.id')
    ->when($category, function ($query) use($category) {
        return $query->where('categories.name', $category);
    })
    ->where('products.status',1)
    ->orderBy('sort', 'asc')
    ->paginate(15)->withPath('/products/'.$category);
    return $products;
});

Route::get('/product/{slug?}', function ($slug) {
    $product = DB::table('products')
    ->addSelect('products.*', 'categories.id', 'categories.name as category_name','merchants.id', 'merchants.name as merchant_name')
    ->join('categories', 'products.category_id', '=', 'categories.id')
    ->join('merchants', 'products.merchant_id', '=', 'merchants.id')
    ->where('products.status',1)
    ->where('products.slug',$slug)
    ->orderBy('sort', 'asc')
    ->first();
    return $product;
});
