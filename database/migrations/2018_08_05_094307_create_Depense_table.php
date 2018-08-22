<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepenseTable extends Migration {

	public function up()
	{
		Schema::create('Depense', function(Blueprint $table) {
			$table->increments('id');
			$table->date('Date');
			$table->integer('Montant');
			$table->string('Mode_paiement', 255);
			$table->string('Designations', 255);
			$table->integer('id_Auto_ecole')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Depense');
	}
}