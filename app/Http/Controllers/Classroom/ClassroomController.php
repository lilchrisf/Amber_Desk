<?php

namespace App\Http\Controllers\Classroom;

use App\Action\StoreClassroomAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClassroomRequest;
use App\Models\Classroom;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('user.Classroom.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreClassroomRequest $request
     * @param StoreClassroomAction $action
     * @return RedirectResponse
     */
    public function store(StoreClassroomRequest $request ,StoreClassroomAction $action): RedirectResponse
    {
//        dd($request->all());
        $action->execute($request);

        return redirect()->route('User-Dashboard')->with('message','Classroom Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param Classroom $classroom
     * @return Application|Factory|View
     */
    public function show(Classroom $classroom)
    {
        $Classroom = Classroom::with('user')->find($classroom);
        $userClassrooms = Classroom::all()->where('teacher_id',auth()->id());
        $userEnrolled = User::with('student')->where('user_id',auth()->id())->first();


//        TODO RELEVANCE FUNCTIONALITY


        return view('user.Classroom.view',compact('Classroom','userClassrooms','userEnrolled'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Classroom $classroom
     * @return Response
     */
    public function edit(Classroom $classroom)
    {
        //
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
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(Classroom $classroom)
    {
//        dd($classroom);

//        TODO ADD RELATION DELETE ACTION
        $classroom->delete();


        return redirect()->route('User-Dashboard')->with('message',$classroom->class_nm.' '. 'Deleted Successfully')->with('undoDeletion',$classroom);
    }


    public function restore(int $classroom_id): RedirectResponse
    {

        $classroom = Classroom::withTrashed()->find($classroom_id);


        $classroom->restore();


        return redirect()->route('User-Dashboard')->with(['message' => $classroom->class_nm . " " . 'Restored Successfully']);
    }



}
