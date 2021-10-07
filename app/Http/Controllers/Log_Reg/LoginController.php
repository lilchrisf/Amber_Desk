<?php

namespace App\Http\Controllers\Log_Reg;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthenticateUserRequest;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('Login_Registration.login');
    }

    public function login(Request $request) {

        Auth::attempt([
            'email_addr' => $request->email_addr,
            'password' => $request->password
        ]);

        return redirect('/');

    }
}
