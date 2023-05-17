<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        if(!Auth::check()){
            return view('auth.register');

        }
        return redirect()->route('users.index');
    }

    public function formLogin(){
        if(!Auth::check()){

            return view('auth.login');
        }
        return redirect()->route('users.index');

    }

    public function login(LoginRequest $request){
        $data = $request->validated();
        if(Auth::attempt($data)){
            return redirect()->intended(route('users.index'));
            $request->session()->regenerate();
            
        }
        return redirect()->route('auth.login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('users.login');
    }
}
