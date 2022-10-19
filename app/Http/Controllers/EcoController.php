<?php

namespace App\Http\Controllers;

use App\Models\Eco;
use App\Models\Resumo;
use Illuminate\Http\Request;

class EcoController extends Controller
{

    public function dados()
    {
        $dados = Resumo::all();
        return response()->json(
            [$dados]
        );
    }
    
}