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
Route::get('/inicio', 'indexController@inicio')->name('inicio');

/*Route::get('/profile/edit/', 'UserController@edit')->name('user.edit');

Route::patch('profile/save', 'UserController@update')->name('user.update');
Route::get('profile/store/$id', 'UserController@store')->name('user.store');

*/

Route::resource('/profile/user', 'UserController')->except('profile', 'profile_update');

Route::get('/profile', 'UserController@profile')->name('user.profile');
Route::post('/profile/edit/$id', 'UserController@update_profile')->name('user.profile.update');
