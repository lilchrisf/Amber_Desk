<?php

namespace App\View\Components\User\Modal;

use Illuminate\View\Component;

class dashboard_crtClassToast extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.modal.dashboard_crt-class-toast');
    }
}
