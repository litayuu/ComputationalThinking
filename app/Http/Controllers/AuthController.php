<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Lunaweb\RecaptchaV3\Facades\RecaptchaV3;

class AuthController extends Controller
{
    public function index() {
        return view('login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
                // 'g-recaptcha-response' => 'required|recaptchav3:proses_login,0.5'
            ]);

        $credentials = $request->only('username','password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                if ($user->role == 'guru') {
                    return redirect()->intended('guru');
                } elseif ($user->role == 'siswa') {
                    return redirect()->intended('siswa');
                }
                return redirect()->intended('/');
            }
        return redirect('/')->withInput()->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout()
    {
        Session::flush();        
        Auth::logout();
        return redirect('/');
    }
}