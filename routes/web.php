<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/*
Route::get('/welcome', function () {
    return view('welcome');
});

*/
Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/welcome', 'WelcomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/registrar', function () {
    return view('auth.register');
});

Route::resource('colegiados', 'ColegiadosController');
Route::resource('ConsejoNacional', 'ConsejoNacionalController');
Route::resource('ConsejoRegional', 'ConsejoRegionalController');

