<?php


namespace Alertify\Alert\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class danger extends Component
{
    public string $title = "";
    public string $body = "";

    /**
     * Create a new component instance.
     */
    public function __construct($title,$body)
    {
        $this->title = $title;
        $this->body = $body;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('Alertify::components.danger');
    }
}
