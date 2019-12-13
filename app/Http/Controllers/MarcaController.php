<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\marca;

class MarcaController extends Controller
{
    public function index (){
        $marcas = marca::paginate(6);
        
        return view ('marcas.marcaListado') -> with('marcas', $marcas);
    }    
}
