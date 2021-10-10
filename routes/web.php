<?php

use App\Http\Controllers\Classroom\ClassroomController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Homepage\HomepageController;
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


Route::get('/', [HomepageController::class, 'index'])->name('Homepage');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('User-Dashboard');


Route::post('/dashboard/restore/{classroom}', [ClassroomController::class, 'restore'])->name('Restore-Classroom');
Route::group(['prefix' => 'dashboard', 'as' => 'user.'], function () {
    Route::resource('classroom', ClassroomController::class)->except('index');
});


require __DIR__ . '/OAuthentication.php';
require __DIR__.'/Login_Registration.php';
