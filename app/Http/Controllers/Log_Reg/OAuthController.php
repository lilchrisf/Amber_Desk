<?php

namespace App\Http\Controllers\Log_Reg;

use App\Action\GitHubAuthAction;
use App\Action\GoogleAuthAction;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User_info;
use Auth;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class OAuthController extends Controller
{

//    GitHub
    public function RedirectToGithub(): RedirectResponse
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback(GitHubAuthAction $gitHubAuth): RedirectResponse
    {
        $user = Socialite::driver('github')->user();

            $gitHubAuth->execute($user);

        return redirect()->route('Homepage');
    }
    ////


//    Google

    public function RedirectToGoogle(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(GoogleAuthAction $googleAuth): RedirectResponse
    {
        $user = Socialite::driver('google')->user();

        $googleAuth->execute($user);

        return redirect()->route('Homepage');
    }
    ////

}