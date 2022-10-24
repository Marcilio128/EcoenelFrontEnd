<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('Cadastro');
});

Route::get('/Escolha', function () {
    return view('Escolha');
});

Route::get('/EcoEnelEstado', function () {
    return view('EstadoEco');
});

Route::get('/EquatorialEstado', function () {
    return view('EquatorialEstado');
});

Route::get('/ResíduosColetados', function () {
    return view('Residometro');
});



Route::get('/Grafico', function () {
    return view('Grafico');
});
Route::get('/TabelasColetores', function () {
    return view('GrandesColetores');
});

Route::get('/ResiduosEquatorial', function () {
    return view('ResidometroEquatorial');
});

Route::get('/GraficoEquatorial', function () {
    return view('graficoequatorial');
});

Route::get('/TabelasColetoresEquatorial', function () {
    return view('Tabelaequatorial');
});




Route::get('/3eDados', function () {
    return view('Residometro3e');
});

Route::get('/3eGrafico', function () {
    return view('Grafico3e');
});


Route::get('/Tabelas3e', function () {
    return view('Tabelas3e');
});