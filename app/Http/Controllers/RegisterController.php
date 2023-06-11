<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function register(RegisterRequest $request) {
        $user = User::create($request->validated());
        auth()->login($user);
        Session()->flash('alert-success', 'Data berhasil disimpan');
        return redirect('/register');
        // return redirect('/register')->with('success', "Account successfully registered.");
    }
}
