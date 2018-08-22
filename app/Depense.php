<?php

namespace App;

class Depense extends Eloquent {

	protected $table = 'Depense';
	public $timestamps = false;

	public function Auto_ecole()
	{
		return $this->belongsTo('App\Auto_ecole');
	}

}