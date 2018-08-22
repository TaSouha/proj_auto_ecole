<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModerateurTable extends Migration {

	public function up()
	{
		Schema::create('Moderateur', function(Blueprint $table) {
			$table->increments('id');
			$table->string('Nom', 20);
			$table->string('Prenom', 20);
			$table->string('email', 255);
			$table->string('password', 255);
			$table->string('Photo', 255);
		});
	}

	public function down()
	{
		Schema::drop('Moderateur');
	}
}