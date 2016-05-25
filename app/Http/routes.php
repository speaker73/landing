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

//Route::get('/', function () {
//    return view('welcome');
//});

   /* Route::get('/', 'MainCtrl@getHome');*/
    Route::get('/', 'MainCtrl@index');
  /*Route::resource('/', 'MainCtrl');*/

  /*Route::resource('/{route}', 'MainCtrl');*/

  Route::resource('/customer', 'CustomersCtrl');

  Route::resource('/pages', 'MainCtrl');

/*  Route::get('/exp/{route}', 'REST\PagesCtrl@show');*/
