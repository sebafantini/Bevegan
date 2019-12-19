<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\categoria;
use App\marca;
use Illuminate\Validation\Rules\Unique;

class ProductoController extends Controller
{
    public function index (){
        $productos = Producto::paginate(6);
        //$productos = categoria::all();
        return view ('producto.productoListado') -> with('productos', $productos);
    }
    public function show($id){
        $productos = Producto::find($id);
        return view('producto.productoDetalle')->with('productos',$productos);
    }    


    public function create(){

        $categorias = categoria::all();
        $marcas = marca::all();
        return view('producto.productoAgregar',compact('categorias','marcas'));        
    }
    
    public function save(Request $request){
        //Aquí creo las reglas de la validación 
        // Aquí les dejo la ayuda de Laraveles.com sobre las reglas de validación https://docs.laraveles.com/docs/5.5/validation#available-validation-rules
        $reglas = [
            'nombre'=> 'required',
            'categoria_id'=> 'required',
            'marca_id'=> 'required',            
            'precio' => 'required|numeric',
            'modelo'=> 'required',
            'imagen' => 'required|mimes:jpeg,jpg,png,gif|max:100000'
        ];
        //Ahora debo disponer los mensajes en base a las reglas señaladas por cada campo
        $mensajes = [
            'nombre.required' => 'Este campo :attribute es requerido...',
            'categoria_id.required' => 'Este campo :attribute es requerido...',
            'marca_id.required' => 'Este campo :attribute es requerido...',
            'precio.required' => 'Este campo :attribute es requerido...',
            'precio.ineger' => 'Este campo :attribute debe ser numerico...',
            'modelo.required' => 'Este campo :attribute es requerido...'
        ];
        
        //Laravel nos ofrece un método para validar al cual le debo pasar los datos del formulario, mas las reglas y los mensajes
        $this->validate($request,$reglas,$mensajes);
        //Aquí creo el objeto película con los datos del formulario
        $producto = new Producto([
            'nombre' => $request->input("nombre"),
            'categoria_id' => $request->input("categoria_id"),
            'marca_id' => $request->input("marca_id"),
            'precio' => $request->input("precio"),
            'modelo' => $request->input("modelo"),                        
            'imagen' => 'public/img/productos/imagen1.png'            
        ]);        
        
        
            

        $path = $request->file('imagen')->store("public");    
        $nombreArchivo = basename($path);
        if (!is_null($path)) {            
            $producto->imagen = $nombreArchivo;
        }



        //Invoco al método save para guardar la película
        $producto->save();
        return  redirect('/productoListado');
    }        


    public function edit($id){
		// Busco la Pelicula que seleccionó el usuario de la lista
		$productoEditar = Producto::find($id);
        $categorias = categoria::all();
        $marcas = marca::all();
        
        return view('producto.productoEditar',compact('productoEditar','categorias','marcas'));
        //return view('producto.productoEditar')->with(['productoEditar' =>$productoEditar], ['categorias'=>$categorias], ['marcas'=>$marcas]);
        
        //Otra forma de enviar varios resultados a la vista
        //-------------------------
        //return view('movies.editarPelicula')->with(['peliculaEditar' => $PeliculaEditar]),['generos' => $generos ]);

    }
    
    public function update(Request $request, $id){        
        
        $reglas = [
            'nombre'=> 'required',
            'categoria_id'=> 'required',
            'marca_id'=> 'required',            
            'precio' => 'required|numeric',
            'modelo'=> 'required',
            'imagen' => 'sometimes|mimes:jpeg,jpg,png,gif|max:100000'
        ];
        //Ahora debo disponer los mensajes en base a las reglas señaladas por cada campo
        $mensajes = [
            'nombre.required' => 'Este campo :attribute es requerido...',
            'categoria_id.required' => 'Este campo :attribute es requerido...',
            'marca_id.required' => 'Este campo :attribute es requerido...',
            'precio.required' => 'Este campo :attribute es requerido...',
            'precio.ineger' => 'Este campo :attribute debe ser numerico...',
            'modelo.required' => 'Este campo :attribute es requerido...'
        ];
        
        //Laravel nos ofrece un método para validar al cual le debo pasar los datos del formulario, mas las reglas y los mensajes
        $this->validate($request,$reglas,$mensajes);        
        
        
        $productoEditar = Producto::find($id);        
        $productoEditar->nombre = $request->input('nombre');
        $productoEditar->categoria_id = $request->input('categoria_id');
        $productoEditar->marca_id = $request->input('marca_id');
        $productoEditar->precio = $request->input('precio');
        $productoEditar->modelo = $request->input('modelo');
        
        $path = $request->file('imagen');
        if (!is_null($path)) {            
            $path = $request->file('imagen')->store("public");    
            $nombreArchivo = basename($path);                
            $productoEditar->imagen = $nombreArchivo;
        }        
        //dd($productoEditar);

        //Aquí guardo mis datos tal como el usuario los modifico
		$productoEditar->save();

		// Redireccionamos a una RUTA
		return redirect('/productoListado');
    }        

    public function delete($id){
        $producto =  Producto::find($id);
        $producto->delete();
        return redirect('/productoListado');
  
      }

      public function search(Request $request){
        //dd($request);
        $buscar = $request->busqueda;
        //dd($buscar);
        $productos = Producto::where('nombre','like','%'.$buscar.'%')->paginate(6);
        return view('producto.productoListado')->with('productos',$productos);

    }          

    public function vistaUsuario (){
        $productos = Producto::paginate(6);
        $marcas = marca::all();
        $categorias = categoria::all();
        //$productos = categoria::all();
        return view ('productos', compact('productos', 'marcas', 'categorias'));
    }

}
