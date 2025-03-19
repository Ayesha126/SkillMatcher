<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $name;
    public string $type;
    public string $label;

    /**
     * Create a new component instance.
     */
    public function __construct(string $name, string $type = 'text', string $label = '')
    {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input', [
            'name' => $this->name,
            'type' => $this->type,
            'label' => $this->label,
        ]);    }
}
