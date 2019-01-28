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

Route::get("test", function(){
	return view('testmaster');
});

Auth::routes();
Route::get('logout', function(){
	Auth::logout();
	return redirect('login');
});
Route::get('/home', 'HomeController@index')->name('home');

// dashboard code goes here
Route::get('/dashboard', 'DashboardController@index')->name('Dashboard');


//after registration first personal routes goes here

Route::get('participant/add', 'ParticipantController@add')->name('ParticipantAdd');
Route::post('participant/create', 'ParticipantController@create')->name('ParticipantCreate');
Route::post('participant/edit', 'ParticipantController@edit')->name('ParticipantEdit');
Route::post('participant/update', 'ParticipantController@update')->name('ParticipantUpdate');
Route::get('participant/list', 'ParticipantController@list')->name('ParticipantList');
Route::delete('participant/delete', 'ParticipantController@delete')->name('ParticipantDelete');

//Training routes goes here

Route::get('training/add', 'TrainingController@add')->name('TrainingAdd');
Route::post('training/edit', 'TrainingController@edit')->name('TrainingEdit');
Route::post('training/update', 'TrainingController@update')->name('TrainingUpdate');
Route::post('training/create', 'TrainingController@create')->name('TrainingCreate');
Route::get('training/list', 'TrainingController@list')->name('TrainingList');
Route::post('training/delete', 'TrainingController@delete')->name('TrainingDelete');
Route::post('training/view', 'TrainingController@view')->name('TrainingView');

//Enrolment routes goes here
Route::post('enrol/participant', 'EnrolmentController@create')->name('EnrolmentCreate');


// resource person routes goes here
Route::get('resource/add', 'ResourcePersonController@add')->name('ResourcePersonAdd');
Route::post('resource/create', 'ResourcePersonController@create')->name('ResourcePersonCreate');
Route::get('resource/list', 'ResourcePersonController@list')->name('ResourcePersonList');

// user insertion code goes here
Route::get('user/add', 'HomeController@add')->name('UserAdd');
Route::post('user/create', 'HomeController@createu')->name('UserCreate');