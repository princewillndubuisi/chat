<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Mail\VerificationEmail;
use Carbon\Carbon;
use App\Models\User;
use App\Mail\VerifyMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function dashboard() {
        return view('user.dashboard');
    }

    public function verifyemail() {
        return view('authuser.verify');
    }

    public function resendmail() {
        $code = Str::random(6);

        $user = User::find(Auth::user()->id);
        $user->verification_code = $code;
        $user->update();

        $name = Auth::user()->firstname . " ". Auth::user()->lastname . " ". Auth::user()->othername;

        Mail::to(Auth::user()->email)->send(new VerificationEmail($name, $code, Auth::user()->email));

        return redirect()->back()->with('success', 'Email Send');
    }

    public function confirmemail(Request $request) {
        $user = User::find(Auth::user()->id);

        if ($request->code == $user->verification_code){
            $user->email_verified_at = Carbon::now();
            $user->update();
            return redirect()->route('user-dashboard');

        } else{
            return redirect()->back()->withErrors(['Invalid' => 'invalid code']);

        }

    }

    public function profile() {
        return view('authuser.profile');
    }

    public function chat() {
        return view('authuser.chat');
    }

}
