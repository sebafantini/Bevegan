@extends('layouts.app')


@section('content')



              <h2 class="fp-letra-principal text-center">Preguntas</h2>

          </div>
          <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link text-dark font-weight-bold text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ¿Cómo compro?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       <p class="text-secondary">
        <strong>1) </strong><a href="/register">Registrate.</a><br>

        <strong>2) </strong>Encontrá tus productos utilizando la barra de categorías localizada en la parte superior del sitio.<br>

        <strong>3) </strong>Hacé click en la foto del producto que te gusta para acceder a los detalles del mismo.<br>

        <strong>4) </strong>Elegí la cantidad que querés y hacé click en Comprar.<br>

        <strong>5) </strong>Después de agregar un producto al carrito de compras, podés continuar comprando y sumar otros productos.<br>

        <strong>6) </strong>Si tenés un cupón podrás ingresarlo en el campo Código de descuento.<br>

        <strong>7) </strong>Elegí el método de pago y envío y hacé click en Finalizar compra.<br>
           </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0 ">
        <button class="btn btn-link collapsed text-dark font-weight-bold text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Entrega
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
          <p class="text-secondary">
            Podés elegir la modalidad de entrega que te resulte más cómoda y fácil! <br><br>
            <strong>Opciones</strong><br>
            <strong>Entrega a domicilio: </strong> las visitas se realizan los días hábiles en el horario de 8hs a 20hs y la compra puede ser recibida por cualquier persona mayor de 18 años. El correo realiza dos visitas a domicilio y de acuerdo a la empresa responsable de la entrega, se puede realizar una tercera visita o dejar el pedido en una sucursal.<br>
            <strong>Punto Pickit: </strong> podés elegir el Punto Pickit que prefieras, horario de entrega dependerá de los horarios de atención de dicha sucursal. Para realizar el retiro es necesario que lleves el código de retiro que recibirás por mail.<br>
            <br>

          </p>

    </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed text-dark font-weight-bold text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Mis Pedidos
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
       <p class="text-secondary">
        En caso que hayas elegido la ocpión de pago en efectivo, te hemos enviado un correo para que puedas
        imprimir desde allí tu cupón de pago. <br><br>
        Te recordamos que también podés descargarlo desde tu cuenta. A continuación te detallamos los pasos a
        seguir:<br>

        1. Ingresá tu usuario y contraseña "Aquí"<br>
        2. Debajo del pedido que querés consultar, tendrás varias opciones. La segunda de ellas es "Detalles",
        desde allí podrás visualizar la opción "Imprimí el cupón de pago"<br>

        Si ya realizaste el pago no hace falta que nos informes del mismo; en cuanto el sistema lo haga
        efectivo, la orden se aprobará automaticamente y recibirás un correo confirmándote la operación.<br>

           </p>  </div>
    </div>
  </div>



@endsection