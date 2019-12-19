@extends('layouts.app')


@section('content')



              <h2 class="fp-letra-principal text-center">Preguntas</h2>

          </div>
          <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link text-dark font-weight-bold text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Como Comprar
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       <p class="text-secondary">
        Tenés que registrarte en nuestro sitio. <br>

        Podés encontrar tus productos utilizando la barra de categorías localizada en la parte superior del sitio.<br>

        También podés realizar la búsqueda ingresando la palabra clave o marca en nuestro buscador.<br>

        Hace Click en la foto del producto que te gusta para acceder a los detalles del mismo.<br>

        Elegí tu talle y hacé click en Comprar.<br>

        Luego de agregar un producto al carrito de compras podés continuar comprando y sumar otros productos.<br>

        Si tenés un cupón podrás ingresarlo en el campo Código de descuento.<br>

        Por útimo, seleccioná el método de pago y envio y hace click en Finalizar compra.<br>
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
            Cada vez que realices una compra a través de BeVegan podrás elegir la modalidad de entrega que te resulte más cómoda y fácil. <br>
            Contás con la opción de Entrega a domicilio o Entrega en sucursal o Punto Pickit. Más abajo te detallamos las particularidades de cada uno.<br>
            Tené en cuenta que si elegís entrega a domicilio las visitas se realizan los días hábiles en el horario de 08hs. a 20hs. y la compra puede ser recibida por cualquier persona mayor de 18 años. El correo realiza dos visitas a domicilio y de acuerdo a la empresa responsable de la entrega, se puede realizar una tercera visita o dejar el pedido en una sucursal.<br>
            En caso que elijas la opción de entrega en Punto Pickit o Sucursal el horario de entrega dependerá de los horarios de atención de dicha sucursal. Para realizar el retiro es necesario que lleves el número de guía que podrás ver en el seguimiento o en caso que sea Punto Pickit el código de retiro que recibirás por mail.<br>
            <br>

            Envío estándar  <br>
            Si elegís esta opción de envío la entrega se realizará al domicilio que indiques en tu compra. Podés verificar cuál es el plazo de entrega para tu localidad ingresando el código postal en nuestro calculador.
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
        imprimir desde allí tu cupón de pago. <br>
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