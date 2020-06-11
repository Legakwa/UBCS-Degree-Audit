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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show','create','store']]);
});

//courses routes
Route::get('courses/form', 'CourseController@create')->name('courses.create');
Route::post('courses', 'CourseController@store')->name('courses.store');

Route::get('/downloadPDF/{id}','CourseController@downloadPDF');

Route::get('courses/list', 'CourseController@index')->name('courses.index');

//programs routes
Route::get('programs/form', 'ProgramController@create')->name('programs.create');
Route::post('programs', 'ProgramController@store')->name('programs.store');

Route::get('/downloadPDF/{id}','ProgramController@downloadPDF');

Route::get('programs/list', 'ProgramController@index')->name('programs.index');


Route::resource('programs','ProgramController');
Route::resource('courses','CourseController');

//course_program routes
Route::get('course_programs', 'Course_programController@create')->name('course_programs.create');
Route::post('course_programs', 'Course_programController@store')->name('course_programs.store');