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

Route::prefix('tienda')->group(function()
{
    Route::get('/', 'TiendaController@index')->name("home.tienda");
    Route::get('/productos', 'TiendaController@products')->name("home.products");
});




