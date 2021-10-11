<?php

namespace App\View\Components\User\Sidebar;

use App\Models\Classroom;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dashboard_sidebar extends Component
{
    public $userClassrooms;
    public $userEnrolled;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($userClassrooms,$userEnrolled)
    {
        $this->userEnrolled = $userEnrolled;
        $this->userClassrooms = $userClassrooms;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render()
    {
        return view('components.user.sidebar.dashboard_sidebar');
    }
}
