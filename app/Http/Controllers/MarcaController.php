<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\marca;

class MarcaController extends Controller
{
    public function index (){
        $marcas = marca::paginate(8);
        return view ('marca.marcaListado') -> with('marcas', $marcas);
    }
    public function create(){
        return view('marca.marcaAgregar');
    }
    public function save(Request $request){
  //Aquí creo las reglas de la validación
  // Aquí les dejo la ayuda de Laraveles.com sobre las reglas de validación https://docs.laraveles.com/docs/5.5/validation#available-validation-rules
        $reglas = [
            'nombre'=> 'required'
        ];
  //Ahora debo disponer los mensajes en base a las reglas señaladas por cada campo
        $mensajes = [
            'nombre.required' => 'Este campo :attribute es requerido...'
        ];

  //Laravel nos ofrece un método para validar al cual le debo pasar los datos del formulario, mas las reglas y los mensajes
        $this->validate($request,$reglas,$mensajes);

  //Aquí creo el objeto marca con los datos del formulario
        $marca = new marca($request->all());


  //Invoco al método save para guardar la marca
        $marca->save();
        return  redirect('/marcaListado');
    }
    public function show($id){
        $marcas = marca::find($id);
        return view('marca.marcaDetalle')->with('marcas',$marcas);
    }

    public function edit($id){
	// Busco la marca que seleccionó el usuario de la lista
		$marcaEditar = marca::find($id);

    return view('marca.marcaEditar')->with('marcaEditar',$marcaEditar);

  //Otra forma de enviar varios resultados a la vista
  //-------------------------
  //return view('movies.editarPelicula')->with(['peliculaEditar' => $PeliculaEditar]),['generos' => $generos ]);
    }

    public function update(Request $request, $id){
		$marcaEditar = marca::find($id);

		$marcaEditar->nombre = $request->input('nombre');
 //dd($marcaEditar);

 //Aquí guardo mis datos tal como el usuario los modifico
		$marcaEditar->save();

// Redireccionamos a una RUTA
		return redirect('/marcaListado');
    }
    public function delete($id){
        $marca =  marca::find($id);
        $marca->delete();
        return redirect('/marcaListado');

      }

      public function search(Request $request){
        $buscar = $request->busqueda;  
        $marcas = marca::where('nombre','like','%'.$buscar.'%')->paginate(6);
        return view('marca.marcaListado')->with('marcas',$marcas);

    }

}
