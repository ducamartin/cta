<?php




Route::get('/notas/{id}', 'noticiasController@view');
Route::post('/nuevaNota','notasController@agregar');
Route::get('/nuevaNota','notasController@vista');
Route::get('/notas', 'noticiasController@index');

Route::get('/', 'ViewController@index');
// Route::get ('/institucional' 'ViewController@institucional');
Route::get('/contacto', 'ViewController@contact');
Route::get('/', 'ViewController@indexNotas');


// https://github.com/spatie/laravel-feed


// CREAR NUEVO CONTROLAOR?
