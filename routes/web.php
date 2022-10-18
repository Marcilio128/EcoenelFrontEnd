<?php

use Illuminate\Support\Facades\Route;
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
})->name('cadastro');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/Escolha', function () {
    return view('Escolha');
})->name('Escolha')->middleware('auth');

Route::get('/EcoEnelEstado', function () {
    return view('EstadoEco');
})->middleware('auth');
Route::get('/E+Estado', function () {
    return view('EstadoE+');
})->middleware('auth');
Route::get('/ResíduosColetados', function () {
    return view('Residometro');
})->middleware('auth');
Route::get('/Grafico', function () {
    return view('Grafico');
})->middleware('auth');
Route::get('/TabelasColetores', function () {
    return view('GrandesColetores');
})->middleware('auth');
