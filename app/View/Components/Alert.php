<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class Alert extends Component
{

    public $categories;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->categories = Http::get('http://om-front.test/api/categories')->collect();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
