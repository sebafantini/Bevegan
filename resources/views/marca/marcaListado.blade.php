@extends('layouts.app')


@section('content')
<h2 class="text-center">Listado de todas tus Marcas</h2>
<div>
    <form class="form-inline" action="/buscarMarca" method="GET" >
        @csrf
        <input class="btn btn-primary " type="submit" value="Buscar"><input class="form-control mx-sm-3" type="text" name="busqueda">
        <a class="btn btn-success " href="/marcaAgregar">Agregar Marca</a>
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
       
        @foreach ($marcas as  $value)
            <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->title}}</td>
            <td><a href="/marcaDetalle/{{$value->id}}"><ion-icon name="eye"></ion-icon></a></td>
            <td><a href="/marcaEditar/{{$value->id}}"><ion-icon name="create"></ion-icon></a></td>
            <td><a href="/marcaEliminar/{{$value->id}}"><ion-icon name="trash"></ion-icon></td></a>
            </tr>

        @endforeach
    <tr>

    </tr>
    </tbody>
</table>
<div>
    {{$marcas->links()}}
</div>

</div>    

@endsection