<?php

namespace App\Http\Controllers;
use illuminate\support\Facades\Auth;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    function signin(Request $request){
        $check= $request->validate([
            'email'=>['required'],
            'password'=>['required']
        ]);
        if ($check) {
            if(auth()->attempt($request->only('email','password'))){
                $user= Auth::user();
                Auth::login($user);
                return redirect('home');
            }
            else{
            return redirect()->back()->withErrors(['email'=>'invalid','password'=>'invalid']);
        }

    }
    else{
        return redirect()->back();
    }}
    function logout(Request $r){

        auth()->logout();

        return redirect('signin');
    }
}

