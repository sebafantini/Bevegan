@extends('layouts.app')


@section('content')
<h2 class="text-center">Editar Marca {{ $marcaEditar->nombre }}</h2>
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
        <form action="/marcaEditadaGuardar/{{ $marcaEditar->id }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                 <label for="nombre">Nombre de la Marca </label>
                 <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $marcaEditar->nombre) }}">
            </div>


             <button type="submit" class="btn btn-primary">Actualizar Marca</button>
        </form>
        <a href="/marcaListado" class="btn btn-danger">Volver</a>
     </div>

</div>
</div>
@endsection