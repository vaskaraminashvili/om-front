<?php

namespace App\View\Components\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class Categories extends Component
{
    public $categories;
    public $tree;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // $this->tree = Cache::remember('tree', 1 ,function () {
        //     $this->categories = Http::api()->get('/categories')->json();
        //     return $this->buildTree($this->categories);
        // });
        $this->categories = Http::api()->get('/categories')->json();
        $this->tree= $this->buildTree($this->categories);
    }



    protected function buildTree(array &$elements, $parentId = 0) {
        $branch = array();

        foreach ($elements as $element) {
            if ($element['parent_id'] == $parentId) {
                $children = $this->buildTree($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[$element['id']] = $element;
                unset($elements[$element['id']]);
            }
        }
        return $branch;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.categories');
    }
}
