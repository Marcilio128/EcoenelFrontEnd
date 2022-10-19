<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $credenciais = $request->except('_token');
        if(!Auth::attempt($credenciais)){
            return back()->withErrors('Email e/ou senha errado');
        }
        $user = auth()->user();
        $tokenuser = $user['token'];
        $token = Crypt::decryptString($tokenuser);
        if($token == 0){
            return redirect()->route('Escolha');
        }elseif($token == 1){
            return redirect()->route('eco');
        }else{
            return redirect()->route('equatorial');
        }
    }
}
