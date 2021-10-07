<?php

namespace App\Action;

use App\Models\User;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StoreUserAction
{

    public function execute(Request $request):void {
        User::create([
           'email_addr' => $request->email_addr,
           'password' => Hash::make($request->password),
        ]);
    }

}

