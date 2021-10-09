<?php

namespace App\View\Components\User\Sidebar;

use App\Models\Classroom;
use Illuminate\View\Component;

class dashboard_sidebar extends Component
{
    public $userClassrooms;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->userClassrooms = Classroom::all()->where('user_id',auth()->id())->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.sidebar.dashboard_sidebar');
    }
}
