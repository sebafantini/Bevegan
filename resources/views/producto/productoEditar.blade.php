@extends('layouts.app')


@section('content')
<h2 class="text-center">Editar Producto {{ $productoEditar->nombre }}</h2>
<div class="container-fluid">
<div class="row mt-5">
     <div class="col-lg-8 offset-lg-2">
         {{-- Si hay errores los muestro aquí--}}
        @if (count($errors->all())>0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}} </li>
                @endforeach
            </ul>
        @endif
        <form action="/productoEditadaGuardar/{{ $productoEditar->id }}" method="POST" enctype="multipart/form-data">
        @csrf    
            <div class="form-group">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item ">
                    <img src="/storage/{{$productoEditar->imagen}}" alt="">    
                    </li>
                </ul>                 

                <label for="nombre">Nombre de la producto </label>
                 <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $productoEditar->nombre) }}">
                 
                 <label for="categoria_id">Categoria </label>
                 <select name="categoria_id" class="form-control" id="categoria_id">
                    <option value="{{$productoEditar->categoria['id']}}" selected>{{$productoEditar->categoria['nombre']}}</option>
                    @foreach ($categorias as $categoria)
                        @if ($categoria->nombre != $productoEditar->categoria['nombre'])
                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                        @endif
                    @endforeach
                </select>                
                
                <label for="marca_id">Marca </label>
                 <select name="marca_id" class="form-control" id="marca_id">
                    <option value="{{$productoEditar->marca['id']}}" selected>{{$productoEditar->marca['nombre']}}</option>
                    @foreach ($marcas as $marca)
                        @if ($marca->nombre != $productoEditar->marca['nombre'])
                            <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                        @endif
                    @endforeach
                </select>
 
                 <label for="precio">Precio </label>
                 <input type="text" class="form-control" name="precio" id="precio" value="{{ old('precio', $productoEditar->precio) }}">

                 <label for="modelo">Modeo </label>
                 <input type="text" class="form-control" name="modelo" id="modelo" value="{{ old('modelo', $productoEditar->modelo) }}">


                <label for="imagen">Cargar / Modificar Imagen</label>
                <input type="file" value="imageLoc" class='form-control-file' name="imagen" id="imagen">



            </div>
             
             
             <button type="submit" class="btn btn-primary">Actualizar producto</button>
        </form>
        <a href="/productoListado" class="btn btn-danger">Volver</a>    
     </div>
     
</div>
</div>
@endsection