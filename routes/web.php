<?php

use App\Task;

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

// Route::get('/batch/{batch}', 'BatchesController@show');
 
// Route::get('/tasks/{task}', function ($id) {

// 		$task = Task::find($id);

//     return view('tasks.show', compact('task'));
// });

Route::get('/', 'PostsController@index');

Route::get('/batch/read', 'BatchesController@index');

Route::get('/batch/{batch}', 'BatchesController@show');

Route::get('/batch/write', 'BatchesController@write');

Route::get('/members', 'MembersController@index');

Route::get('/members/signup', 'MembersController@signup');

// Route::get('/batch', 'BatchesController@index');

Route::get('/batch/create', 'BatchesController@create');
