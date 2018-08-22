<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutoEcoleTable extends Migration {

	public function up()
	{
		Schema::create('Auto_ecole', function(Blueprint $table) {
			$table->increments('id');
			$table->string('Nom', 20);
			$table->string('Lieu', 255);
			$table->string('Adresse', 255);
			$table->string('Photo', 255);
			$table->string('Description', 255);
		});
	}

	public function down()
	{
		Schema::drop('Auto_ecole');
	}
}