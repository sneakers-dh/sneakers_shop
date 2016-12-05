<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| En este archivo se pueden definir todas las rutas que se manejan
| por su aplicación. Sólo digale a laravel los URL que debe responder
| al uso de un método de cierre o controlador. Construye algo grande!
|Metodos posibles a solicitar: get, post, delete, put, etc.
|
*/

/* CONTROLADOR INDEX */
Route::get('/', 'SneakersController@index' );

/* CONTROLADOR FAQ */
Route::get('ayuda', 'SneakersController@help' );

/*CONTROLADOR REGISTER */
Auth::routes();

/* CONTROLADOR HOME (SE MUESTRA SOLO SI EL USUARIO ESTA LOGUEADO */
Route::get('home', 'HomeController@index');

Route::get('publicaciones', 'SneakersController@publicaciones');

Route::get('products/zapatillas', 'SneakersController@zapatillas');

Route::get('products/zapatos', 'SneakersController@zapatos');

Route::get('products/ojotas', 'SneakersController@ojotas');

Route::get('products/sandalias', 'SneakersController@sandalias');

Route::get('products/botas', 'SneakersController@botas');

Route::get('products/botines', 'SneakersController@botines');

Route::resource('products', 'ProductsController');
Route::post('products/{id}/images', 'ProductsController@images');
