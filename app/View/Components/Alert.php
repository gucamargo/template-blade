<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */

    public string $type;
    public string $titulo;
    public string $mensagem;
    public string $users;

    public function __construct(string $type, string $titulo, string $mensagem, string $users='')
    {
        $this->type = $type;
        $this->titulo = $titulo;
        $this->mensagem = $mensagem;
        $this->users = $users;
    }

    public function getBgClass()
    {
        $bgClass= [
            'success' => 'bg-green-600',
            'warning' => 'bg-yellow-50',
            'error' => 'bg-red-500',
        ];

        return $bgClass[$this->type];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
