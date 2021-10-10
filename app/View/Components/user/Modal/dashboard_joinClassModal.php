<?php

namespace App\View\Components\User\Modal;

use Illuminate\View\Component;

class dashboard_joinClassModal extends Component
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
        return view('components.User.modal.dashboard_join-class-modal');
    }
}