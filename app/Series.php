<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Series extends Model
{
    
	protected $table = 'series';

	public function genre()
	{
		return $this->belongsToMany('App\Genre');
	}

	public function episode()
	{
		return $this->hasMany('App\Episode');
	}

	public function jadwal()
	{
		return $this->hasMany('App\Jadwal');
	}
	

}
