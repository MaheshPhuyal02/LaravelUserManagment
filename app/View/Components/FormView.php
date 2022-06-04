<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormView extends Component
{
    public $name;
    public $example;
    public $label;
    public $type;
    public $update;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $example, $label, $type, $update, $value)
    {
        $this->name = $name;
        $this->example = $example;
        $this->label = $label;
        $this->type = $type;
        $this->update = $update;
        $this->value = $value;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-view');
    }
}
