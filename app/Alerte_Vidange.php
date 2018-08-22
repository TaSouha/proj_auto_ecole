<?php

namespace App;

class Alerte_Vidange extends Eloquent {

	protected $table = 'Alerte_Vidange';
	public $timestamps = false;

	public function Vehicule()
	{
		return $this->belongsTo('App\Vehicule');
	}

}