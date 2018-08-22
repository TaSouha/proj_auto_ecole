<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlerteVidangeTable extends Migration {

	public function up()
	{
		Schema::create('Alerte_Vidange', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('Kilometrage_actuel');
			$table->integer('Kilometrage');
			$table->string('Type_d_huile', 255);
			$table->string('Type_d_filtre', 255);
			$table->date('Date_operation');
			$table->string('id_Vehicule', 4);
		});
	}

	public function down()
	{
		Schema::drop('Alerte_Vidange');
	}
}