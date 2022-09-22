<?php

namespace App\Http\Controllers;

use App\Models\Eco;
use Illuminate\Http\Request;

class EcoController extends Controller
{
    public function anocorrente(){
        $ecos = new Eco;
        return view('anocorrente');
    }

    public function index()
    {
        $ecos = new Eco;
        return view('DiaAtual');
    }

    public function mesanterior(){
        $ecos = new Eco;
        return view('mesanterior');
    }

        public function mesatual(){
        $ecos = new Eco;
        return view('mesatual');
    }
}
