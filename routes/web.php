<?php

Route::get('/tasks/', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');


Route::get('/', 'PostsController@index');

Route::get('/batch/read', 'BatchesController@index');

Route::get('/batch/write', 'BatchesController@write');

Route::get('/members', 'MembersController@index');

Route::get('/members/signup', 'MembersController@signup');

// Route::get('/batch', 'BatchesController@index');

Route::get('/batch/create', 'BatchesController@create');
