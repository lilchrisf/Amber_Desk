<?php

use App\Http\Controllers\Classroom\ClassroomController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Homepage\HomepageController;
use App\Http\Controllers\Log_Reg\LoginController;
use App\Http\Controllers\Log_Reg\RegisterController;
use Illuminate\Support\Facades\Route;
use SocialiteProviders\GitHub\GitHubExtendSocialite;
use SocialiteProviders\Manager\SocialiteWasCalled;

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


Route::post('/dashboard/restore/{classroom}',[ClassroomController::class,'restore'])->name('Restore-Classroom');
Route::group(['prefix' => 'dashboard', 'as' => 'user.'],function(){
    Route::resource('classroom',ClassroomController::class)->except('index');
});

Route::get('/modal',function () {
    return view('user.Modal-Testing.ClassroomModals');
});

Route::post('login/github',[LoginController::class,'RedirectToGithub'])->name('Github-Login');
Route::get('login/github/callback',[LoginController::class,'handleGithubCallback']);

Route::post('login/google',[LoginController::class,'RedirectToGoogle'])->name('Google-Login');
Route::get('login/google/callback',[LoginController::class,'handleGoogleCallback']);

