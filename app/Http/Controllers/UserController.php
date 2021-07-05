<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        $token = auth('api')->attempt($credentials);

        return $token;
    }

    public function register(Request $request)
    {

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        $user->save();

        return "200";
    }
}
