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

Auth::routes();

Route::get('/', 'HomeController@index')->name('lecture');

Route::group(['middleware' => 'auth'], function() {

Route::get('/studentai/pazymiai/{student}', 'GradeController@getGrade')->name('grade');
Route::post('/studentai/pazymiai/{id}', 'GradeController@storeGrade')->name('storeGrade');
Route::get('/studentai/pazymiai/grade/{grade}', 'GradeController@getUpdateGrade')->name('update-grade');
Route::put('/studentai/pazymiai/grade/{id}', 'GradeController@updateGrade')->name('update-lecture');
Route::delete('/studentai/pazymiai/grade/{id}', 'GradeController@destroyGrade')->name('deleteGrade');

Route::get('/paskaitos', 'LectureController@getLecture')->name('lecture');
Route::post('/paskaitos', 'LectureController@storeLecture')->name('storeLecture');
Route::get('/paskaitos/{lecture}', 'LectureController@getUpdateLecture')->name('update-lecture');
Route::put('/paskaitos/{id}', 'LectureController@updateLecture')->name('updatePutLecture');
Route::delete('/paskaitos/{id}', 'LectureController@destroyLecture')->name('deleteLecture');

Route::get('/studentai', 'StudentController@getStudent')->name('student');
Route::post('/studentai', 'StudentController@storeStudent')->name('storeStudent');
Route::get('/studentai/{student}', 'StudentController@getUpdateStudent')->name('update-student');
Route::put('/studentai/{id}', 'StudentController@updateStudent')->name('updatePutStudent');
Route::delete('/studentai/{id}', 'StudentController@destroyStudent')->name('deleteStudent');

Route::get('/teacher', 'UserController@getTeacher')->name('teacher');
Route::post('/teacher', 'UserController@storeTeacher')->name('storeTeacher');
Route::get('/teacher/{teach}', 'UserController@getUpdateTeacher')->name('update-teacher');
Route::put('/teacher/{id}', 'UserController@updateTeacher')->name('updatePutTeacher');
Route::delete('/teacher/{id}', 'UserController@destroyTeacher')->name('deleteTeacher');
});
