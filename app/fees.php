<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fees extends Model
{
	public function student()
    {
    	return $this->belongsTo('App\student');
    	

    }
    //
}
