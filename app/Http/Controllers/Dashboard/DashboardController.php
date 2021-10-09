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
//        dd(\Auth::id());
        $userClassrooms = User::with('classroom')->where('user_id',auth()->id())->get();
//        $userClassrooms = User::find(auth()->id())->with('classroom')->get();

//        dd($userClassrooms);

        return view('user.Dashboard.index',compact('userClassrooms'));
    }
}
