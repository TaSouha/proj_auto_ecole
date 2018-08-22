<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaiementTable extends Migration {

	public function up()
	{
		Schema::create('Paiement', function(Blueprint $table) {
			$table->increments('id');
			$table->date('Date_ope');
			$table->integer('Montant');
			$table->integer('id_Candidat')->unsigned();
			$table->string('Designations', 255);
		});
	}

	public function down()
	{
		Schema::drop('Paiement');
	}
}