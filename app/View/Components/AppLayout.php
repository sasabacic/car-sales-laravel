<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public $title;
    public $bodyClass;


    public function __construct($title = '', $bodyClass = null)
    {
        //public property of the of the AppLayout class
        //we are assigning the value of the parameter $title to the property
        $this->title = $title;
        $this->bodyClass = $bodyClass;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.app');
    }
}
