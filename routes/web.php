<?php

use Illuminate\Support\Facades\Route;

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

/*RUTAS*/
Auth::routes();

/*RUTAS*/
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('tienda')->group(function()
{
    Route::get('/', '\Modules\Tienda\Http\Controllers\TiendaController@index')->name("productIndex");

    Route::get('/productos', '\Modules\Tienda\Http\Controllers\TiendaController@products')->name("productsHome");
});


Route::get('/', function ()
{
    return redirect(\route("home"));
});


