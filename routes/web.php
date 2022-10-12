<?php

use Illuminate\Support\Facades\Route;

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
    return view('Estado');
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
