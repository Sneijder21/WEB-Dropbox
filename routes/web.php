<?php

Route::get('/', function () {
    return view('welcome');
});

/* Rutas agrupada */
/*Route::prefix('panel')->group(function () {

    Route::view('/', 'Backend.Dashboard')->name('admin');
    Route::view('users', 'Backend.Users')->name('admin.user');
    
    Route::get('upload_files', 'FilesController@index')->name('admin.files.index');
    Route::post('archivo-subido', 'FilesController@store')->name('admin.files.store');
    Route::get('ver-archivo-subido/{name}', 'FilesController@show')->name('admin.files.show');
    //Route::post('upload_files/store','FilesController@store')->name('admin.upload.store');

});*/

Route::group(['prefix'=>'panel','middleware'=>'auth'],function(){
	Route::view('/', 'Backend.dashboard')->name('admin');
    Route::view('users', 'Backend.Users')->name('admin.user');

    Route::get('files', 'FilesController@index')->name('admin.files.index'); 
    Route::get('upload_files', 'FilesController@create')->name('admin.files.create');

    Route::post('archivo-subiendo', 'FilesController@store')->name('admin.files.store');
    Route::get('ver-archivo/{name}', 'FilesController@show')->name('admin.files.show');
    
    Route::get('borrar-archivo/{name}', 'FilesController@delete')->name('admin.files.delete');

    Route::get('ocultar-archivo/{id}', 'FilesController@hidde')->name('admin.files.hidde');

    Route::get('validar-archivo/{name}', 'FilesController@validation_file')->name('admin.files.validar');


});

/* Rutas normales */
/* Route::view('admin/dashboard','Backend.Dashboard');
Route::view('admin/users','Backend.Users');
Route::view('admin/files','Backend.Files'); */

/* Ruta con manejo de funciones y restricciones */
Route::get('/user/{username?}', function ($username = 'Invitado') {
    return $username;
})->where('username', '[A-Za-z]+');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
