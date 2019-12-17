@extends('layouts.app')


@section('content')

<div class="container-fluid row">
        <div class="container">
                <div class="row fp-contenedor-login">




<div class="  p-3 col-12 col-sm-12 col-md-8 col-lg-6 align-center">

    
    <h2 class="fp-titulo-bienvenida">Mi Cuenta!</h2>
    <div  class=" contenedor-informacion">
        <div class="linea">
                <h6 class="titulo-contenedor">Informacion personal</h6><a class="Editar Informacion de cuenta" href="/editarInformacion">Editar</a>
                <br>
                <a class="" href="/editarPass">Editar Password</a>
        </div>
        <br>
        <div class="contenido-contenedor">
        <p class="informacion-mi-cuenta"></p> <img class="icono-cuenta" src="img/icon-usuario.png" alt=""> {{ Auth::user()->name }}</p>
        <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-email.png" alt=""> Email: {{ Auth::user()->email }}</p>                                            
        <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-telefono.png" alt=""> Telefono: {{ Auth::user()->telefono }}</p>
        <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-ciudad.png" alt=""> Direccion: {{ Auth::user()->calle }} {{ Auth::user()->numero }}</p>
        <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-ciudad.png" alt=""> Piso: {{ Auth::user()->piso }}</p>
        <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-ciudad.png" alt=""> Letra: {{ Auth::user()->letra }}</p>
        <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-ciudad.png" alt=""> Provincia: {{ Auth::user()->provincia }}</p>
        <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-ciudad.png" alt=""> Localidad: {{ Auth::user()->municipio }}</p>
        
        </div>
</div>

                
        
       
                      
 </div>
       
    
                    
            
           
                          
     
    
@endsection