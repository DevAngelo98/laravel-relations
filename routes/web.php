<?php

Route::redirect('/', '/posts');

Route::resource('posts', 'PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
