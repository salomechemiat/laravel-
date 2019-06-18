<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
	public function fees()
    {
    	 return $this->hasMany('App\fees');
    	 
    }

    //
}
