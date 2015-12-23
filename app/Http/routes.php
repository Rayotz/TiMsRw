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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//rutas alumnos
Route::resource('alumno','AlumnosController');

//Rutas controladores de propuestas de proyecto del profesor
Route::get("/Propuesta/profesor", 'PropuestaProfesorController@getValidacion');
Route::post("/Propuesta/profesor", 'PropuestaProfesorController@postValidacion');
Route::controller("/Propuesta/profesor", 'PropuestaProfesorController');


//Rutas controladores de propuestas de proyecto del alumno
//Route::controller("/Propuesta/alumno", "PropuestaAlumnoController");
