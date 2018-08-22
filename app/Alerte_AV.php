<?php

namespace App;

class Alerte_AV extends Eloquent {

	protected $table = 'Alerte_AV';
	public $timestamps = false;

	public function Vehicule()
	{
		return $this->belongsTo('App\Vehicule');
	}

}