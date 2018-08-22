<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamworkTable extends Migration {

	public function up()
	{
		Schema::create('Teamwork', function(Blueprint $table) {
			$table->increments('id');
			$table->string('Type', 255);
			$table->integer('id_Auto_ecole')->unsigned();
			$table->integer('id_Personne')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Teamwork');
	}
}