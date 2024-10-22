<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     */

    public $icon;
    public $iconPosition;
    public $type;
    public $name;
    public $placeholder;
    public $size;
    public $label;

    public function __construct($type, $name, $placeholder, $size, $icon='', $iconPosition = '', $label = '')
    {
        $this->$icon = $icon;
        $this->$iconPosition = $iconPosition;
        $this->$type = $type;
        $this->$name = $name;
        $this->$placeholder = $placeholder;
        $this->$size = $size;
        $this->$label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
