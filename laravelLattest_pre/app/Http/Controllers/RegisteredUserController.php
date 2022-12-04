<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(RegisterRequest $request)
    {
        $name = $request->name;
        $emai = $request->email;
        $password = $request->password;
        $form = $request->all(); 

        User::create($form);

        return redirect('/login');


    }
}
