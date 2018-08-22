<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlerteAVTable extends Migration {

	public function up()
	{
		Schema::create('Alerte_AV', function(Blueprint $table) {
			$table->increments('id');
			$table->date('Date_present');
			$table->date('Date_prochain');
			$table->string('Description', 255);
			$table->string('Type', 255);
			$table->string('id_Vehicule', 4);
		});
	}

	public function down()
	{
		Schema::drop('Alerte_AV');
	}
}