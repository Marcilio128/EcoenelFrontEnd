<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request){

        $credenciais = $request->except('_token');

        if(!Auth::attempt($credenciais)){
            return redirect('cadastro')->back()->withErrors('Email e/ou senha errado');
        }
        $user = auth()->user();
            $tokenuser = $user['token'];
            $token = Crypt::decryptString($tokenuser);
            if($token == 0){
                return redirect()->route('Escolha');
            }

    }

}
