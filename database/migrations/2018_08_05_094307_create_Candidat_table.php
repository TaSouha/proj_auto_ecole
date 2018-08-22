<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatTable extends Migration {

	public function up()
	{
		Schema::create('Candidat', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_Auto_ecole')->unsigned();
			$table->integer('id_Personne')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Candidat');
	}
}