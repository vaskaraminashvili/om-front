<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class Slider extends Component
{
    /**
     * Create a new component instance.
     */
    public $slides;

    public function __construct()
    {
        $this->slides = Http::api()->get('/slides')->json();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.slider');
    }
}
