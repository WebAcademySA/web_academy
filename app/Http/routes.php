<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('prueba','prueba');
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::resource('login','LoginController');
Route::resource('subir_notas_docente','Subir_Notas_DocenteController');
Route::resource('inicio_admin','Inicio_AdminController');
Route::resource('registrar_asignatura','Registrar_AsignaturaController');
Route::resource('registrar_docente','Registrar_DocenteController');
Route::resource('registrar_alumno','Registrar_AlumnoController');
Route::resource('actualizar_asignatura','Actualizar_AsignaturaController');
Route::resource('actualizar_docente','Actualizar_DocenteController');
Route::resource('actualizar_alumno','Actualizar_AlumnoController');
Route::resource('consultar_asignatura','Consultar_AsignaturaController');
Route::resource('consultar_docente','Consultar_DocenteController');
Route::resource('consultar_alumno','Consultar_AlumnoController');
Route::resource('matricular_alumno','Matricular_AlumnoController');
Route::resource('imparte_docente','Imparte_DocenteController');
Route::resource('inscribir_asignatura','Inscribir_AsignaturaController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
