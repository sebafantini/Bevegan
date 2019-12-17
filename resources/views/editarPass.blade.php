@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="col-sm-8 offset-md-2">
        <h1>Cambiar Contraseña</h1> <br> <br>

        <div>
            <label class="sr-only" for="password">Contraseña</label>
            <div class="input-group mb-2">
              <input required name="password" type="password" class="form-control" id="password" placeholder="Contraseña">
              <div class="input-group-prepend">
                  <!--Aquí incorpore el ojo de la libreria https://ionicons.com/-->
                  <!--Noten que le agregue la clase ojo, para lograr usarlo por mas de una vez icono del ojo-->
                  <div class="input-group-text"><ion-icon id="ojoPassword" name="eye"></ion-icon></div>
              </div>
              <div id="errorPassword"></div>
              <small class="form-text text-muted">Al menos 6 caracteres, debe contenter letras en mayúsculas, minúsculas y números</small>
            </div>
          </div>
          <div >
            <label class="sr-only" for="passwordRepeat">Repetir contraseña</label>
            <div class="input-group mb-2">
              <input required name="password" type="password" class="form-control" id="passwordRepeat" placeholder="Repetir contraseña">
              <div class="input-group-prepend">
                  <!--Aquí incorpore el ojo de la libreria https://ionicons.com/-->
                  <!--Noten que le agregue un id al icono del ojo-->
                  <div class="input-group-text"><ion-icon id="ojoPasswordRepeat" name="eye"></ion-icon></div>
              </div>
              <div id="errorPasswordRepeat"></div>
              <small class="form-text text-muted">Al menos 6 caracteres, debe contenter letras en mayúsculas, minúsculas y números</small>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Guardar</button>
    </div>

  </div>






  <script src="{{asset('js/editarInformacion.js')}} "></script>
@endsection