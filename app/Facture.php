<?php

namespace App;

class Facture extends Eloquent {

	protected $table = 'Facture';
	public $timestamps = false;

	public function Candidat()
	{
		return $this->belongsTo('App\Candidat');
	}

	public function Auto_ecole()
	{
		return $this->belongsTo('App\Facture');
	}

}