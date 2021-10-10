<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {

        $user = User::with('user_info')->where('user_id',auth()->id())->first();

        return view('index',compact('user'));
    }
}
