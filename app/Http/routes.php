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


Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
    return view('auth.login');
});
  
    Route::auth();
  

    Route::resource('assignees','AssigneesController');
    Route::resource('assets','AssetsController');
    Route::resource('disposals','DisposalsController');
    Route::resource('plcs','PlcsController');
    Route::get('own/{owns}', 'OwnsController@index');
    
    Route::get('assets/{assets}/transfer', 'PagesController@transfer');
    
    
    Route::get('/disposal', 'PagesController@disposal');
    
    Route::get('/home', 'PagesController@index');
    Route::get('/assigned', 'PagesController@assigned');
    Route::get('/users', 'UsersController@index');
    Route::get('/search', 'PagesController@getsearch');
    Route::get('/summary', 'PagesController@report');
    Route::get('/report', 'PagesController@getreport');
    
});
