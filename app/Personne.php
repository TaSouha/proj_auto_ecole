<?php

namespace App;
use Eloquent;
use Illuminate\Foundation\Auth\Personne as Authenticatable;

class Personne extends Authenticatable {


protected $table = 'personne';
    public $timestamps = false;

   
     /**
     * The attributes that are mass assignable.remember_token
     *
     * @var array
     */
    protected $fillable = [
        'Nom', 'Prenom','Date_nais','Sexe', 'Adresse','email','password','Photo','remember_token'
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