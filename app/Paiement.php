<?php

namespace App;

class Paiement extends Eloquent {

	protected $table = 'Paiement';
	public $timestamps = false;

	public function Candidat()
	{
		return $this->belongsTo('App\Candidat');
	}

}