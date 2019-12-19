<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Paginas Publicas
Route::get('/', function(){return view('home');});
Route::get('/productos', 'ProductoController@vistaUsuario');


Route::get('/contacto', function(){return view('contacto');});



Route::get('/ayuda', function(){
    return view('ayuda');
});





//Paginas que se acceden solo si se esta logueado
Route::get('/perfil', function(){return view('perfil');})->middleware('auth');
Route::get('/compras', function(){return view('compras');})->middleware('auth');
Route::get('/preguntas', function(){return view('preguntas');})->middleware('auth');
Route::get('/favoritos', function(){return view('favoritos');})->middleware('auth');
Route::get('/categoriaAgregar', function(){return view('favoritos');})->middleware('auth');

Route::get('/editarInformacion/{id}','EditarPerfilComtroller@edit')->middleware('auth');
Route::post('/perfilEditardaGuardar/{id}', 'EditarPerfilComtroller@update')->middleware('auth');

Route::get('/editarPass', function(){return view('editarPass');})->middleware('auth');


//El usuario necesita ser Administrador para acceder role=7
//Ruta listar las categorias
Route::get('/categoriaListado', 'CategoriaController@index')->middleware('roleAdm');
Route::get('/categoriaAgregar', 'CategoriaController@create')->middleware('roleAdm');
Route::post('/categoriaGuardar', 'CategoriaController@save')->middleware('roleAdm');
Route::get('/categoriaDetalle/{id}', 'CategoriaController@show')->middleware('roleAdm');
Route::get('/categoriaEditar/{id}','CategoriaController@edit')->middleware('roleAdm');
Route::post('/categoriaEditadaGuardar/{id}', 'CategoriaController@update')->middleware('roleAdm');
Route::get('/categoriaEliminar/{id}','CategoriaController@delete')->middleware('roleAdm');
Route::get('/categoriaBuscar','CategoriaController@search')->middleware('roleAdm');


//Rutas para el Crud de Productos
Route::get('/productoListado', 'ProductoController@index')->middleware('roleAdm');
Route::get('/productoDetalle/{id}', 'ProductoController@show');
Route::get('/productoAgregar', 'ProductoController@create')->middleware('roleAdm');
Route::post('/productoGuardar', 'ProductoController@save')->middleware('roleAdm');
Route::get('/productoEditar/{id}','ProductoController@edit')->middleware('roleAdm');
Route::post('/productoEditadaGuardar/{id}', 'ProductoController@update')->middleware('roleAdm');
Route::get('/productoEliminar/{id}','ProductoController@delete')->middleware('roleAdm');
Route::get('/productoBuscar','ProductoController@search')->middleware('roleAdm');

//Rutas para el Crud de Marcas
Route::get('/marcaListado', 'MarcaController@index')->middleware('roleAdm')->middleware('roleAdm');
Route::get('/marcaAgregar', 'MarcaController@create')->middleware('roleAdm');
Route::post('/marcaGuardar', 'MarcaController@save')->middleware('roleAdm');
Route::get('/marcaDetalle/{id}', 'MarcaController@show')->middleware('roleAdm');
Route::get('/marcaEditar/{id}','MarcaController@edit')->middleware('roleAdm');
Route::post('marcaEditadaGuardar/{id}','MarcaController@update')->middleware('roleAdm');
Route::get('/marcaEliminar/{id}','MarcaController@delete')->middleware('roleAdm');
Route::get('/marcaBuscar','MarcaController@search')->middleware('roleAdm');

//Código del arcchvo de rutas web.php       
Route::get('/addtocart/{id}', 'CartController@store')->middleware('auth');
Route::get('/cart', 'CartController@index')->middleware('auth')->middleware('auth');
Route::post('/cartclose', 'CartController@cartclose')->middleware('auth');
Route::get('/historia', 'CartController@history')->middleware('auth')->middleware('auth');


//Paginas de Laravel por default
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

