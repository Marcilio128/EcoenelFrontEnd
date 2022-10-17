<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->passsword])){
            $user = Auth::user();
            $token = $user->createToken('3etoken');

            return response()->json($token,200);
        }
        return response()->json('Usuario invalido',401);
    }
}
