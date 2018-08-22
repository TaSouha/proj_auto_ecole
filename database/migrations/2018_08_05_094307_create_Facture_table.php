<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFactureTable extends Migration {

	public function up()
	{
		Schema::create('Facture', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('Montant');
			$table->string('Montant_paye');
			$table->integer('Montant_rest');
			$table->integer('id_Candidat')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Facture');
	}
}