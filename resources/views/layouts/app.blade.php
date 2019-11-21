<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><header>
    <script src="https://kit.fontawesome.com/66735e3f01.js"></script>
    <link rel="stylesheet" href="css/master.css">

    <title>Document</title>
</head>
<body>
    
        <nav class="navbar navbar-expand-md  navbar-light bg-white fixed-top ">
                
                <a class="navbar-brand" href="#"><img class="fp-logo-web" src="img/be_veg.png" alt=""></a>
                    
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
         
                <!-- Navbar -->
                <div class="collapse navbar-collapse fp-nav" id="collapsibleNavbar">
                    
                    <!-- links -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold" href="home.php">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                                <a class="nav-link font-weight-bold" href="productos.php">Productos<span class="sr-only">(current)</span></a>
                            </li>
                        <!--  <li class="nav-item">
                            <a class="nav-link" href="#">Acerca de</a>
                        </li>-->
                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
         
                    <!-- Register & Login -->
                    <ul class="navbar-nav">
                    <?php if(!isset($_SESSION["email"])) :?>
                        <li class="nav-item ">
                            <a href="login.php" class="nav-link text-success">Iniciar sesión</a>
                        </li>
                        <li class="nav-item">
                                <a href="registro.php" class="nav-link text-success">Registrarse</a>
                        </li>
                        <?php else :?>
                        <div class="btn-group">
                            <button type="button" class="btn text-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hola <?=$_SESSION['nombre'] ;?>
                            </button>
                             <div class="dropdown-menu">
                                  <a class="dropdown-item" href="perfil.php">Perfil</a>
                                 <a class="dropdown-item" href="compras.php">Compras</a>
                                <a class="dropdown-item" href="preguntas.php">Preguntas</a>
                                 <a class="dropdown-item" href="favoritos.php">Favoritos</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="logout.php">Cerrar sesion</a>
                         </div>
        </div>
        <?php endif;?>
                    </ul>
                </div>
            </nav>
        
        
        </header>
        
        <main>
            @yield('content')
        </main>


        <footer class="page-footer font-small green-darken-1">

            <div class="container">
          
              <div class="row">
          
                  <div class="col-md-12 py-5">
                  <div class="mb-5 flex-center">
          
                  <a class="fb-ic">
                      <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <a class="tw-ic">
                      <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <a class="gplus-ic">
                      <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <a class="li-ic">
                      <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
          
                    <a class="ins-ic">
                      <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
          
                    <a class="pin-ic">
                      <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                    </a>
                  </div>
                </div>
          
          
              </div>
          
          
            </div>
          
          
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
              <a href="">BeVegan</a>
            </div>
          
          
          </footer>



        <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>