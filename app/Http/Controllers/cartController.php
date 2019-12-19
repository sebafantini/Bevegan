<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Aquí agrego los modelos de usuarios, productos y carrito
use Auth;
use App\Producto;
use App\Cart;
use Carbon\Traits\Timestamp;

class CartController extends Controller
{
   //Este método muestra todos los productos del carrito del usuario logueado
   public function index()
   {
     $cart = Cart::where("user_id", Auth::user()->id)->where("status",0)->get();
     return view('cart', compact('cart'));
   }
   //Este corresponde al que permite agregar al carrito
   public function store($id)
   {
       $producto = Producto::find($id);
       
       //Esto lo hago la lograr generar un numero de carrito de forma dinámica
       $item = new Cart;
       
       $item->productoNombre = $producto->nombre;
       
       $item->producto_id = $producto->id;
       $item->categoriaNombre = $producto->categoria['nombre'];
       //dd($item->categoriaNombre);
       $item->marcaNombre = $producto->marca['nombre'];       
       $item->precio = $producto->precio;
       $item->productoImagen = $producto->imagen;
       $item->cant = 1;
       $item->user_id = Auth::user()->id;
       //Este lo cree para controlar si el productoo fue comprado (1) o aun no ha sido producto no comprado (0).
       $item->status = 0;
       //Aquí guardo en la tabla de cart (carrito)
       $item->save();
       return redirect('cart');
   }
   //Aquí traigo todos los productos del carrito del usuario logueado y que ha seleccionado una vez que decide cerrar la compra.
   
   public function cartclose(Request $req){
     $items = Cart::where("user_id", Auth::user()->id)->where("status",0)->get();
     //De esta forma genero el número del carrito para el usuario que está comprando
     $cart_number = Cart::max('cart_number') +1;
     $fechaCompra = date("Y-m-d H:i:s");
     foreach($items as $item){
       $item->status = 1;
       $item->cart_number = $cart_number;
       $item->fechaCompra = $fechaCompra;
       $item->save();
     }
     return redirect('home');
   }
   //Con este método controlo todo lo que el usuario historicamente ha comprado
   
   
   
   public function history(){
     $carts = Cart::where('user_id', Auth::user()->id)
                   ->where("status",1)->get()
                   ->groupBy('cart_number');
                   //De esta forma controlo todos los nros de carrito del usuario.
      //dd($carts);
     return view('historiaCompras', compact('carts'));
   }
}