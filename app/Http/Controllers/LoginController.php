<?php

namespace App\Http\Controllers;


class LoginController extends Controller
{

    public function login() {

        $attempt = auth()->attempt([
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        if (!$attempt)
        {
            return response()->json("", 401);
        }

    }
}
