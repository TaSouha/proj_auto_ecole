<?php

namespace App;

class Seance_pratique extends Eloquent {

	protected $table = 'Seance_pratique';
	public $timestamps = false;

	public function moniteur()
	{
		return $this->belongsTo('App\Teamwork');
	}

	public function Candidat()
	{
		return $this->belongsTo('App\Candidat');
	}

}