<?php

namespace App\Action;

use App\Http\Requests\AuthenticateUserRequest;
use Auth;

class LoginAction
{

    public function execute(AuthenticateUserRequest $loginRequest)
    {

//        dd($loginRequest->toArray());
        Auth::attempt([
                'email_addr' => $loginRequest->email_addr,
                'password' => $loginRequest->password
            ]
        );
    }

}
