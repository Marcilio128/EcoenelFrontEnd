<?php

namespace App\Http\Controllers;

use App\Models\Eco;
use Illuminate\Http\Request;

class EcoController extends Controller
{

    public function dados()
    {
        $dados = Eco::all();
        return response()->json(
            [
                "todos os dados" => $dados
            ],200);
    }
    
}