<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Icons extends Component
{
    public $path;
    /**
     * Create a new component instance.
     */
    public function __construct($path = "")
    {
        $this->path = resource_path('assets/icons/' . $path);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.svg-icons');
    }
}
