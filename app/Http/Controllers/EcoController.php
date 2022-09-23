<?php

namespace App\Http\Controllers;

use App\Models\Eco;
use Illuminate\Http\Request;

class EcoController extends Controller
{
    public function anocorrente()
    {
        $Eco = [

            //soma de beneficiados
            "beneficio" => Eco::select(Eco::raw('SUM(beneficiado) as ben'))->where('unidade',1)->get(),
            //soma de bônus
            "bonus" => Eco::select(Eco::raw('SUM(bonus) as bon'))->where('unidade',1)->get(),
            //soma de coletados
            "coletados" => Eco::select(Eco::raw('SUM(Coletado) as col'))->where('unidade',1)->get(),
            //soma de economizados
            "economizado" => Eco::select(Eco::raw('SUM(economizado) as econ'))->where('unidade',1)->get(),
];
     

        return view('anocorrente', ['Eco' => $Eco]);
    }

    public function index()
    {
        $Eco = [

            //soma de beneficiados
            "beneficio" => Eco::select(Eco::raw('SUM(beneficiado) as ben'))->where('unidade',1)->get(),
            //soma de bônus
            "bonus" => Eco::select(Eco::raw('SUM(bonus) as bon'))->where('unidade',1)->get(),
            //soma de coletados
            "coletados" => Eco::select(Eco::raw('SUM(Coletado) as col'))->where('unidade',1)->get(),
            //soma de economizados
            "economizado" => Eco::select(Eco::raw('SUM(economizado) as econ'))->where('unidade',1)->get(),
];

        return view('DiaAtual', ['Eco' => $Eco]);
    }

    public function mesanterior()
    {

        $Eco = [

            //soma de beneficiados
            "beneficio" => Eco::select(Eco::raw('SUM(beneficiado) as ben'))->where('unidade',1)->get(),
            //soma de bônus
            "bonus" => Eco::select(Eco::raw('SUM(bonus) as bon'))->where('unidade',1)->get(),
            //soma de coletados
            "coletados" => Eco::select(Eco::raw('SUM(Coletado) as col'))->where('unidade',1)->get(),
            //soma de economizados
            "economizado" => Eco::select(Eco::raw('SUM(economizado) as econ'))->where('unidade',1)->get(),
];

        return view('mesanterior', ['Eco' => $Eco]);
    }

    public function mesatual()
    {
        $Eco = [

            //soma de beneficiados
            "beneficio" => Eco::select(Eco::raw('SUM(beneficiado) as ben'))->where('unidade',1)->get(),
            //soma de bônus
            "bonus" => Eco::select(Eco::raw('SUM(bonus) as bon'))->where('unidade',1)->get(),
            //soma de coletados
            "coletados" => Eco::select(Eco::raw('SUM(Coletado) as col'))->where('unidade',1)->get(),
            //soma de economizados
            "economizado" => Eco::select(Eco::raw('SUM(economizado) as econ'))->where('unidade',1)->get(),
];

        return view('mesatual', ['Eco' => $Eco]);
    }
}
