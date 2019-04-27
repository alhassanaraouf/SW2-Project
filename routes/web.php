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
Route::post('/livetable/fetch_data', 'LiveTable@add_data')->name('livetable.add_data');
Route::post('/livetable/update_data', 'LiveTable@update_data')->name('livetable.update_data');
Route::post('/livetable/delete_data', 'LiveTable@delete_data')->name('livetable.delete_data');


Route::get('/livetablec', 'CoursesController@index');
Route::get('/livetablec/fetch_data', 'CoursesController@fetch_data');
Route::post('/livetablec/add_data', 'CoursesController@add_data')->name('livetablec.add_data');
Route::post('/livetablec/update_data', 'CoursesController@update_data')->name('livetablec.update_data');
Route::post('/livetablec/delete_data', 'CoursesController@delete_data')->name('livetablec.delete_data');



Route::get('/StudentCoursesController', 'StudentCoursesController/@index');
Route::get('/StudentCoursesController/fetch_data', 'StudentCoursesController@fetch_data');
Route::get('/StudentCoursesController/fetch1_data', 'StudentCoursesController@fetch1_data');
Route::get('/StudentCoursesController/fetch2_data', 'StudentCoursesController@fetch2_data');
Route::get('/StudentCoursesController/fetch3_data', 'StudentCoursesController@fetch3_data');





Route::get('/instructorcourses', 'InstructorCoursesController@index');
Route::get('/instructorcourses/fetch_data', 'InstructorCoursesController@fetch_data');
Route::post('/instructorcourses/add_data', 'InstructorCoursesController@add_data')->name('instructorcourses.add_data');

Route::resource('books', 'BookController');
Route::get('books/{uuid}/download', 'BookController@download')->name('books.download');

Route::get('/viewstudent', 'ShowStudents@index');
Route::get('/viewstudent/fetch_data', 'ShowStudents@fetch_data');
Route::post('/viewstudent/update_data', 'ShowStudents@update_data')->name('viewstudent.update_data');

Route::get('/viewpost', 'PostController@index');
Route::post('/viewpost/load_data', 'PostController@load_data')->name('viewpost.load_data');

Route::get('/managepost', 'ManagePostController@index');
Route::get('/managepost/fetch_data', 'ManagePostController@fetch_data');
Route::post('/managepost/add_data', 'ManagePostController@add_data')->name('managepost.add_data');
Route::post('/managepost/update_data', 'ManagePostController@update_data')->name('managepost.update_data');
Route::post('/managepost/delete_data', 'ManagePostController@delete_data')->name('managepost.delete_data');

Route::get('/studentcourses', 'StudentCoursesController@index');
Route::get('/studentcourses/fetch_data', 'StudentCoursesController@fetch_data');


Route::resource('stubook', 'StudentListBookController');
Route::get('stubook/{uuid}/download', 'StudentListBookController@download')->name('stubook.download');

Route::get('/viewgrade', 'ViewGradeController@index');
Route::get('/viewgrade/fetch_data', 'ViewGradeController@fetch_data');




