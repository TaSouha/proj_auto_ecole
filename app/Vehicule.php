<?php

namespace App;

class Vehicule extends Eloquent {

	protected $table = 'Vehicule';
	public $timestamps = false;

	public function Auto_ecole()
	{
		return $this->belongsTo('App\Auto_ecole');
	}

	public function Alerte_AV()
	{
		return $this->hasOne('App\Alerte_AV');
	}

	public function Alerte_vidange()
	{
		return $this->hasOne('App\Alerte_Vidange');
	}

	public function Teamwork()
	{
		return $this->belongsTo('App\Teamwork');
	}

}