<?php

namespace App\View\Components\user;

use App\Models\Classroom;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class sidebar extends Component
{
    public $userClassrooms;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->userClassrooms = Classroom::all()->where('user_id',auth()->id());
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.sidebar');
    }
}
