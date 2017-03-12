<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contacts', 'PagesController@contacts');
Route::get('/partners', 'PagesController@partners');
Route::get('/catalog', 'PagesController@catalog');

Route::get('/recipes', 'RecipesController@index');
Route::get('/recipes/create', 'RecipesController@create');
Route::post('/recipes/store', 'RecipesController@store');
Route::get('/recipes/{recipe}', 'RecipesController@show');
Route::get('/recipes/edit/{recipe}', 'RecipesController@edit');
Route::post('/recipes/update', 'RecipesController@update');
Route::get('/recipes/destroy/{recipe}', 'RecipesController@destroy');

Route::post('/feedback/send_mail', 'FeedbackController@send_mail');
Route::post('/feedback/send_calc', 'FeedbackController@send_calc');
Route::post('/feedback/send_contacts', 'FeedbackController@send_contacts');

//Route::get('/register', 'RegistrationController@create');
//Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::group( ['middleware' => 'checkAuth' ], function(){
    Route::get('/admin/recipes', 'AdminController@recipes');
    Route::get('/admin', 'AdminController@index');
});

Route::get('/home', 'PagesController@index');
