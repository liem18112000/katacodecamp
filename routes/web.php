<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

// ----------------------------------- Page Routes -------------------------------------

Route::get('/', 'PageController@index');

Auth::routes();

Route::get('/home', 'PageController@index')->name('home');

Route::get('/about', 'PageController@about')->name('about');

Route::get('/frontend', 'PageController@frontend')->name('frontend');

// ----------------------------------- Page Routes -------------------------------------



// ----------------------------------- Lesson Routes -------------------------------------

Route::get('/lesson', 'LessonController@index')->name('lesson.index');

Route::get('/lesson/{lesson}', 'LessonController@show')->name('lesson.show');

Route::get('/lesson/create', 'LessonController@create')->name('lesson.create');

Route::post('/lesson/store', 'LessonController@store')->name('lesson.store');

Route::get('/lesson/{lesson}/edit', 'LessonController@edit')->name('lesson.edit');

Route::put('/lesson/{lesson}/update', 'LessonController@update')->name('lesson.update');

// ----------------------------------- Lesson Routes -------------------------------------



// ----------------------------------- Profile Routes -------------------------------------

Route::get('/profile', 'ProfileController@index')->name('profile.index');

Route::get('/profile/{profile}', 'ProfileController@show')->name('profile.show');

Route::get('/profile/create', 'ProfileController@create')->name('profile.create');

Route::post('/profile/store', 'ProfileController@store')->name('profile.store');

Route::get('/profile/{profile}/edit', 'ProfileController@edit')->name('profile.edit');

Route::put('/profile/{profile}/update', 'ProfileController@update')->name('profile.update');

// ----------------------------------- Profile Routes -------------------------------------
