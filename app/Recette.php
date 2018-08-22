<?php

namespace App;

class Recette extends Eloquent {

	protected $table = 'Recette';
	public $timestamps = false;

	public function Auto_ecole()
	{
		return $this->belongsTo('App\Auto_ecole');
	}

}