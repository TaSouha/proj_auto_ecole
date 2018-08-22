<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamenTable extends Migration {

	public function up()
	{
		Schema::create('Examen', function(Blueprint $table) {
			$table->increments('id');
			$table->date('Date_dec');
			$table->datetime('Date_exa');
			$table->string('Resultat', 255);
			$table->string('Type_Exa', 255);
			$table->integer('id_Candidat')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Examen');
	}
}