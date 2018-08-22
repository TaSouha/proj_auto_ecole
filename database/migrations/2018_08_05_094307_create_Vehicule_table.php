<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiculeTable extends Migration {

	public function up()
	{
		Schema::create('Vehicule', function(Blueprint $table) {
			$table->string('Matricule', 4)->primary();
			$table->string('Marque', 255);
			$table->string('Type', 255);
			$table->integer('id_Auto_ecole')->unsigned();
			$table->integer('id_moniteur')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Vehicule');
	}
}