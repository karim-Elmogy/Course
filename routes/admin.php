<?php

use Illuminate\Support\Facades\Route;



Route::get('/dashboard/home','DashboardController@index')->name('Home')->middleware('admin');

Route::resource('users','UserController');
Route::resource('categories','CategoryController');
Route::resource('courses','CourseController');
Route::resource('lessons','LessonController');
Route::resource('sites','SiteController');
