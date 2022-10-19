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
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/Escolha', function () {
    return view('Escolha');
})->name('Escolha')->middleware('auth','3e');

Route::get('/EcoEnelEstado', function () {
    return view('EstadoEco');
})->name('eco')->middleware('auth','eco');

Route::get('/EquatorialEstado', function () {
    return view('EquatorialEstado');
})->name('equatorial')->middleware('auth','e+');

Route::get('/ResíduosColetados', function () {
    return view('Residometro');
})->middleware('auth');
Route::get('/Grafico', function () {
    return view('Grafico');
})->middleware('auth');
Route::get('/TabelasColetores', function () {
    return view('GrandesColetores');
})->middleware('auth');
