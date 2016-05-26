<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['backend']], function () {
    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    | Functionality of dashboard
    */
    /*View admin dashboard page*/
    Route::get('/backend/dashboard', [
        'as'      => 'dashboard',
        'uses'    => 'AdminDashboardController@index'
    ]);

    /*
    |--------------------------------------------------------------------------
    | Religion
    |--------------------------------------------------------------------------
    | Add edit delete functionality of religion
    */
    /* List page of religion*/
    Route::get('/backend/religion', [
        'as'      => 'listReligion',
        'uses'    => 'AdminReligionController@index'
    ]);

    /* Data fetch for listing all religion data */
    Route::get('/backend/religion/data', [
        'as'      => 'listReligion',
        'uses'    => 'AdminReligionController@show'
    ]);

    /* Save religion data */
    Route::post('/backend/religion', [
        'as'      => 'listReligion',
        'uses'    => 'AdminReligionController@store'
    ]);

    /* Delete religion */
    Route::delete('/backend/religion/{id}', [
        'as'      => 'deleteReligion',
        'uses'    => 'AdminReligionController@destroy'
    ]);

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
});
