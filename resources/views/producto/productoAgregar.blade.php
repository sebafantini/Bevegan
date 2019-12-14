@extends('layouts.app')


@section('content')
<h2 class="text-center">Agregar Producto</h2>
<div class="container-fluid">
        <div class="row mt-5">
    <div class="col-lg-8 offset-lg-2">
        @if (count($errors->all())>0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}} </li>
                @endforeach
            </ul>
        @endif

        <form action="/productoGuardar" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Producto</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}">

                <dl class="param param-feature">
                    <dt>Categoría</dt>
                    <dd>
                        <select name="categoria_id" id="categoria_id">
                            @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                            @endforeach
                        </select>
                    </dd>
                </dl> 
                
                <dl class="param param-feature">
                    <dt>Marca</dt>
                    <dd>
                        <select name="marca_id" id="marca_id">
                            @foreach ($marcas as $marca)
                                <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                            @endforeach
                        </select>
                    </dd>
                </dl> 

                <label for="precio">Precio </label>
                <input type="text" class="form-control" name="precio" id="precio" value="{{old('precio')}}">

                <label for="modelo">Modelo </label>
                <input type="text" class="form-control" name="modelo" id="modelo" value="{{old('modelo')}}">

                <label for="imagen">Imagen</label>
                <input type="file" value="imageLoc" class='form-control-file' name="imagen" id="imagen">



            </div>
            <button type="submit" class="btn btn-primary">Registrar producto</button>
        </form>
        
    </div>
</div>
</div>
@endsection