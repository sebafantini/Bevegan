@extends('layouts.app')
@section('content')
<h2 class="text-center">Detalle de la Marca</h2>
<div class="row mt-5">
    <div class="col-lg-4 offset-lg-4">
            <ul class="list-group list-group-flush">
                <li class="list-group-item ">Marca: {{$marcas->nombre}}</li>
            </ul>
    </div>
       <a href="/marcaListado" class="btn btn-danger">Volver</a>


    </div>

</div>
@endsection