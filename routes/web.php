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

/* RUTA INDEX */
Route::get('/', 'SneakersController@index' );

/* RUTA FAQ */
Route::get('ayuda', 'SneakersController@help' );

/*RUTA REGISTER */
Auth::routes();

// CONTROLADOR HOME (SE MUESTRA SOLO SI EL USUARIO ESTA LOGUEADO
Route::get('home', 'HomeController@index');
Route::get('publicaciones', 'SneakersController@publicaciones');

//RUTAS CONTROLADORES DE CATEGORIAS
Route::get('products/zapatillas', 'SneakersController@zapatillas');
Route::get('products/zapatos', 'SneakersController@zapatos');
Route::get('products/ojotas', 'SneakersController@ojotas');
Route::get('products/sandalias', 'SneakersController@sandalias');
Route::get('products/botas', 'SneakersController@botas');
Route::get('products/botines', 'SneakersController@botines');

//RUTAS CONTROLADORES MATERIALES-ZAPATILLAS
Route::get('products/zapatillas/goma', 'SneakersController@zapatillaGoma');
Route::get('products/zapatillas/gamuza', 'SneakersController@zapatillaGamuza');
Route::get('products/zapatillas/cuero', 'SneakersController@zapatillaCuero');
Route::get('products/zapatillas/cuerina', 'SneakersController@zapatillaCuerina');
Route::get('products/zapatillas/algodon', 'SneakersController@zapatillaAlgodon');
Route::get('products/zapatillas/lona', 'SneakersController@zapatillaLona');
Route::get('products/zapatillas/malla', 'SneakersController@zapatillaMalla');

//RUTAS CONTROLADORES MATERIALES-ZAPATOS
Route::get('products/zapatos/goma', 'SneakersController@zapatoGoma');
Route::get('products/zapatos/gamuza', 'SneakersController@zapatoGamuza');
Route::get('products/zapatos/cuero', 'SneakersController@zapatoCuero');
Route::get('products/zapatos/cuerina', 'SneakersController@zapatoCuerina');
Route::get('products/zapatos/algodon', 'SneakersController@zapatoAlgodon');
Route::get('products/zapatos/lona', 'SneakersController@zapatoLona');
Route::get('products/zapatos/malla', 'SneakersController@zapatoMalla');

//RUTAS CONTROLADORES MATERIALES-OJOTAS
Route::get('products/ojotas/goma', 'SneakersController@ojotaGoma');
Route::get('products/ojotas/gamuza', 'SneakersController@ojotaGamuza');
Route::get('products/ojotas/cuero', 'SneakersController@ojotaCuero');
Route::get('products/ojotas/cuerina', 'SneakersController@ojotaCuerina');
Route::get('products/ojotas/algodon', 'SneakersController@ojotaAlgodon');
Route::get('products/ojotas/lona', 'SneakersController@ojotaLona');
Route::get('products/ojotas/malla', 'SneakersController@ojotaMalla');

//RUTAS CONTROLADORES MATERIALES-SANDALIAS
Route::get('products/sandalias/goma', 'SneakersController@sandaliaGoma');
Route::get('products/sandalias/gamuza', 'SneakersController@sandaliaGamuza');
Route::get('products/sandalias/cuero', 'SneakersController@sandaliaCuero');
Route::get('products/sandalias/cuerina', 'SneakersController@sandaliaCuerina');
Route::get('products/sandalias/algodon', 'SneakersController@sandaliaAlgodon');
Route::get('products/sandalias/lona', 'SneakersController@sandaliaLona');
Route::get('products/sandalias/malla', 'SneakersController@sandaliaMalla');

//RUTAS CONTROLADORES MATERIALES-BOTAS
Route::get('products/botas/goma', 'SneakersController@botaGoma');
Route::get('products/botas/gamuza', 'SneakersController@botaGamuza');
Route::get('products/botas/cuero', 'SneakersController@botaCuero');
Route::get('products/botas/cuerina', 'SneakersController@botaCuerina');
Route::get('products/botas/algodon', 'SneakersController@botaAlgodon');
Route::get('products/botas/lona', 'SneakersController@botaLona');
Route::get('products/botas/malla', 'SneakersController@botaMalla');

//RUTAS CONTROLADORES MATERIALES-BOTIN
Route::get('products/botines/goma', 'SneakersController@botinGoma');
Route::get('products/botines/gamuza', 'SneakersController@botinGamuza');
Route::get('products/botines/cuero', 'SneakersController@botinCuero');
Route::get('products/botines/cuerina', 'SneakersController@botinCuerina');
Route::get('products/botines/algodon', 'SneakersController@botinAlgodon');
Route::get('products/botines/lona', 'SneakersController@botinLona');
Route::get('products/botines/malla', 'SneakersController@botinMalla');


Route::resource('products', 'ProductsController');
Route::post('products/{id}/images', 'ProductsController@images');
