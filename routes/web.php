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
Route::get('/userhome', function () {
    return view('userhome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'TaskController@index')->name('index');


Route::get('admin/routes', 'AdminController@admin')->middleware('admin');

Route::get('instructor/routes', 'InstructorController@instructor')->middleware('instructor');


Route::get('/livetable', 'LiveTable@index');
Route::get('/livetable/fetch_data', 'LiveTable@fetch_data');
Route::post('/livetable/add_data', 'LiveTable@add_data')->name('livetable.add_data');
Route::post('/livetable/update_data', 'LiveTable@update_data')->name('livetable.update_data');
Route::post('/livetable/delete_data', 'LiveTable@delete_data')->name('livetable.delete_data');


Route::get('/livetablec', 'CoursesController@index');
Route::get('/livetablec/fetch_data', 'CoursesController@fetch_data');
Route::post('/livetablec/add_data', 'CoursesController@add_data')->name('livetablec.add_data');
Route::post('/livetablec/update_data', 'CoursesController@update_data')->name('livetablec.update_data');
Route::post('/livetablec/delete_data', 'CoursesController@delete_data')->name('livetablec.delete_data');


Route::get('/viewstudent', 'ShowStudents@index');
Route::get('/viewstudent/fetch_data', 'ShowStudents@fetch_data');
Route::post('/viewstudent/update_data', 'ShowStudents@update_data')->name('viewstudent.update_data');






