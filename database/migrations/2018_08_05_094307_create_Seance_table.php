<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeanceTable extends Migration {

	public function up()
	{
		Schema::create('Seance', function(Blueprint $table) {
			$table->increments('id');
			$table->date('Date');
			$table->time('Debut');
			$table->time('Fin');

			$table->string('Etat', 255);
		});
	}

	public function down()
	{
		Schema::drop('Seance');
	}
}