@extends('layouts.app')
@section('content')
<h2 class="text-center">Detalle del Producto</h2>
<div class="row mt-5">
    <div class="col-lg-4 offset-lg-4">
            <ul class="list-group list-group-flush">
                <li class="list-group-item ">
                <img class = "rounded mx-auto d-block imagenListaProducto" src="/storage/{{$productos->imagen}}" alt="">    
                </li>
            </ul>            

            <ul class="list-group list-group-flush">
                <li class="list-group-item ">Producto: {{$productos->nombre}}</li>
            </ul>            
            <ul class="list-group list-group-flush">
                <li class="list-group-item ">Categoria: {{$productos->categoria['nombre']}}</li>
            </ul>
            <ul class="list-group list-group-flush">
                <li class="list-group-item ">Marca: {{$productos->marca['nombre']}}</li>
            </ul>
            <ul class="list-group list-group-flush">
                <li class="list-group-item ">Precio: $ {{$productos->precio}}</li>
            </ul>            
            <ul class="list-group list-group-flush">                
                <a href="/productoListado" class="btn btn-danger">Volver</a>        
            </ul>            


</div>
@endsection