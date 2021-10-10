<?php

use App\Http\Controllers\Log_Reg\LoginController;
use App\Http\Controllers\Log_Reg\RegisterController;

Route::get("/login", [LoginController::class, 'index'])->name('Login');
Route::post("/on-login", [LoginController::class, 'login'])->name('On-Login');
Route::post("/logout", [LoginController::class, 'logout'])->name('Logout');

Route::get("/register", [RegisterController::class, 'index'])->name('Register');
Route::post("/on-register", [RegisterController::class, 'create'])->name('On-Register');
