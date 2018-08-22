<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeancePratiqueTable extends Migration {

	public function up()
	{
		Schema::create('Seance_pratique', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('Prix');
			$table->integer('id_moniteur')->unsigned();
			$table->integer('id_candidat')->unsigned();
			$table->integer('id_Seance')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Seance_pratique');
	}
}