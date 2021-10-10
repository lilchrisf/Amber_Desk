<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $userClassrooms = Classroom::all()->where('teacher_id',auth()->id());

//        dd($userClassrooms);

//        dd($userClassrooms);
        return view('user.Dashboard.index',compact('userClassrooms'));
    }
}
