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

Route::get('/','PagesController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//Partie Admin
Route::get('admin/','AdminPagesController@login');
Route::get('admin/home','AdminPagesController@admHome');
Route::get('admin/logout','AdminPagesController@logout');
    //View Project
    Route::get('admin/project','AdminProjectController@listAll');
    Route::get('admin/project/edit/{id}','AdminProjectController@edit');
    Route::patch('admin/project/update/{id}','AdminProjectController@update');
    Route::get('admin/project/create','AdminProjectController@create');
    Route::post('admin/project','AdminProjectController@store');
    Route::delete('admin/project/{id}','AdminProjectController@delete');


?>
