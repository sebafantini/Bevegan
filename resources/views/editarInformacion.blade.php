@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <section class="editarInformacion">
    <div id="formContainer" class="row align-items-center">
      <div class="col-sm-8 offset-md-2">
        <h1>Actualizar Informacion</h1>
        <form id="formulario"  class="editarInfo" name="formEditar" novalidate action="inicio.html"  method="POST">

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input required name="nombre" type="nombre" class="form-control" id="nombre" aria-describedby="" placeholder="Ingrese Nombre">
              </div>

              <div class="form-group">
                <label for="apellido">Apellido</label>
                <input required name="apellido" type="apellido" class="form-control" id="apellido" aria-describedby="" placeholder="Ingrese Apellido">
              </div>

          <div class="form-group">
            <label for="telefono">Telefono</label>
            <input required name="telefono" type="telefono" class="form-control" id="telefono" aria-describedby="" placeholder="Ingrese Telefono">
          </div>
          <div id="errorEmail"></div>

          <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo">
          </div>
          <div id="errorEmail"></div>

          <div class="form-group">
            <label for="direccion">Direccion</label>
            <input required name="direccion" type="direccion" class="form-control" id="direccion" aria-describedby="" placeholder="Ingrese su Direccion">
          </div>
            <div id="errorNombreUsuario"></div>
          <div class="form-group">
            <label for="provincia">Provincia</label>
            <br>
            <select name="provincia" id="provincia"></select>
          </div>
          <div id="errorProvincia"></div>

          <div class="form-group">
            <label for="municipio">Municipio</label>
            <br>
            <select name="municipio" id="municipio"></select>
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