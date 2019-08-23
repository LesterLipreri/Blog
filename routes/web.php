<?php

use App\Http\Controllers\CategoriasController;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('categorias',function(){
    return view('categorias.index');
});

Route::get('categorias', 'CategoriasController@index')->name('categorias');

Route::post('categorias','CategoriasController@store')->name('categorias.store');

route::resource('posts','PostsController');
