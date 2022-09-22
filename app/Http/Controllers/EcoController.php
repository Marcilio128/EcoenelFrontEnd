<?php

namespace App\Http\Controllers;

use App\Models\Eco;
use Illuminate\Http\Request;

class EcoController extends Controller
{
    public function anocorrente()
    {
        $Eco = Eco::select(Eco::raw('SUM(beneficiado) as ben'))->where('unidade',1)->get();

        return view('anocorrente', ['Eco' => $Eco]);
    }

    public function index()
    {
        $Eco = Eco::select(Eco::raw('SUM(beneficiado) as ben'))->where('unidade',1)->get();

        return view('DiaAtual', ['Eco' => $Eco]);
    }

    public function mesanterior()
    {

        $Eco = Eco::select(Eco::raw('SUM(beneficiado) as ben'))->where('unidade',1)->get();

        return view('mesanterior', ['Eco' => $Eco]);
    }

    public function mesatual()
    {
        $Eco = Eco::select(Eco::raw('SUM(beneficiado) as ben'))->where('unidade',1)->get();

        return view('mesatual', ['Eco' => $Eco]);
    }
}
