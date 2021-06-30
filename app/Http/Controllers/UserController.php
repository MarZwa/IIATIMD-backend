<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        $token = auth('api')->attempt($credentials);

        return $token;
    }
}
