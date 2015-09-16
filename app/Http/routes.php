<?php




Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::get('dashboard', ['middleware' => 'auth', 'uses' => 'DashboardController@index']);
Route::get('profile', ['middleware' => 'auth', 'uses' => 'UserController@index']);
Route::patch('profile', ['middleware' => 'auth', 'uses' => 'UserController@update']);

Route::get('people/{id}', 'UserController@show');


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['middleware' => 'auth', 'uses' => 'Auth\AuthController@getLogout']);

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
