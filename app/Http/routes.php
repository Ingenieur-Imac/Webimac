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

// Route::any('foo', function() // répond à n'importe quelle requête
// Route::match(['get','post'],'foo',function() // répond à plusieurs types de requêtes (get et post)

//Pour passer un paramètre :
    //Standard : Route::get('foo/{bar}',function($bar)
    //With default : Route::get('foo/{bar?}',function($bar = null)

Route::get('/','PagesController@index');
Route::get('about','PagesController@about');

Route::get('articles','ArticlesController@index');
Route::get('articles/create','ArticlesController@create');
Route::get('articles/{id}','ArticlesController@show');
Route::post('articles','ArticlesController@store');




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

Route::group(['middleware' => ['web']], function () {
    //
});
