<?php

namespace App\View\Components\Input;

use http\Env\Request;
use Illuminate\View\Component;

class FormComp extends Component
{
    public $form_name;

    public function __construct($formName)
    {
        $this->form_name = $formName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.form-comp');
    }
}
