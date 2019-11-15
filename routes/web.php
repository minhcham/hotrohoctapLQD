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

//Auth::routes();
Route::post('logout', 'Auth\LoginController@postLogout')->name('logout');
Route::get('login', 'Auth\LoginController@getLogin');
Route::post('login', 'Auth\LoginController@postLogin')->name('login');
Route::post('dangky', 'Auth\LoginController@postDangky')->name('dangky');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('canhan', 'HomeController@getContact')->name('get_contact');
Route::post('canhan', 'HomeController@postContact');
Route::get('monhoc', 'MonhocController@getMonhoc')->name('get_monhoc');
Route::post('monhoc', 'MonhocController@postThemmon')->name('add_monhoc');
