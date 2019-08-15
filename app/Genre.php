<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    
	protected $table = 'genres';


	public function series()
	{
		return $this->belongsToMany('App\Series');
	}

}
