<?php

Route::get('/', 'PostsController@index');

Route::get('/read', 'BatchesController@index');

Route::get('/write', 'BatchesController@write');

Route::get('/members', 'MembersController@index');

Route::get('/batch', 'BatchesController@index');

Route::get('/batch/create', 'BatchesController@create');


