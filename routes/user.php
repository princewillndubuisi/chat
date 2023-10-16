<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\AuthController;
use App\Http\Controllers\Users\UsersController;


Route::controller(UsersController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'doregister')->name('doregister');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'dologin')->name('dologin');
});


Route::middleware(['auth'])->group( function () {
    Route::controller(AuthController::class)->group( function () {
        Route::get('verifyemail', 'verifyemail')->name('verifyemail');
        Route::get('resend/verificationmail', 'resendmail')->name('send.verify.mail');
        Route::post('verificationemail', 'confirmemail')->name('email.confirm');
    });

    Route::controller(AuthController::class)->middleware(['verifyemail'])->group( function () {
        Route::get('userdashboard', 'dashboard')->name('user-dashboard');
        Route::get('profile', 'profile')->name('user-profile');
        Route::get('chat', 'chat')->name('user-chat');
    });
});

// Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');


// Route::controller(AdminController::class)->prefix('admin/')->name('admin.')->middleware(['admin'])->group(function(){
//     Route::get('dashboard', 'dashboard')->name('dashboard');
//     Route::get('settings', 'settings')->name('settings');
// });

