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

Route::get('/', function() {
	return view('welcome');	
});

Route::get('admin/index', 'AdminController@index');

Route::get('manager/index', 'ManagerController@index');
Route::get('manager/create', 'ManagerController@create');
Route::post('manager/create', 'ManagerController@store');


Route::get('roomtypes','RoomTypeController@index');
Route::get('roomtypes/create','RoomTypeController@create');
Route::post('roomtypes/create','RoomTypeController@store');

Route::get('roomcal','RoomCalenderController@index');
Route::post('roomcal/set','RoomCalenderController@create');
Route::get('roomcal/show','RoomCalenderController@show');

Route::get('reserve','ReservationController@create');
Route::post('reserve/create','ReservationController@store');
Route::get('reserve/list','ReservationController@show');


Route::resource('articles','ArticlesController');

Route::get('tags/{tags}','TagsController@show');

Route::controllers([
	'auth' =>'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/hotel', 'HotelController@index');