<?php

use App\Http\Controllers\AbogadoAsuntoController;
use App\Http\Controllers\AsuntoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('prueba.middleware')->get('/abogado-asuntos', [AbogadoAsuntoController::class, 'index']);
Route::middleware('prueba.middleware')->post('/asuntos', [AsuntoController::class, 'store']);
