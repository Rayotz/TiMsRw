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
Route::resource('/grupo','GruposController');
//Route::controller("/Propuesta/profesor", 'PropuestaProfesorController');

Route::controller("/Propuesta/profesor", 'PropuestaProfesorController');
Route::get("/Propuesta/profesor", 'PropuestaProfesorController@getValidacion');
Route::post("/Propuesta/profesor", 'PropuestaProfesorController@postValidacion');

Route::controller('/registrarAlumno','controlladorRegistroAlumno');
Route::get("/registrarAlumno",'controlladorRegistroAlumno@getRegAlumno');
Route::post("/registrarAlumno",'controlladorRegistroAlumno@postRegAlumno');

Route::controller('/registrarProfesor','controladorRegistroProfesor');

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
Route::resource('profesor','ProfesorController');
Route::resource('tema','TemasController');
//Route::resource('tipo','TiposController');
//Rutas controladores de propuestas de proyecto del profesor

//Rutas controladores de propuestas de proyecto del alumno
//Route::controller("/Propuesta/alumno", "PropuestaAlumnoController");