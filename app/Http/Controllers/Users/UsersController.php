<?php

namespace App\Http\Controllers\Users;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\VerifyMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\VerificationEmail;
use App\Http\Controllers\Controller;
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

    public function password() {
        return view('authuser.password');
    }


    public function verifypassword( Request $request) {
        $validated = $request->validate([
            'email' => 'required|email'
        ]);

        $code = Str::random(6);

        // Check if a user with the given email already exists
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // Update the existing user's verification_code
            $user->verification_code = $code;
        } else {
            // Create a new user if they don't exist
            $user = new User();
            $user->email = $request->email;
            $user->verification_code = $code;
            return 'user not found';
        }


        $user->save();

        $name = $request->firstname . " " . $request->lastname;

        // Send an email with the verification code
        Mail::to($user->email)->send(new VerificationEmail($name, $code, $user->email));

        return view('authuser.verifypassword', ['user' => $user])->with('success', 'Registration Successful, Please Login to Continue');
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

