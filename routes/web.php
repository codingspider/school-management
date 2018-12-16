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


// Route::resource('/student', 'StudentController'); 

Route::get('/student', 'AddStudentController@index');
Route::get('/student/create', 'AddStudentController@create');
Route::post('/student/create', 'AddStudentController@store');
Route::get('/student/all', 'AllStudentController@index');

Route::get('student_delete/{id}','AddStudentController@delete'); 
Route::get('student_profile/{id}','AllStudentController@profile'); 
Route::get('student_edit/{id}','AllStudentController@edit'); 
// Route::post('update_student/{id}','AllStudentController@update');

Route::post('/update_student/{id}', 'AllStudentController@update'); 




// class controller

Route::get('/class/one', 'OneClassController@one');
Route::get('/class/one', 'OneClassController@two');


//Routine routes

Route::get('/routine/view', 'AddRoutineController@index'); 
Route::get('/routine/create', 'AddRoutineController@create');
Route::post('/routine/create', 'AddRoutineController@store');





//Semester routs

Route::get('/semester/create', 'SemesterController@create');
Route::post('/semester/create', 'SemesterController@store');


//Teacher routes

Route::get('/teacher/create', 'TeacherController@create');
Route::post('/teacher/create', 'TeacherController@store');


//Subject routes

Route::get('/subject/create', 'SubjectController@create');
Route::post('/subject/create', 'SubjectController@store');