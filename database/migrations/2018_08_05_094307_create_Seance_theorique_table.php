<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeanceTheoriqueTable extends Migration {

	public function up()
	{
		Schema::create('Seance_theorique', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('Prix');
			$table->integer('id_formateur')->unsigned();
			$table->integer('id_candidat')->unsigned();
			$table->integer('id_Seance')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Seance_theorique');
	}
}