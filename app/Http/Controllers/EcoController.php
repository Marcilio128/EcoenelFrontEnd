<?php

namespace App\Http\Controllers;

use App\Models\Eco;
use App\Models\Posto;
use App\Models\Residuo;
use App\Models\Resumo;
use Illuminate\Http\Request;

class EcoController extends Controller
{

    public function projeto()
    {
        $projetos = Posto::all();
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
    public function resumo()
    {
        $resumos = Resumo::all();
        return response()->json(
            [$resumos]
        );
    }
    //versões where

    //RESUMOS

    public function ResumoDia()
    {
        $data = Date("Y-m-d");
        $resumos = Resumo::select(Resumo::raw('SUM(kg) kg, SUM(clientes) clientes, SUM(bonus) bonus, SUM(economizado) economizado'))->where([['data', "$data"],['id_projeto',1]])->get();
        return response()->json(
            [$resumos]
        );
    }

    public function ResumoMes()
    {
        $data = Date("Y-m");
        $resumos = Resumo::select(Resumo::raw('SUM(kg) kg, SUM(clientes) clientes, SUM(bonus) bonus, SUM(economizado) economizado'))->where([['data','like', "$data%"], ['id_projeto', 1]])->get();
        return response()->json(
            [$resumos]
        );
    }

    public function ResumoMesA()
    {
        $data = date('Y-m', strtotime('-1 months', strtotime(date('Y-m'))));
        $resumos = Resumo::select(Resumo::raw('SUM(kg) kg, SUM(clientes) clientes, SUM(bonus) bonus, SUM(economizado) economizado'))->where([['data','like', "$data%"], ['id_projeto', 1]])->get();
        return response()->json(
            [$resumos]
        );
    }

    public function ResumoAno()
    {
        $data = Date("Y");
        $resumos = Resumo::select(Resumo::raw('SUM(kg) kg, SUM(clientes) clientes, SUM(bonus) bonus, SUM(economizado) economizado'))->where([['data','like', "$data%"], ['id_projeto', 1]])->get();
        return response()->json(
            [$resumos]
        );
    }

    //RESIDUOS

    public function ResiduoDia(){
        $data = Date("Y-m-d");
        $residuos = Residuo::select(Residuo::raw('nome nome, SUM(massa) kg'))->where([
            ['id_projeto', 1],
            ['data', "$data"]
        ])->orderBy('kg','desc')->groupBy('nome')->get();
        return response()->json([
            $residuos
        ]);
    }
    public function ResiduoMes(){
        $data = Date("Y-m");
        $residuos = Residuo::select(Residuo::raw('nome nome, SUM(massa) kg'))->where([
            ['id_projeto', 1],
            ['data','like', "$data%"]
        ])->orderBy('kg','desc')->groupBy('nome')->get();
        return response()->json([
            $residuos
        ]);
    }

    public function ResiduoMesA(){
        $data = date('Y-m', strtotime('-1 months', strtotime(date('Y-m'))));
        $residuos = Residuo::select(Residuo::raw('nome nome, SUM(massa) kg'))->where([
            ['id_projeto', 1],
            ['data','like', "$data%"]
        ])->orderBy('kg','desc')->groupBy('nome')->get();
        return response()->json([
            $residuos
        ]);
    }

    public function ResiduoAno(){
        $data = Date("Y");
        $residuos = Residuo::select(Residuo::raw('nome nome, SUM(massa) kg'))->where([
            ['id_projeto', 1],
            ['data','like', "$data%"]
        ])->orderBy('kg','desc')->groupBy('nome')->get();
        return response()->json([
            $residuos
        ]);
    }

    public function GOprojeto()
    {
        $data = Date("Y-m-d");
        $resumos = Posto::select(Posto::raw('nome nome, quilos quilo, unidades unidade, litros litro'))
        ->where('data', "$data")
        ->orderBy('quilos', 'desc')
        ->get(Posto::paginate(5));
        return response()->json(
            [$resumos]
        );
    }



}
