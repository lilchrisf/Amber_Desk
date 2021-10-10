<?php

namespace App\Action;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StoreUserAction
{

    public function execute(StoreUserRequest $request):void {
        User::create([
           'email' => $request->email_addr,
           'password' => ($request->password),
        ]);

    }

}

