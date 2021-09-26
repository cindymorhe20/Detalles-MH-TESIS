<?php


Route::get('/', function () {
    return view('auth/login');
});

Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/articulo','ArticuloController');

Route::resource('ventas/cliente','ClienteController');
Route::resource('ventas/venta','VentaController');

Route::resource('compras/proveedor','ProveedorController');
Route::resource('compras/ingreso','IngresoController');

Route::auth();
Route::get('/logout','Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{slug?}', 'HomeController@index');