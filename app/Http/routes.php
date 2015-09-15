<?php




Route::get('/', 'PagesController@index');

Route::get('dashboard', 'DashboardController@index');
Route::get('profile', 'UserController@index');

//Route::get('{county}/{area}/{address}/{id}', 'FlyersController@show');
//Route::post('/addphoto/{id}', 'FlyersController@addPhoto');
Route::resource('flyers', 'FlyersController');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
