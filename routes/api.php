<?php

use App\Http\Controllers\EcoController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/projeto', [EcoController::class, 'projeto']);
Route::get('/residometroce', [EcoController::class, 'residometroCE']);
Route::get('/resumo', [EcoController::class, 'resumo']);

//RESUMOS
Route::get('/resumo/dia', [EcoController::class, 'ResumoDia']);
Route::get('/resumo/mes', [EcoController::class, 'ResumoMes']);
Route::get('/resumo/mesa', [EcoController::class, 'ResumoMesA']);
Route::get('/resumo/ano', [EcoController::class, 'ResumoAno']);


//RESIDUOS
Route::get('/residuo/dia', [EcoController::class, 'ResiduoDia']);
Route::get('/residuo/mes', [EcoController::class, 'ResiduoMes']);
Route::get('/residuo/mesa', [EcoController::class, 'ResiduoMesA']);
Route::get('residuo/ano', [EcoController::class, 'ResiduoAno']);

Route::get('/projeto/data', [EcoController::class, 'GOprojeto']);
