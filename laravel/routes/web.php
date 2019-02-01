<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function()
{
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/users', 'UsersController@index');
    Route::get('/users/{user_id}', 'UsersController@show');

    Route::get('/posts', 'PostsController@index');
    Route::get('/posts/{post_id}', 'PostsController@show');
});

Route::prefix('demo')->group(function() {
    Route::get('jobs/{count}', 'DemoController@jobs');
    Route::get('exceptions', 'DemoController@exceptions');
    Route::get('dumps', 'DemoController@dumps');
    Route::get('models', 'DemoController@models');
    Route::get('events', 'DemoController@events');
    Route::get('notifications', 'DemoController@notifications');
});
