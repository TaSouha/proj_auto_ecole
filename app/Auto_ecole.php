<?php

namespace App;

class Auto_ecole extends Eloquent {

	protected $table = 'Auto_ecole';
	public $timestamps = false;

	public function Vehicule()
	{
		return $this->hasMany('App\Vehicule');
	}

	public function Candidat()
	{
		return $this->hasMany('App\Auto_ecole');
	}

	public function Teamwork()
	{
		return $this->hasMany('App\Teamwork');
	}

	public function Parametrage()
	{
		return $this->hasOne('App\Parametrage');
	}

	public function Depense()
	{
		return $this->hasMany('App\Depense');
	}

	public function Recette()
	{
		return $this->hasMany('App\Recette');
	}

	public function Facteur()
	{
		return $this->hasOne('App\Facture');
	}

}