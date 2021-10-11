<?php

namespace App\Http\Controllers\Classroom;

use App\Action\JoinClassroomAction;
use App\Action\StoreClassroomAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\JoinClassRoomRequest;
use App\Http\Requests\StoreClassroomRequest;
use App\Models\Classroom;
use App\Models\User;
use Hash;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ClassroomController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param StoreClassroomRequest $request
     * @param StoreClassroomAction $action
     * @return RedirectResponse
     */
    public function store(StoreClassroomRequest $request, StoreClassroomAction $action): RedirectResponse
    {
        $action->execute($request);

        return redirect()->route('User-Dashboard')->with('message', 'Classroom Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param Classroom $classroom
     * @return Application|Factory|View
     */
    public function show(Classroom $classroom)
    {
//        dd($Classroom);
        $Classroom = Classroom::with(['teacherInfo', 'classroomStudents', 'assignments', 'homework'])->find($classroom->class_id);
        $userClassrooms = Classroom::all()->where('teacher_id', auth()->id());
        $userEnrolled = User::with('student')->where('user_id', auth()->id())->first();

//        TODO RELEVANCE FUNCTIONALITY

        return view('user.Classroom.view', compact('Classroom', 'userClassrooms', 'userEnrolled'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Classroom $classroom
     * @return Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Classroom $classroom
     * @return RedirectResponse
     */
    public function destroy(Classroom $classroom):RedirectResponse
    {
//        dd($classroom);

//        TODO ADD RELATION DELETE ACTION

        $classroom->delete();

        return redirect()->route('User-Dashboard')->with('message', $classroom->class_nm . ' ' . 'Deleted Successfully')->with('undoDeletion', $classroom);
    }


    public function restore(int $classroom_id): RedirectResponse
    {

        $classroom = Classroom::withTrashed()->find($classroom_id);


        $classroom->restore();


        return redirect()->route('User-Dashboard')->with(['message' => $classroom->class_nm . " " . 'Restored Successfully']);
    }


    public function join(JoinClassRoomRequest $joinClassRoomRequest, JoinClassroomAction $classroomAction): RedirectResponse
    {
        $Classroom = Classroom::where('invi_link', $joinClassRoomRequest->class_id)->first();

        if (!$Classroom) {
//            TODO MAKE ERROR TOAST

            return redirect()->back()->with(['message' => 'Classroom Link Invalid']);

        }

        if (!Hash::check($joinClassRoomRequest->class_password, $Classroom->password)) {
//            TODO MAKE ERROR TOAST

            return redirect()->back()->with(['message' => 'Classroom Password Incorrect']);

        }
        $classroomAction->execute($joinClassRoomRequest);

        return redirect()->route('User-Dashboard')->with(['message' => 'Joined Classroom Successfully']);
    }

    public function student(Classroom $classroom) {
            return $classroom;
    }


}
