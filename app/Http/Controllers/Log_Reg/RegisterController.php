<?php

namespace App\Http\Controllers\Log_Reg;

use App\Action\StoreUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use \Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use \Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('Login_Registration.registration');
    }

    public function create(StoreUserAction $storeUserAction,Request $request)
    {
        $storeUserAction->execute($request);

        return redirect("/login");
    }
}
