<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $userClassrooms = Classroom::all()->where('user_id',auth()->id());

        return view('user.Dashboard.index',compact('userClassrooms'));
    }
}
