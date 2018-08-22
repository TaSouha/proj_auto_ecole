<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParametrageTable extends Migration {

	public function up()
	{
		Schema::create('Parametrage', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('Nbre_moniteur');
			$table->integer('Nbre_candidat');
			$table->integer('Nbre_formateur');
			$table->integer('id_Auto_ecole')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Parametrage');
	}
}