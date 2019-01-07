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

Route::get('/', function () {
    return view('welcome');
});
/* Rutas agrupada */
Route::prefix('panel')->group(function(){
    Route::view('/','Backend.Dashboard')->name('admin');
    Route::view('users','Backend.Users')->name('admin.user');
    
    Route::get('upload_files','FilesController@index')->name('admin.upload.index');
    Route::get('upload_files/store','FilesController@store')->name('admin.upload.store');

});

/* Rutas normales */
/* Route::view('admin/dashboard','Backend.Dashboard');
Route::view('admin/users','Backend.Users');
Route::view('admin/files','Backend.Files'); */

/* Ruta con manejo de funciones y restricciones */
Route::get('/user/{username?}',function($username='Invitado'){
    return $username;
})->where('username','[A-Za-z]+');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
