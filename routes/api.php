<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\PaginaController;
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

Route::get("/usuarios",[UsuarioController::class,"index"]);

Route::post("/usuarios",[UsuarioController::class,"store"]);

Route::put("/usuarios",[UsuarioController::class,"update"]);

Route::delete("/usuarios",[UsuarioController::class,"destroy"]);

Route::get("/registros/{id}",[RegistroController::class,"show"]); 

