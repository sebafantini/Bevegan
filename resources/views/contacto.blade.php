@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="d-none d-md-block  p-3 col-12 col-sm-0 col-md-7 col-lg-7 align-center">
              <h4>¿Dónde estamos?</h2>
              <br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2161.8191779552767!2d-58.443827430223614!3d-34.548944726549415!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfb39818e7624ac76!2sDigital%20House!5e0!3m2!1ses-419!2sar!4v1568849065488!5m2!1ses-419!2sar" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

            <div class="  p-3 col-12 col-sm-12 col-md-5 col-lg-5 align-center">

              <h4 class="text-center ">¿Tenés alguna duda? ¡Contactanos!</h4>
              <br>
              <form class="" action="" method="post">

                <div class="form-group">
                  <label for="inputNombre">Nombre</label>
                  <input type="text" name= "nombre"  class="form-control" id="inputNombre" placeholder="Nombre">
                </div>


                <div class="form-group">
                  <label for="inputEmail">Email</label>
                  <input type="email" name="email" value= "<?=isset($errores['email'])? "":old('email') ;?>" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Ingrese su email">
                </div>

                <div class="form-group">
                  <label for="inputUsuario">Mensaje</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>


                <button type="submit" class="btn btn-primary botonRegistro" id="botonRegistro" >Enviar Consulta</button>

              </form>
            </div>
          </div>




    </div>

    @endsection