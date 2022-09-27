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
                "soma" => $dados[0]["economizado"] + $dados[0]["Óleo"],
                "dado específico" => $dados[0]["economizado"],
                "todos os dados" => $dados
            ],200);
    }
    
}