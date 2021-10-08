<?php

namespace App\Action;

use App\Http\Requests\StoreClassroomRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\Classroom;
use App\Models\User;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StoreClassroomAction
{

    public function execute(StoreClassroomRequest $request):void {

        Classroom::create([
            'user_id' => Auth::id(),
            'class_nm' => $request->class_nm,
            'class_desc' => $request->class_desc,
            'subject' => $request->subject,
            'password' => $request->password,
            'invi_link' => trim($request->subject.$request->class_nm.uniqid('', true))
        ]);

    }

}

