<?php

namespace App;

class Teamwork extends Eloquent {

	protected $table = 'Teamwork';
	public $timestamps = false;

	public function avoir()
	{
		return $this->hasMany('App\Seance_theorique');
	}

	public function avoir()
	{
		return $this->hasMany('App\Seance_pratique');
	}

	public function Auto_ecole()
	{
		return $this->belongsTo('App\Auto_ecole');
	}

	public function Vehicule()
	{
		return $this->hasOne('App\Vehicule');
	}

}