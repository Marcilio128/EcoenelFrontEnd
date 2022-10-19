<?php

namespace App\Http\Controllers;

use App\Models\Eco;
use App\Models\Projeto;
use App\Models\Residuo;
use App\Models\Resumo;
use Illuminate\Http\Request;

class EcoController extends Controller
{

    public function projeto()
    {
        $projetos = Projeto::all();
        return response()->json(
            [$projetos]
        );
    }
    public function residuo()
    {
        $residuos = Residuo::all();
        return response()->json(
            [$residuos]
        );
    }
    //versões where
    public function GOresumo()
    {
        $data = Date("Y-m-d");
        $resumos = Resumo::select(Resumo::raw('SUM(kg) kg, SUM(clientes) clientes, SUM(bonus) bonus, SUM(economizado) economizado'))->where('data', "$data")->get();
        return response()->json(
            [$resumos]
        );
    }
    public function GOresiduo(){
        $data = Date("Y-m-d");
        $residuos = Residuo::select(Residuo::raw('nome nome, SUM(massa) kg'))->where('data', "$data")->groupBy('nome')->get();
        return response()->json([
            $residuos
        ]);
    }
    public function resumo()
    {
        $resumos = Resumo::all();
        return response()->json(
            [$resumos]
        );
    }
    
    
}