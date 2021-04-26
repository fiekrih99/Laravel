<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function login(Request $request)
    { 
        $username = $request -> post('username');
        $password = $request -> post('password');

        if ($username != 'admin' && $password != 'password'){
            return \response()->redirectTo('/');
        }else{
            return \response()->redirectTo('/home');
        }
    
    }
}