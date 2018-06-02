<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
		public function entries() 

		{
			return $this->hasMany(Entry::class);

		}
    //
}
