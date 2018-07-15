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
    // return view('welcome');
    return redirect()->route('films.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('films/list', 'FilmController@list');
Route::resource('films','FilmController');
