<?php

namespace App;

class Examen extends Eloquent {

	protected $table = 'Examen';
	public $timestamps = false;

	public function Candidat()
	{
		return $this->belongsTo('App\Candidat');
	}

}