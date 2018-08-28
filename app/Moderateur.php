<?php

namespace App;
use Eloquent;
use Illuminate\Foundation\Auth\Personne as Authenticatable;
class Moderateur extends Authenticatable {

	protected $table = 'moderateur';
	public $timestamps = false;


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nom', 'Prenom','email','password','Photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}