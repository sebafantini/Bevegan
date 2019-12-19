<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EditarPerfilComtroller extends Controller
{
    //editarInformacion

    public function edit($id){
		// Busco la Pelicula que seleccionó el usuario de la lista
		$usuarioEditar = User::find($id);
        
        return view('editarInformacion',compact('usuarioEditar'));
    }    

    public function update(Request $request, $id){
		$usuarioEditar = User::find($id);

        $usuarioEditar->name = $request->input('name');
        $usuarioEditar->telefono = $request->input('telefono');
        $usuarioEditar->email = $request->input('email');
        $usuarioEditar->direccion = $request->input('direccion');
        $usuarioEditar->provincia = $request->input('provincia');
        $usuarioEditar->municipio = $request->input('municipio');

        
 dd($usuarioEditar);

 //Aquí guardo mis datos tal como el usuario los modifico
		$usuarioEditar->save();

// Redireccionamos a una RUTA
		return redirect('/perfil');
    }    
}
