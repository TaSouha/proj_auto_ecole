<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeanceTable extends Migration {

	public function up()
	{
		Schema::create('Seance', function(Blueprint $table) {
			$table->increments('id');
			$table->datetime('Date');
			$table->string('Etat', 255);
		});
	}

	public function down()
	{
		Schema::drop('Seance');
	}
}