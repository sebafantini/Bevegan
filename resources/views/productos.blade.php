@extends('layouts.app')


@section('content')
 



<h2 class="fp-titulo-bienvenida text-center">Nuestros Productos</h2>   
<br>
<div class="container-fluid row">
  
        <div class="col-12 row-cols-12 row-cols-md-7 row-cols-lg-7">
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4">
              @foreach ($productos as $value)  
              <div class="col mb-3">
                  <div class="card h-100">
                    <img src="/storage/{{$value->imagen}}" class="rounded mx-auto d-block imagenListaProducto" alt="...">
                          <div class="card-body">
                              <h5 class="card-title">{{$value->nombre}}</h5>
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">{{$value->categoria['nombre']}}</li>
                                  <li class="list-group-item">{{$value->marca['nombre']}}</li>
                                  <li class="list-group-item">{{$value->precio}}</li>
                            </ul>  
                              <a href="/addtocart/{{$value->id}}"><button type="button" class="btn btn-outline-success">Comprar</button></a>                        
                              <button type="button" class="btn btn-outline-warning">Favoritos</button>
                          </div>
                  </div>
              </div>        
              @endforeach    
                    
            </div>
       
        </div>

                   
    </div>

    <div>
      {{$productos->links()}}
    </div>













@endsection