<?php

namespace App\Http\Controllers;

use App\Models\Eco;
use Illuminate\Http\Request;

class EcoController extends Controller
{
    public function all(){
        $eco = new Eco;

        
            return view('/layout/main');
    }
}
