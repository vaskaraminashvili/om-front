<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;


class ProductGrid extends Component
{
    /**
     * Create a new component instance.
     */
    public $productsData;
    public $paginator;
    public function __construct()
    {
        $category = request()->category;
        $this->productsData = Http::api()->get('/products/'.$category.'?page='.request()->get('page'))->object();
        $this->paginator = new LengthAwarePaginator(
            $this->productsData->data, // The items to display on the current page
            $this->productsData->total, // Total number of items in the collection
            $this->productsData->per_page, // Items per page
            $this->productsData->current_page, // Current page
            ['path' => $this->productsData->path] // URL path for generating links
        );
        // dd($this->paginator);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-grid');
    }
}
