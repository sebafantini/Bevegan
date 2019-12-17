@extends('layouts.app')


@section('content')
<h1>PRODUCTOS POR AHORA</h1>
<div class="row">

  @foreach ($productos as $value)
 <div class="card" style="width: 18rem;">
  <img src="/storage/{{$value->imagen}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$value->nombre}}</h5>    
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$value->categoria['nombre']}}</li>
    <li class="list-group-item">{{$value->marca['nombre']}}</li>
    <li class="list-group-item">$ {{$value->precio}}</li>
  </ul>

  <div class="card-body">
    <a href="#" class="card-link">Comprar</a>
    <a href="#" class="card-link">Favoritos</a>
  </div>
  @endforeach
</div>



    </div>
    {{$productos->links()}}

  </div>
@endsection