<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function page() {
        return view('auth.login');
    }

    public function loginUser(Request $req) {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
            
        ]);   
        $email = $req->get('email');
        $credentials = $req->only('email', 'password');
        $user = User::where('email', $email)->first();
        if (auth()->guard('web')->attempt($credentials) && $user->role == 'admin') {
            session(["email" => $email]);
            Alert::success('Login Success'
        );
            return redirect('/admin');
        } 
        elseif (auth()->guard('web')->attempt($credentials) && $user->role == 'mkad') {
            session(["email" => $email]);
            Alert::success('Login Success');
            return redirect('/mkad');

        } 
        elseif (auth()->guard('web')->attempt($credentials) && $user->role == 'spv') {
            session(["email" => $email]);
            Alert::success('Login Success');
            return redirect('/spv');

        } 
        else {
            Alert::error('Email atau ' . 'Password'. ' Salah!' );
            return redirect('/user-login');
        }
    }
}
