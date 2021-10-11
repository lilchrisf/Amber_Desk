<?php

namespace App\Action;

use App\Models\User;
use App\Models\User_info;
use Auth;
use Hash;

class GitHubAuthAction{

    public function execute($data) {

        $user = User::where('email', $data->email)->first();

        if (!$user) {
            $userInfo = new User_info();

            $userInfo->username = $data->user['name'];
            $userInfo->avatar = $data->user['avatar_url'];
            $userInfo->bio = $data->user['bio'];

            $user = new User();
            $user->email = $data->user['email'];
            $user->password = Hash::make(Hash::make(uniqid("", true)));
            $user->save();
            $user->user_info()->save($userInfo);
        }

        Auth::login($user, true);

        return redirect()->route('Homepage');

    }


}
