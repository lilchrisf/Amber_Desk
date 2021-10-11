<?php

namespace App\Http\Controllers\Invitation;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Student;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvitationController extends Controller
{

    public function invitationView($invitationID){

//        dd($invitationID);
        $Invitation = Classroom::where('invi_link',$invitationID)->first();
//        dd($Invitation);

        if (!$Invitation) {
            return 'Not Found';
        }

        if (Auth::check()) {

            return view('Invitation.index',compact('Invitation'));

        }

        return 'Not Logged In';

    }

    public function InvitationValidate(Request $request,$invitation) {
//        dd($request->all());
//        dd($invitation);

        $Classroom = Classroom::where('invi_link',$invitation)->first();

        $PassCheck = Hash::check($request->password,$Classroom->password);

        if ($PassCheck) {

            Student::create([
                'user_id' => auth()->id(),
                'class_id' => $Classroom->class_id
            ]);
            return redirect()->route("User-Dashboard")->with('message','Successfully Joined'." ".$Classroom->class_nm);
        }
        return redirect()->back();
    }
}
