<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout');
});

Route::get('/add-subject','StudentController@addSubject');
Route::post('/save-subject','StudentController@saveSubject');
Route::get('/view-subject','StudentController@viewSubject');
Route::get('/delete-subject{subject_id}','StudentController@deleteSubject');
Route::get('/edit-subject{subject_id}','StudentController@editSubject');
Route::post('/update-subject{subject_id}','StudentController@updateSubject');





