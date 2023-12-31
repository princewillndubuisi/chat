<?php

namespace App\Http\Controllers\Users;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\VerifyMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\VerificationEmail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

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

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }

    public function profile() {
        return view('authuser.profile');
    }

    public function chat() {
        return view('authuser.chat');
    }

    public function confirmpassword(Request $request) {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // A user with the provided email was found
            if ($request->code == $user->verification_code) {
                $user->email_verified_at = Carbon::now();
                $user->update();
                // dd('Verification Successful');
                return redirect()->route('forgot');
            } else {
                // dd('Invalid Code');
                return redirect()->back()->withErrors(['Invalid' => 'Invalid code']);

            }
        }

    }

}
