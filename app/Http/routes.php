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
// Front Controller
Route::get('/', 'FrontController@index');
Route::get('/about', 'FrontController@about');
Route::get('/mentions', 'FrontController@mentions');

//Contact Page
Route::get('contact', 'ContactController@getContact');

//Form request:: POST action will trigger to controller
Route::post('contact_request','ContactController@getContactUsForm');

// Post Controller
Route::resource('posts', 'PostController');
Route::put('status/{id}', 'PostController@updateStatus');

// Dashboard Controller
Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/create', 'DashboardController@create');

// Auth

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

