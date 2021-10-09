<?php

namespace App\Http\Controllers\Log_Reg;

use App\Action\LoginAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthenticateUserRequest;
use App\Models\User;
use Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LoginController extends Controller
{
    public function index(){
        return view('Login_Registration.login');
    }

    public function login(AuthenticateUserRequest $loginRequest, LoginAction $loginAction) {

        $loginAction->execute($loginRequest);

        return redirect('/');

    }


    public function logout(){
        Auth::logout();
        return redirect('/login');
    }


}
