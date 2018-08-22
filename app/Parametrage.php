<?php

namespace App;

class Parametrage extends Eloquent {

	protected $table = 'Parametrage';
	public $timestamps = false;

	public function Auto_ecole()
	{
		return $this->belongsTo('App\Auto_ecole');
	}

}