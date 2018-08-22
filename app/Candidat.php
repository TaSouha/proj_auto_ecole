<?php

namespace App;

class Candidat extends Eloquent {

	protected $table = 'Candidat';
	public $timestamps = false;

	public function avoir()
	{
		return $this->hasMany('App\Seance_pratique');
	}

	public function Seance_theorique()
	{
		return $this->hasMany('App\Seance_theorique');
	}

	public function Auto_ecole()
	{
		return $this->belongsTo('App\Auto_ecole');
	}

	public function Facture()
	{
		return $this->hasOne('App\Facture');
	}

	public function Paiement()
	{
		return $this->hasMany('App\Paiement');
	}

	public function Examen()
	{
		return $this->hasMany('App\Examen');
	}

}