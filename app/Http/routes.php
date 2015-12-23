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
Route::controller("/Propuesta/profesor", 'PropuestaProfesorController');
Route::controller('/registrarProfesor','controladorRegistroProfesor');
Route::controller('/registrarAlumno','controlladorRegistroAlumno');
Route::controller('/','controladorLogin');
//Route::get('/', 'WelcomeController@index');
//Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//rutas tablas
Route::resource('alumno','AlumnosController');
Route::resource('usuario','UsuariosController');
Route::resource('administrador','AdministradorsController');
Route::resource('grupo','GruposController');
Route::resource('profesor','ProfesorsController');
Route::resource('tema','TemasController');
Route::resource('tipo','TiposController');
//Rutas controladores de propuestas de proyecto del profesor
Route::controller("/Propuesta/profesor", 'PropuestaProfesorController');
Route::get("/Propuesta/profesor", 'PropuestaProfesorController@getValidacion');
Route::post("/Propuesta/profesor", 'PropuestaProfesorController@postValidacion');
//Rutas controladores de propuestas de proyecto del alumno
//Route::controller("/Propuesta/alumno", "PropuestaAlumnoController");
