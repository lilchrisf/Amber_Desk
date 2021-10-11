<?php

namespace App\Action;

use App\Models\User;
use App\Models\User_info;
use Auth;
use Hash;

class GoogleAuthAction
{

    public function execute($data)
    {

        $user = User::where('email', $data->email)->first();

        if (!$user) {
            $userInfo = new User_info();
            $userInfo->first_nm = $data->user['given_name'];
            $userInfo->last_nm = $data->user['family_name'];
            $userInfo->avatar = $data->user['picture'];

            $user = new User();
            $user->email = $data->user['email'];
            $user->password = Hash::make(Hash::make(uniqid("", true)));
            $user->save();
            $user->user_info()->save($userInfo);
        }
        Auth::login($user, true);

    }

}
