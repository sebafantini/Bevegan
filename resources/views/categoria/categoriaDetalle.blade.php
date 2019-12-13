@extends('layouts.app')
@section('content')
<h2 class="text-center">Detalle de la Categoria</h2>
<div class="row mt-5">
    <div class="col-lg-4 offset-lg-4">
            <ul class="list-group list-group-flush">
                <li class="list-group-item ">Categoria: {{$categorias->nombre}}</li>
            </ul>
    </div>
       <a href="/categoriaListado" class="btn btn-danger">Volver</a>

        
    </div>

</div>
@endsection