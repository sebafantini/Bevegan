@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <section class="editarInformacion">
    <div id="formContainer" class="row align-items-center">
      <div class="col-sm-8 offset-md-2">
        <h1>Actualizar Informacion</h1>
        <form id="formulario"  class="editarInfo" name="formEditar" novalidate action="/perfilEditardaGuardar/{{ $usuarioEditar->id }}"  method="POST">

            <div class="form-group">
                <label for="name">Nombre</label>
                <input required name="name" type="name" class="form-control" id="name" aria-describedby="" value="{{ old('name', $usuarioEditar->name) }}" placeholder="Ingrese Nombre">
              </div>


          <div class="form-group">
            <label for="telefono">Telefono</label>
            <input required name="telefono" type="telefono" class="form-control" id="telefono" aria-describedby="" value="{{ old('telefono', $usuarioEditar->telefono) }}" placeholder="Ingrese Telefono">
          </div>
          <div id="errorEmail"></div>

          <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{ old('email', $usuarioEditar->email) }}" placeholder="Ingrese su correo">
          </div>
          <div id="errorEmail"></div>

          <div class="form-group">
            <label for="direccion">Direccion</label>
            <input required name="direccion" type="direccion" class="form-control" id="direccion" value="{{ old('direccion', $usuarioEditar->direccion) }}" aria-describedby="" placeholder="Ingrese su Direccion">
          </div>
            <div id="errorNombreUsuario"></div>
          
          
            <div class="form-group">
            <label for="provincia">Provincia</label>
            <br>
            <select name="provincia" id="provincia"  value="{{ old('provincia', $usuarioEditar->direccion) }}" ></select>
          </div>
          <div id="errorProvincia"></div>

          <div class="form-group">
            <label for="municipio">Municipio</label>
            <br>
            <select name="municipio" id="municipio" value="{{ old('municipio', $usuarioEditar->municipio) }}"></select>
          </div>
          <div id="errorMunicipio"></div>



          <button type="submit" class="btn btn-primary">Guardar</button>

        </form>
      </section>
      </div>
    </div>
  </div>






  <script src="{{asset('js/editarInformacion.js')}} "></script>
@endsection