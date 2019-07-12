<?php






Route::post('/borrarNota','notasController@borrar');

Route::post('/notas/editar/{id}','noticiasController@update');
Route::get('/notas/editar/{id}','noticiasController@edit');

Route::post('/nuevaNota','notasController@agregar');
Route::get('/nuevaNota','notasController@vista');

Route::get('/notas/{id}','noticiasController@show');





Route::get('/afiliarse','ViewController@afiliarse');
Route::get('/', 'ViewController@index');
Route::get('/cd', 'ViewController@cd');
Route::get('/contacto', 'ViewController@contact');
Route::get('/', 'ViewController@indexNotas');


// https://github.com/spatie/laravel-feed

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
