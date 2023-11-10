<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\AuthController;
use App\Http\Controllers\Users\UsersController;

// Routes for user registration and login
Route::get('register', [UsersController::class, 'register'])->name('register');
Route::post('register', [UsersController::class, 'doregister'])->name('doregister');
Route::get('login', [UsersController::class, 'login'])->name('login');
Route::post('login', [UsersController::class, 'dologin'])->name('dologin');

// Password reset and email confirmation routes
Route::get('password', [UsersController::class, 'password'])->name('password');
Route::post('confirmemail', [UsersController::class, 'confirmmail'])->name('confirmemail');
Route::get('verifypassword', [UsersController::class, 'verifypasswordmail'])->name('verifypassword');
Route::get('forgotpassword', [UsersController::class, 'forgot'])->name('forgot');

// Routes that require authentication
Route::middleware(['auth'])->group(function () {
    // AuthController routes
    Route::get('verifyemail', [AuthController::class, 'verifyemail'])->name('verifyemail');
    Route::get('resend/verificationmail', [AuthController::class, 'resendmail'])->name('send.verify.mail');
    Route::post('verificationemail', [AuthController::class, 'confirmemail'])->name('email.confirm');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    // Routes that require email verification
    Route::middleware(['verifyemail'])->group(function () {
        Route::get('user-dashboard', [AuthController::class, 'dashboard'])->name('user-dashboard');
        Route::get('profile', [AuthController::class, 'profile'])->name('user-profile');
        Route::get('chat', [AuthController::class, 'chat'])->name('user-chat');
    });
});

