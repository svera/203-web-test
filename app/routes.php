<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::resource('users',    'UsersController',    ['only' => ['create', 'store', 'show']]);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);
Route::resource('search',   'SearchController',   ['only' => ['index']]);

Route::filter('redirectIfLoggedIn', function()
{
    if (Auth::check()) {
        return Redirect::route('home')->with('message', 'You are already logged in');
    }
});

