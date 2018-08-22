<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonneTable extends Migration {

	public function up()
	{
		Schema::create('personne', function(Blueprint $table) {
			$table->increments('id');
			$table->string('Nom', 20);
			$table->string('Prenom', 20);
			$table->date('Date_nais');
			$table->string('Sexe', 20);
			$table->string('Adresse', 255);
			$table->string('email', 255);
			$table->string('password', 255);
			$table->string('Photo', 255);
			$table->string('remember_token', 255);
		});
	}

	public function down()
	{
		Schema::drop('personne');
	}
}