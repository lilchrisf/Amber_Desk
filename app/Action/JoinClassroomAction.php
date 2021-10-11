<?php

namespace App\Action;

use App\Http\Requests\JoinClassRoomRequest;
use App\Models\Classroom;
use App\Models\Student;

class JoinClassroomAction{

    public function execute(JoinClassRoomRequest $request){


            Student::create([
           'user_id' =>  auth()->id(),
           'class_id' => Classroom::where('invi_link',$request->class_id)->first()->class_id
        ]);
    }


}
