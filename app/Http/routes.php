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
//Route::resource('auth/login','prueba');
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::resource('login','LoginController');
Route::resource('horario_alumno','Horario_AlumnoController');
Route::resource('horario_docente','Horario_DocenteController');
Route::resource('inicio_alumno','Inicio_AlumnoController');
Route::resource('inicio_docente','Inicio_DocenteController');
Route::resource('notas_alumno','Notas_AlumnoController');
Route::resource('perfil_alumno','Perfil_AlumnoController');
Route::resource('perfil_docente','Perfil_DocenteController');
Route::resource('subir_notas_docente','Subir_Notas_DocenteController');
Route::resource('inicio_admin','Inicio_AdminController');
Route::resource('registrar_asignatura','Registrar_AsignaturaController');
Route::resource('registrar_docente','Registrar_DocenteController');
Route::resource('registrar_alumno','Registrar_AlumnoController');
Route::resource('registrar_curso','Registrar_CursoController');
Route::resource('registrar_horario','Registrar_HorarioController');
Route::resource('actualizar_asignatura','Actualizar_AsignaturaController');
Route::resource('actualizar_docente','Actualizar_DocenteController');
Route::resource('actualizar_alumno','Actualizar_AlumnoController');
Route::resource('consultar_asignatura','Consultar_AsignaturaController');
Route::resource('consultar_docente','Consultar_DocenteController');
Route::resource('consultar_alumno','Consultar_AlumnoController');
Route::resource('consultar_horario','Consultar_HorarioController');
Route::resource('consultar_curso','Consultar_CursoController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
