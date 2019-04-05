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

Route::get('admin/routes', 'AdminController@admin')->middleware('admin');

Route::get('instructor/routes', 'InstructorController@instructor')->middleware('instructor');


Route::get('/livetable', 'LiveTable@index');
Route::get('/livetable/fetch_data', 'LiveTable@fetch_data');
Route::post('/livetable/add_data', 'LiveTable@add_data')->name('livetable.add_data');
