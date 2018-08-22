<?php

namespace App;

class Seance_theorique extends Eloquent {

	protected $table = 'Seance_theorique';
	public $timestamps = false;

	public function Formateur()
	{
		return $this->belongsTo('App\Teamwork');
	}

	public function Candidat()
	{
		return $this->belongsToMany('App\Candidat');
	}

}