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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('dashboard', 'DashboardController@index');

Route::post('postweights', 'WeightController@store');

Route::get('dashboard/locateGym', 'LocateGymController@index');

Route::post('dashboard/locateGym', 'LocateGymController@initGymCoord');

Route::get('dashboard/routine_details', 'RoutineDetailsController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
