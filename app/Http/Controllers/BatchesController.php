<?php

namespace App\Http\Controllers;

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

}
