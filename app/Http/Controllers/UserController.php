<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('users.login');

    }
    //authenticate
    public function authenticate(Request $request){

        $formFields= $request->validate([


            'email'=>['required','email'],
            'password'=>'required'

        ]);
        if(auth()->attempt($formFields)){
            request()->session()->regenerate();
            return redirect('/');
         }

    }
}


