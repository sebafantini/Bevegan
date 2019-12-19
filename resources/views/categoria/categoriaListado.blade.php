@extends('layouts.app')


@section('content')
<h2 class="text-center">Listado de todas tus Categorias</h2>
<div>
    <form class="form-inline" action="/categoriaBuscar" method="GET" >
        @csrf
        <input class="form-control mx-sm-3" type="text" name="busqueda"><input class="btn btn-primary " type="submit" value="Buscar">
        
      </form>
</div>

<div class="spacer">
<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Ver</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $value) 
       
            <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->nombre}}</td>
            <td><a href="/categoriaDetalle/{{$value->id}}"><ion-icon name="eye"></ion-icon></a></td>
            <td><a href="/categoriaEditar/{{$value->id}}"><ion-icon name="create"></ion-icon></a></td>
            <td><a href="/categoriaEliminar/{{$value->id}}"><ion-icon name="trash"></ion-icon></td></a>
            </tr>
        @endforeach
       
    <tr>

    </tr>
    </tbody>
</table>
<div>
    {{$categorias->links()}}
</div>
<a class="btn btn-success " href="/categoriaAgregar">Agregar Categoria</a>
</div>    

@endsection