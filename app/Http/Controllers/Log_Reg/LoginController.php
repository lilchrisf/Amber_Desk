<?php

namespace App\Http\Controllers\Log_Reg;

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

    public function login(Request $request) {

        Auth::attempt([
            'email_addr' => $request->email_addr,
            'password' => $request->password
        ]);

        return redirect('/');

    }

    public function RedirectToGithub(): RedirectResponse
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback()
    {
        $user = Socialite::driver('github')->user();

        $this->registerOrLoginUser($user);

        return redirect()->route('User-Dashboard');    }

    public function RedirectToGoogle(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $this->registerOrLoginUser($user);

        return redirect()->route('User-Dashboard');
    }

    public function registerOrLoginUser($data){
        $user = User::where('email_addr',$data->email)->first();

        if (!$user) {
            $user = new User();
            $user->username = $data->name;
            $user->email_addr = $data->email;
            $user->provider_id = $data->id;
            $user->save();
        }
        Auth::login($user);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }


}
