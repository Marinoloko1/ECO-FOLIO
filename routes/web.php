<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
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
    return view('usuarios');
});

Route::get("usuarios/{id}", [PaginaController::class, "verUsuario"]);

Route::get("usuarios", [PaginaController::class, "verUsuarios"]);


