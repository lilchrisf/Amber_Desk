<?php

use App\Http\Controllers\Classroom\ClassroomController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Homepage\HomepageController;
use App\Http\Controllers\Log_Reg\LoginController;
use App\Http\Controllers\Log_Reg\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/login",[LoginController::class,'index'])->name('Login');
Route::post("/on-login",[LoginController::class,'login'])->name('On-Login');
Route::post("/logout",[LoginController::class,'logout'])->name('Logout');

Route::get("/register",[RegisterController::class,'index'])->name('Register');
Route::post("/on-register",[RegisterController::class,'create'])->name('On-Register');





Route::get('/',[HomepageController::class,'index'])->name('Homepage');

Route::get('/dashboard',[DashboardController::class,'index'])->name('User-Dashboard');

Route::group(['prefix' => 'dashboard', 'as' => 'user.'],function(){
    Route::resource('classroom',ClassroomController::class);
});

Route::get('/modal',function () {
    return view('user.Modal-Testing.ClassroomModals');
});

