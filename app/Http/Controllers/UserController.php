<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /** Formulario de usuario */
    public function userform(){

        $rol=Rol::all();

        return view('usuarios.userform', compact('rol'));
    }

    /** Guardar usuarios */
    public function save(Request $request){

        $validator = $this->validate($request, [
            'nombre'=> 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:usuarios'
        ]);

        $userdata = request()->except("_token");
        Usuario::insert($userdata);

        return back()->with('usuarioGuardado', "Usuario Guardado");
    }
}
