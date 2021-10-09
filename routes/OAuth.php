<?php

use App\Http\Controllers\Log_Reg\OAuthController;

Route::post('login/github', [OAuthController::class, 'RedirectToGithub'])->name('Github-Login');
Route::get('login/github/callback', [OAuthController::class, 'handleGithubCallback']);

Route::post('login/google', [OAuthController::class, 'RedirectToGoogle'])->name('Google-Login');
Route::get('login/google/callback', [OAuthController::class, 'handleGoogleCallback']);
