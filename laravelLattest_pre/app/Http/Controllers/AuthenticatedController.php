<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class AuthenticatedController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            return view('clock_in');

        }else{
            return view('login');
        }
    
    }
}
