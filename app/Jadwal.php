<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    
	protected $table = 'jadwals';


	public function hari()
    {
    	return $this->belongsTo('App\Hari');
    }

    public function series()
    {
    	return $this->belongsTo('App\Series', 'id_series');
    }

	

}
