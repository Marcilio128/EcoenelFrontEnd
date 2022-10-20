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
Route::get('/residuo', [EcoController::class, 'residuo']);
Route::get('/resumo', [EcoController::class, 'resumo']);

Route::get('/resumo/data', [EcoController::class, 'GOresumo']);
Route::get('/residuo/data', [EcoController::class, 'GOresiduo']);
Route::get('/projeto/data', [EcoController::class, 'GOprojeto']);
