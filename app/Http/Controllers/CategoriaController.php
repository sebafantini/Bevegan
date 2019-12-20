<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;
use Facade\FlareClient\View;

class CategoriaController extends Controller
{
    public function index (){
        $categorias = Categoria::paginate(8);
        //$categorias = categoria::all();
        return view ('categoria.categoriaListado') -> with('categorias', $categorias);
    }

    public function create(){
        return view('categoria.categoriaAgregar');
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
        //Aquí creo el objeto película con los datos del formulario
        $categoria = new categoria($request->all());
		

        //Invoco al método save para guardar la película
        $categoria->save();
        return  redirect('/categoriaListado');
    }    
    public function show($id){
        $categorias = categoria::find($id);
        return view('categoria.categoriaDetalle')->with('categorias',$categorias);

    }

    public function edit($id){
		// Busco la Pelicula que seleccionó el usuario de la lista
		$categoriaEditar = categoria::find($id);

        
        return view('categoria.categoriaEditar')->with('categoriaEditar',$categoriaEditar);
        
        //Otra forma de enviar varios resultados a la vista
        //-------------------------
        //return view('movies.editarPelicula')->with(['peliculaEditar' => $PeliculaEditar]),['generos' => $generos ]);

    }
    
    public function update(Request $request, $id){        
		$categoriaEditar = categoria::find($id);
        
		$categoriaEditar->nombre = $request->input('nombre');
        //dd($categoriaEditar);

        //Aquí guardo mis datos tal como el usuario los modifico
		$categoriaEditar->save();

		// Redireccionamos a una RUTA
		return redirect('/categoriaListado');
    }    

    public function delete($id){
        $categoria =  categoria::find($id);
        $categoria->delete();
        return redirect('/categoriaListado');
  
      }

      public function search(Request $request){
        //dd($request);
        $buscar = $request->busqueda;
        //dd($buscar);
        $categorias = categoria::where('nombre','like','%'.$buscar.'%')->paginate(6);
        return view('categoria.categoriaListado')->with('categorias',$categorias);

        //$vac = compact('peliculas',$peliculas);
        //return view('listadoPeliculas',compact('peliculas','otrosDatos','masDatos'));
        //Otras formas de enviar datos a la vista
        //return view('listadoPeliculas')->with(['peliculas' => $peliculas], ['otrosDatos' => $otrosDatos]);

        //return view('listadoPeliculas')->with('peliculas',$peliculas)
                                      // ->with('mensaje','Los datos fueron encontrados...') ;

    }      

}
