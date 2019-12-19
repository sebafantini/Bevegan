@extends('layouts.app')
@section('content')
<div class="container">
 <h2>Mi carrito</h2>
   <table class="table">
     <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">Producto</th>
         <th scope="col">Cantidad</th>
         <th scope="col">Precio</th>
       </tr>
     </thead>
     <tbody>
       @foreach ($cart as $item)
         <tr>
           <th scope="row">{{$item->id}}</th>
           <td>{{$item->productoNombre}}</td>
           <td>{{$item->cant}}</td>
           <td>{{$item->precio}}</td>
         </tr>
       @endforeach
     </tbody>
   </table>
   <form class="" action="/cartclose" method="post">
     @csrf
     
     <a class="btn btn-primary " href="/productos">Seguir Comprando</a> <button type="submit" class="btn btn-success">Finalizar Compra</button>
   </form>
</div>
@endsection