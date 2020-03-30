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

Route::get('/', 'myFirstController@show');

Route::get('/login','myLoginController@Login');
Route::post('/form', 'myLoginController@Val')->name('login.validate');


Route::get('/signup','mySignupController@Signup');
Route::post('/formval', 'mySignupController@Val')->name('signup.validate');

Route::get('/cons',function(){
    return view('notbuild');
});