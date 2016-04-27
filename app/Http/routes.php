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
Route::get('/formation/presentation','PagesController@presentation');
Route::get('/formation/admission','PagesController@admission');
Route::get('/formation/debouches','PagesController@openings');
Route::get('/realisations','PagesController@projects');
Route::get('/nos-etudiants','PagesController@students');
Route::get('/vie-etudiante','PagesController@studentLife');
Route::get('/international','PagesController@international');
Route::get('/partenaires','PagesController@partnership');
Route::get('/contact','PagesController@contact');
Route::get('/realisations/{url}','PagesController@project');
Route::get('/mentions-legales','PagesController@legalNotice');


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
    //View Student Testimonial
    Route::resource('admin/StudentTestimonial','AdminStudentTestimonialController');
    //View Student Exchange Testimonial
    Route::resource('admin/StudentExchangeTestimonial','AdminStudentExchangeTestimonialController');
    //DESTROYING PIC FOR GALLERY
    Route::get('admin/DestroyPicTestimonial/{id}','AdminStudentExchangeTestimonialController@destroyPic');
    //View staff
    Route::resource('admin/Staff','AdminStaffController');
    //View promotions
    Route::resource('admin/Promo','AdminPromoController');
    //View partnership
    Route::resource('admin/Partnership','AdminPartnershipController');
        //[AJAX] Change order of display
        Route::get('admin/orderPartnership/{data}','AdminPartnershipController@order');
    //View students
    Route::resource('admin/Student','AdminStudentController');
        //[AJAX] Search Student
        Route::get('admin/findStudents/{s}','AdminStudentController@search');
        //[AJAX] Add Student to Project
        Route::get('admin/AddStudentToProject/{idStudent}/{idProject}','AdminStudentController@addToProject');
        //[AJAX] Remove Student From Project
        Route::get('admin/RemoveStudentFromProject/{idStudent}/{idProject}','AdminStudentController@removeFromProject');
    //View tags
    Route::resource('admin/Tag','AdminTagController');
        //[AJAX] Add Tag to Project
        Route::get('admin/AddTagToProject/{idTag}/{idProj}','AdminTagController@addTag');
        //[AJAX] Remove Tag to Project
        Route::get('admin/RemoveTagToProject/{idTag}/{idProj}','AdminTagController@removeTag');
    //View others
    Route::get('admin/others','AdminOthersController@index');
    Route::post('admin/others/timer','AdminOthersController@updateTimer');
    Route::post('admin/others/application','AdminOthersController@updateApplicationDates');

//TEST
Route::get('timer','PagesController@timer');

?>
