<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class PaginaController extends Controller
{
    //


    public function verUsuarios()
    {
        $usuarios = Usuario::all();
        return view("usuarios", ["usuarios"=>$usuarios]);

    }


    public function verUsuario($id)
    {
        $usuarios = Usuario::find($id);
        return view("usuario", ["usuario"=>$usuario]);

    }
}
