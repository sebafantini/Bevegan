@extends('layouts.app')
@section('content')
<div class="container">
  <h1 class="fp-titulo-bienvenida text-center">Historial de Compras</h1>
    @forelse ($carts as $cart_number => $cart)
      <h5 class="font-weight-bold">Pedido nº: {{$cart_number}}</h5>
      
      
      
      
      
      <table class="table">
        <thead>
          <tr>
            
            <th scope="col">Fecha</th>
            <th scope="col">Producto</th>
            <th scope="col">Marca</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Detalle</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($cart as $item)
          <tr>
            
            <td>{{date('d-m-Y', strtotime($item->fechaCompra))}}</td>
            <td>{{$item->productoNombre}}</td>
            <td>{{$item->marcaNombre}}</td>            
            <td>{{$item->cant}}</td>
            <td>{{$item->precio}}</td>
            <td><a href="/productoDetalle/{{$item->producto_id}}"><ion-icon name="eye"></ion-icon></a></td>
          </tr>
        @empty
          <p>No hay productos para este carrito.</p>
        @endforelse
        </tbody>
      </table>
      @empty
      <p>No hay compras.</p>
    @endforelse
</div>
@endsection