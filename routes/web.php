<?php





Route::post('/nuevaNota','notasController@agregar');
Route::get('/nuevaNota','notasController@vista');
// Route::get ('/institucional' 'ViewController@institucional');
Route::get('/contacto', 'ViewController@contact');
Route::get('/', 'ViewController@index');



// https://github.com/spatie/laravel-feed


// CREAR NUEVO CONTROLAOR?
