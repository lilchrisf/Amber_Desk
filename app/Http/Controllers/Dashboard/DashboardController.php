<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $userClassrooms = Classroom::all()->where('teacher_id',auth()->id());

//        $User = User::with('student','user_info')->where('user_id',auth()->id())->first();

        $userEnrolled = User::with('student')->where('user_id',auth()->id())->first();


//        dd($userEnrolled);
//        dd($userClassrooms);

        return view('user.Dashboard.index',compact('userClassrooms','userEnrolled'));
    }
}
