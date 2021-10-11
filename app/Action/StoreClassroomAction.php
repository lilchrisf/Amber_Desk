<?php

namespace App\Action;

use App\Http\Requests\StoreClassroomRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\Classroom;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoreClassroomAction
{

    public function execute(StoreClassroomRequest $request):void {


        Classroom::create([
            'teacher_id' => Auth::id(),
            'class_nm' => $request->class_nm,
            'password' => $request->password,
            'invi_link' => $request->invi_link
        ]);

    }

}

