<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{
    /**
     * Create a new component instance.
     */

    public $type;
    public $variation;
    public $size;
    public $icon;
    public $iconPosition;
    public $text;     
     
    public function __construct($type, $variation, $size, $text ='' , $icon ='', $iconPosition ='')
    {
        $this->type = $type;
        $this->variation = $variation;
        $this->size = $size;
        $this->text = $text;
        $this->icon = $icon;
        $this->iconPosition = $iconPosition; 
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.button');
    }
}
