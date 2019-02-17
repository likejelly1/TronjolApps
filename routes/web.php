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
// Route::post('/login','LoginController@login')->middleware('isadmin');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/verified_mail/{name}',['uses'=> 'UserController@verifiedMail', 'as' => 'verify']);
Route::get('/delete/{id}',['uses'=> 'UserController@destroy', 'as'=> 'delete.user']);
