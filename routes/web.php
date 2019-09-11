<?php


// documentos

Route::get('/documentos','documentosController@ver');

Route::post('/nuevoDoc', 'documentosController@agregar')->middleware('auth');
Route::get('/nuevoDoc', 'documentosController@vista')->middleware('auth');




// noticias
Route::get('/paneldecontrol','noticiasController@control')->middleware('auth');
Route::get('/noticias','noticiasController@ver');

Route::post('/borrarNota','notasController@borrar')->middleware('auth');

Route::post('/notas/editar/{id}','noticiasController@update')->middleware('auth');
Route::get('/notas/editar/{id}','noticiasController@edit')->middleware('auth');

Route::post('/nuevaNota','notasController@agregar')->middleware('auth');
Route::get('/nuevaNota','notasController@vista')->middleware('auth');

Route::get('/notas/{id}','noticiasController@show');




Route::get('/provincias','ViewController@provincias');
Route::get('/afiliarse','ViewController@afiliarse');
Route::get('/', 'ViewController@index');
Route::get('/cd', 'ViewController@cd');
Route::get('/contacto', 'ViewController@contact');
Route::get('/', 'ViewController@indexNotas');


// https://github.com/spatie/laravel-feed

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
