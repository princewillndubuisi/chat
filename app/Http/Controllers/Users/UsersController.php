<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\VerificationEmail;
use App\Mail\VerifyMail;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    public function register() {
        return view('authuser.register');
    }

    public function login() {
        return view('authuser.login');
    }

    public function doregister(Request $request) {
        $validate = $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'username' => 'required|max:255',
            'gender' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required|min:8',
        ]);

        $code = Str::random(6);
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->username = $request->username;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->verification_code = $code;

        $user->save();

        $name = $request->firstname . " " . $request->lastname;

        Mail::to($request->email)->send(new VerificationEmail($name, $code, $request->email));

        return redirect()->route('login')->with('success', 'Registration Successful, Please Login to Continue');
    }

    public function dologin(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('user-dashboard');
        }

        return back()->withErrors([
            'email'=>'The provided credentials do not match our records',
        ])->onlyInput('email');
    }

    public function verifypassword() {
        $code = Str::random(6);

        $user = User::find('email');
        $user->verification_code = $code;
        $user->update();

        $name = Auth::user()->firstname . " ". Auth::user()->lastname . " ". Auth::user()->othername;

        Mail::to(Auth::user()->email)->send(new VerificationEmail($name, $code, Auth::user()->email));

        return view('verifypassword');
    }

    public function forgot() {
        return view('authuser.forgotpassword');
    }


    // public function doforgot(Request $request) {
    //     $newpassword = $request->validate([
    //         'password' => 'required|min:8'
    //     ]);

    //     $new = new User();

    //     $new->password = $request->password;

    //     return redirect()->route('login')->with('success', 'New Password Created Successfully, Please Login to Continue');
    // }
}

