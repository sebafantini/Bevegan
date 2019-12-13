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




Route::get('/', function(){
    return view('home');
});
Route::get('/perfil', function(){
    return view('perfil');
});
Route::get('/compras', function(){
    return view('compras');
});
Route::get('/preguntas', function(){
    return view('preguntas');
});
Route::get('/favoritos', function(){
    return view('favoritos');
});
Route::get('/categoriaAgregar', function(){
    return view('favoritos');
});
Route::get('/productos', function(){
    return view('productos');
});
Route::get('/contacto', function(){
    return view('contacto');
});

//Ruta listar las categorias
Route::get('/categoriaListado', 'CategoriaController@index');

Route::get('/categoriaAgregar', 'CategoriaController@create');
Route::post('/categoriaGuardar', 'CategoriaController@save');
Route::get('/categoriaDetalle/{id}', 'CategoriaController@show');

//Ruta para Editar Categorias
Route::get('/categoriaEditar/{id}','CategoriaController@edit');

//Ruta para guardar los cambios método update
Route::post('/categoriaEditadaGuardar/{id}', 'CategoriaController@update');

//Ruta para eliminar una película 
Route::get('/categoriaEliminar/{id}','CategoriaController@delete');

//Ruta para buscar películas
Route::get('/categoriaBuscar','CategoriaController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');