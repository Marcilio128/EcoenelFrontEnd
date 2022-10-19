<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth3e
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        $token = Crypt::decryptString($user['token']);
        if(auth()->check() && $token == 0){
        return $next($request);
        }else{
            return back()->withErrors('Você não pode acessar essa rota');
        }
    }
}
