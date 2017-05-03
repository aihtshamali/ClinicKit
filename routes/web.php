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

Route::get('/', 'TimeTableController@welcome')->name('/');
Auth::routes();

  Route::prefix('admin')->group(function(){
    Route::get('/profile','AdminController@showProfile')->name('admin/profile');
    Route::get('/login','AdminLoginController@ShowLoginForm');
    Route::post('/login','AdminLoginController@login')->name('admin/login');
    Route::get('/newDoctor','AdminController@ShowCreateDoctor');
    Route::post('/Doctor','AdminController@createDoctor')->name('admin/createDoctor');

    });
    Route::prefix('patient')->group(function(){
      Route::get('/login','PatientLoginController@ShowLoginForm');
      Route::post('/login','PatientLoginController@login')->name('patient/login');
      Route::get('/','PatientController@showProfile')->name('/profile');
});

    //Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard','AdminController@index')->name('admin/dashboard');
    Route::get('/logout','HomeController@Logout');
    Route::get('/home', 'HomeController@index');
 //});
