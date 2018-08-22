<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecetteTable extends Migration {

	public function up()
	{
		Schema::create('Recette', function(Blueprint $table) {
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
		Schema::drop('Recette');
	}
}