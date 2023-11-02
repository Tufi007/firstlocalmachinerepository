<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    function signup(Request $request)
    {
        $check = $request->validate([
            'email' => ['required', 'email'],
            'username' => ['required'],
            'password' => ['required']

        ]);
        if ($check) {
            $adduser =  new User;
            $adduser->username= $request['username'];
            $adduser->email= $request['email'];
            $adduser->password= $request['password'];
            $adduser->save();
            return redirect(url('signin'));

        }
        else{
            return redirect('/');
        }
    }
}
