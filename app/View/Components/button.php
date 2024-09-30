<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $text;

    public function __construct($text = 'Quero Adotar', $paw = 'false')
    {
        $this->text = $text;
        $this->paw = $paw;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
