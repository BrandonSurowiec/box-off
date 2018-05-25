<?php

// Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Post Routes 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{post}', 'PostController@show'); 
Route::post('/posts', 'PostController@store'); 

// Comment Routes 
Route::post('/comment', 'CommentController@store'); 

Auth::routes();
