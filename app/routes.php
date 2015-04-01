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

Route::get('/', array ('guest.login', 'uses' => 'GuestController@login'));
Route::get('/login', array ('guest.login', 'uses' => 'GuestController@login'));
Route::post('/authenticate','HomeController@authenticate');
Route:: get('/logout', 'HomeController@logout');


Route::group(array('before' => 'authenticate'), function() {
    Route::get('dashboard','HomeController@dashboard');
    Route::group (array ('prefix' => 'admin', 'before' => 'admin'), function() {
        Route::resource('services', 'ServicesController');
    });
});

