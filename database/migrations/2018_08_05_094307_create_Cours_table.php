<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursTable extends Migration {

	public function up()
	{
		Schema::create('Cours', function(Blueprint $table) {
			$table->increments('id');
			$table->string('Titre', 255);
			$table->string('Lien', 255);
			$table->string('Description', 255);
		});
	}

	public function down()
	{
		Schema::drop('Cours');
	}
}