<?php

use Illuminate\Support\Facades\Route;

use App\Models\Producto;
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

Route::get('/', function () {
    return view('inicio');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);


	
});

Route::get('/inicio', function () {
    return view('inicio');
})->name('Inicio');


Route::get('/contacto', function () {
    return view('contacto');
})->name('Contacto');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('Nosotros');

Route::get('/shop', function () {
	$productos = Producto::paginate(8);
    return view('pages.tienda', compact('productos'));
})->name('Shop');


Route::post('/home', 'App\Http\Controllers\UsuariosController@registro')->name('registro.store');

Route::group(['middleware' => ['role:Administrador']], function () {
//Usuarios
Route::get('/usuarios', 'App\Http\Controllers\UsuariosController@index')->name('usuarios');
Route::get('/usuarios/create', 'App\Http\Controllers\UsuariosController@create')->name('usuarios.create');
Route::post('/usuarios', 'App\Http\Controllers\UsuariosController@store')->name('usuarios.store');

Route::get('/usuarios/{id}/edit','App\Http\Controllers\UsuariosController@edit')->name('usuarios.edit');
Route::put('/usuarios/{id}','App\Http\Controllers\UsuariosController@update')->name('usuarios.update');
Route::delete('/usuarios/{id}','App\Http\Controllers\UsuariosController@destroy')->name('usuarios.destroy');



//Bitacora
Route::get('/bitacora', 'App\Http\Controllers\administrador\bitacora\BitacoraController@index')->name('index');
});

//empleado
Route::group(['middleware' => ['role:Empleado|Administrador']], function () {
	Route::get('/direccionVentas', 'App\Http\Controllers\DireccionVentasController@index')->name('direccionVentas');
	Route::get('/direccionVentas/create', 'App\Http\Controllers\DireccionVentasController@create')->name('direccionVentas.create');
	Route::post('/direccionVentas', 'App\Http\Controllers\DireccionVentasController@store')->name('direccionVentas.store');
	Route::get('/direccionVentas/{id}/edit','App\Http\Controllers\DireccionVentasController@edit')->name('direccionVentas.edit');
	Route::put('/direccionVentas/{id}','App\Http\Controllers\DireccionVentasController@update')->name('direccionVentas.update');
	Route::delete('/direccionVentas/{id}','App\Http\Controllers\DireccionVentasController@destroy')->name('direccionVentas.destroy');
	
	//costo envio
	Route::get('/smza', 'App\Http\Controllers\administrador\costoEnvio\SmzaController@index')->name('smza');
	Route::get('/smza/create', 'App\Http\Controllers\administrador\costoEnvio\SmzaController@create')->name('smza.create');
	Route::post('/smza', 'App\Http\Controllers\administrador\costoEnvio\SmzaController@store')->name('smza.store');
	Route::get('/smza/{id}/edit','App\Http\Controllers\administrador\costoEnvio\SmzaController@edit')->name('smza.edit');
	Route::put('/smza/{id}','App\Http\Controllers\administrador\costoEnvio\SmzaController@update')->name('smza.update');
	Route::delete('/smza/{id}','App\Http\Controllers\administrador\costoEnvio\SmzaController@destroy')->name('smza.destroy');
	
	//costo zona mi cabezona xdxdxd
	Route::get('/costoZona', 'App\Http\Controllers\administrador\costoEnvio\CostoZonaController@index')->name('costoZona');
	Route::get('/costoZona/create', 'App\Http\Controllers\administrador\costoEnvio\CostoZonaController@create')->name('costoZona.create');
	Route::post('/costoZona', 'App\Http\Controllers\administrador\costoEnvio\CostoZonaController@store')->name('costoZona.store');
	Route::get('/costoZona/{id}/edit','App\Http\Controllers\administrador\costoEnvio\CostoZonaController@edit')->name('costoZona.edit');
	Route::put('/costoZona/{id}','App\Http\Controllers\administrador\costoEnvio\CostoZonaController@update')->name('costoZona.update');
	Route::delete('/costoZona/{id}','App\Http\Controllers\administrador\costoEnvio\CostoZonaController@destroy')->name('costoZona.destroy');
	
	//Bitacora
	Route::get('/bitacora', 'App\Http\Controllers\administrador\bitacora\BitacoraController@index')->name('index');
	
	//Materiales
	Route::get('/materiales', 'App\Http\Controllers\MaterialesController@index')->name('materiales');
	Route::get('/materiales/create', 'App\Http\Controllers\MaterialesController@create')->name('materiales.create');
	Route::post('/materiales', 'App\Http\Controllers\MaterialesController@store')->name('materiales.store');
	Route::get('/materiales/{id}/edit','App\Http\Controllers\MaterialesController@edit')->name('materiales.edit');
	Route::put('/materiales/{id}','App\Http\Controllers\MaterialesController@update')->name('materiales.update');
	Route::delete('/materiales/{id}','App\Http\Controllers\MaterialesController@destroy')->name('materiales.destroy');

	//Productos
	Route::get('/productos', 'App\Http\Controllers\ProductosController@index')->name('productos');
	Route::get('/productos/create', 'App\Http\Controllers\ProductosController@create')->name('productos.create');
	Route::post('/productos', 'App\Http\Controllers\ProductosController@store')->name('productos.store');
	Route::get('/productos/{id}/edit','App\Http\Controllers\ProductosController@edit')->name('productos.edit');
	Route::put('/productos/{id}','App\Http\Controllers\ProductosController@update')->name('productos.update');
	Route::delete('/productos/{id}','App\Http\Controllers\ProductosController@destroy')->name('productos.destroy');

	//VentasProductos
	Route::get('/ventas', 'App\Http\Controllers\VentasProductosController@index')->name('ventas');
	Route::get('/ventas/create', 'App\Http\Controllers\VentasProductosController@create')->name('ventas.create');
	Route::post('/ventas', 'App\Http\Controllers\VentasProductosController@store')->name('ventas.store');
	Route::get('/ventas/{id}/edit','App\Http\Controllers\VentasProductosController@edit')->name('ventas.edit');
	Route::put('/ventas/{id}','App\Http\Controllers\VentasProductosController@update')->name('ventas.update');
	Route::delete('/ventas/{id}','App\Http\Controllers\VentasProductosController@destroy')->name('ventas.destroy');
});
Route::group(['middleware' => ['role:Usuario|Administrador|Empleado']], function () {

Route::get('/tienda', 'App\Http\Controllers\VentaProductoClienteController@venta')->name('Tienda');
Route::get('/tienda/{id}', 'App\Http\Controllers\VentaProductoClienteController@create')->name('Tienda.create');
Route::post('/tienda', 'App\Http\Controllers\VentaProductoClienteController@store')->name('Tienda.store');
Route::get('/compras', 'App\Http\Controllers\VentaProductoClienteController@index')->name('Compras');
Route::get('/compras/{id}/detail', 'App\Http\Controllers\VentaProductoClienteController@detail')->name('Tienda.detail');

});
