<?php

namespace App\Http\Controllers\Classroom;

use App\Action\StoreClassroomAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClassroomRequest;
use App\Models\Classroom;
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
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('user.Classroom.view');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param StoreClassroomRequest $request
     * @param StoreClassroomAction $action
     * @return Application|RedirectResponse|Redirector
     */
    public function store(StoreClassroomRequest $request ,StoreClassroomAction $action)
    {
        $action->execute($request);

        return redirect('/')->with(['message' => 'Classroom Created Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param Classroom $classroom
     * @return void
     */
    public function show(Classroom $classroom)
    {
        dd($classroom);
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
     * @return Response
     */
    public function destroy(Classroom $classroom)
    {
        //
    }
}
