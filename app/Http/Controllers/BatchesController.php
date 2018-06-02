<?php

namespace App\Http\Controllers;

use App\Batch;

use Illuminate\Http\Request;

class BatchesController extends Controller
{

	public function index() 

	{
		return view('batches.index');
	}

	public function write() 

	{
		return view('batches.write');
	}

	public function create() 

	{
		return view('batches.create');
	}

	public function show(Batch $batch)
	{
	    // $task = Task::find($id);

		// dd($batch);

	    return view('batches.show', compact('batch'));    
	}


}
