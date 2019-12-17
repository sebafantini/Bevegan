@extends('layouts.app')


@section('content')
<h2 class="text-center">Agregar Marca</h2>
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

        <form action="/marcaGuardar" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre de la Marca</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}">
            </div>
            <button type="submit" class="btn btn-primary">Registrar Marca</button>
        </form>

    </div>
</div>
</div>
@endsection