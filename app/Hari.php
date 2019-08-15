<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    
	protected $table = 'haris';


	public function jadwal()
	{
		return $this->hasMany('App\Jadwal');
	}


}
