<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{

	public function batch() 

	{
		
		return $this->belongsTo(Batch::class);
    //
	}
}
