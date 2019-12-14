@extends('layouts.app')


@section('content')
<h2 class="text-center">Listado de todos los Productos</h2>
<div>
    <form class="form-inline" action="/productoBuscar" method="GET" >
        @csrf
        <input class="btn btn-primary " type="submit" value="Buscar"><input class="form-control mx-sm-3" type="text" name="busqueda">
        <a class="btn btn-success " href="/productoAgregar">Agregar producto</a>
      </form>
</div>

<div class="spacer">
<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Marca</th>
        <th>Precio</th>
        <th>Ver</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($productos as $value)        
            <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->nombre}}</td>
            <td>{{$value->categoria['nombre']}}</td>
            <td>{{$value->marca['nombre']}}</td>
            <td>{{$value->precio}}</td>
            <td><a href="/productoDetalle/{{$value->id}}"><ion-icon name="eye"></ion-icon></a></td>
            <td><a href="/productoEditar/{{$value->id}}"><ion-icon name="create"></ion-icon></a></td>
            <td><a href="/productoEliminar/{{$value->id}}"><ion-icon name="trash"></ion-icon></td></a>
            </tr>
        @endforeach       
    <tr>

    </tr>
    </tbody>
</table>
<div>
    {{$productos->links()}}
</div>

</div>    

@endsection