<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index($category){
        $category = Http::api()
            ->withUrlParameters([
                'category' => $category
            ])
            ->get('/categories/{category}')->object();
            $categories = Http::api()
                ->get('/categories')->object();
        return view('products', compact('category', 'categories'));
    }
    public function show($slug){
        $product = Http::api()
            ->withUrlParameters([
                'slug' => $slug
            ])
            ->get('/product/{slug}')->object();
        return view('product');
    }
}
