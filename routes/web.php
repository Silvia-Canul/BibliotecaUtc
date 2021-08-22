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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('co', function () {
//     return view('layout.contenido');
// });
Route::get('login', function () {
    return view('login.login');
});
Route::group(['midlleware'=>'Session'],function(){
    Route::get('mas', function () {
        return view('layout.master');
    });
    // Route::get('c', function () {
    //     return view('contenedor.contenedor');
    // });
    Route::get('lector', function () {
        return view('lectores.lectores');
    });
    
    Route::get('usuario', function () {
        return view('usuarios.usuarios');
    });
    Route::get('r', function () {
        return view('roles.roles');
    });
    Route::get('t', function () {
        return view('tipos.tipos');
    });
   // Route::view('libros','libros.libross');
});
Route::view('libros','libros.libross');

Route::view('usu','usuario');
Route::view('registrox','RegisterBiblioteca');


//api

Route::apiResource('apiCon','ApiContenedoresController');
Route::apiResource('apiLec','ApiLectoresController');
Route::apiResource('apiU','ApiUsuariosController');
Route::apiResource('apiR','ApiRolesController');
Route::apiResource('apiR','ApiRolesController');
Route::apiResource('apiT','ApiTipoController');
Route::apiResource('apilibros','ApiLibrosController');

//api prestamo
Route::apiResource('apiPrestamo','ApiPrestamoCOntroller');

Route::apiResource('apiusu','ControllerUsuario');
Route::apiResource('apix','RegisterBiblioteca');



//validacion
Route::post('entrada', 'AccesoController@validar')->name('entrada');
Route::get('salir','AccesoController@salir')->name('salir');

Route::get('apireg','RegisterBiblioteca@registro')->name('apireg');
Route::post('apireg','RegisterBiblioteca@registro')->name('apireg');


//prestamo
Route::view('prestamo','prestamo');
