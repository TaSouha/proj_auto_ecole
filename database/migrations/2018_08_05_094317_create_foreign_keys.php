<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Candidat', function(Blueprint $table) {
			$table->foreign('id_Auto_ecole')->references('id')->on('Auto_ecole')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Candidat', function(Blueprint $table) {
			$table->foreign('id_Personne')->references('id')->on('personne')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Teamwork', function(Blueprint $table) {
			$table->foreign('id_Auto_ecole')->references('id')->on('Auto_ecole')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Teamwork', function(Blueprint $table) {
			$table->foreign('id_Personne')->references('id')->on('personne')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Vehicule', function(Blueprint $table) {
			$table->foreign('id_Auto_ecole')->references('id')->on('Auto_ecole')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Vehicule', function(Blueprint $table) {
			$table->foreign('id_moniteur')->references('id')->on('Teamwork')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Seance_pratique', function(Blueprint $table) {
			$table->foreign('id_moniteur')->references('id')->on('Teamwork')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Seance_pratique', function(Blueprint $table) {
			$table->foreign('id_candidat')->references('id')->on('Candidat')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Seance_pratique', function(Blueprint $table) {
			$table->foreign('id_Seance')->references('id')->on('Seance')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Seance_theorique', function(Blueprint $table) {
			$table->foreign('id_formateur')->references('id')->on('Teamwork')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Seance_theorique', function(Blueprint $table) {
			$table->foreign('id_candidat')->references('id')->on('Candidat')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Seance_theorique', function(Blueprint $table) {
			$table->foreign('id_Seance')->references('id')->on('Seance')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Examen', function(Blueprint $table) {
			$table->foreign('id_Candidat')->references('id')->on('Candidat')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Paiement', function(Blueprint $table) {
			$table->foreign('id_Candidat')->references('id')->on('Candidat')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Facture', function(Blueprint $table) {
			$table->foreign('id_Candidat')->references('id')->on('Candidat')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Recette', function(Blueprint $table) {
			$table->foreign('id_Auto_ecole')->references('id')->on('Auto_ecole')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Depense', function(Blueprint $table) {
			$table->foreign('id_Auto_ecole')->references('id')->on('Auto_ecole')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Parametrage', function(Blueprint $table) {
			$table->foreign('id_Auto_ecole')->references('id')->on('Auto_ecole')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Candidat', function(Blueprint $table) {
			$table->dropForeign('Candidat_id_Auto_ecole_foreign');
		});
		Schema::table('Candidat', function(Blueprint $table) {
			$table->dropForeign('Candidat_id_Personne_foreign');
		});
		Schema::table('Teamwork', function(Blueprint $table) {
			$table->dropForeign('Teamwork_id_Auto_ecole_foreign');
		});
		Schema::table('Teamwork', function(Blueprint $table) {
			$table->dropForeign('Teamwork_id_Personne_foreign');
		});
		Schema::table('Vehicule', function(Blueprint $table) {
			$table->dropForeign('Vehicule_id_Auto_ecole_foreign');
		});
		Schema::table('Vehicule', function(Blueprint $table) {
			$table->dropForeign('Vehicule_id_moniteur_foreign');
		});
		Schema::table('Seance_pratique', function(Blueprint $table) {
			$table->dropForeign('Seance_pratique_id_moniteur_foreign');
		});
		Schema::table('Seance_pratique', function(Blueprint $table) {
			$table->dropForeign('Seance_pratique_id_candidat_foreign');
		});
		Schema::table('Seance_pratique', function(Blueprint $table) {
			$table->dropForeign('Seance_pratique_id_Seance_foreign');
		});
		Schema::table('Seance_theorique', function(Blueprint $table) {
			$table->dropForeign('Seance_theorique_id_formateur_foreign');
		});
		Schema::table('Seance_theorique', function(Blueprint $table) {
			$table->dropForeign('Seance_theorique_id_candidat_foreign');
		});
		Schema::table('Seance_theorique', function(Blueprint $table) {
			$table->dropForeign('Seance_theorique_id_Seance_foreign');
		});
		Schema::table('Examen', function(Blueprint $table) {
			$table->dropForeign('Examen_id_Candidat_foreign');
		});
		Schema::table('Paiement', function(Blueprint $table) {
			$table->dropForeign('Paiement_id_Candidat_foreign');
		});
		Schema::table('Facture', function(Blueprint $table) {
			$table->dropForeign('Facture_id_Candidat_foreign');
		});
		Schema::table('Recette', function(Blueprint $table) {
			$table->dropForeign('Recette_id_Auto_ecole_foreign');
		});
		Schema::table('Depense', function(Blueprint $table) {
			$table->dropForeign('Depense_id_Auto_ecole_foreign');
		});
		Schema::table('Parametrage', function(Blueprint $table) {
			$table->dropForeign('Parametrage_id_Auto_ecole_foreign');
		});
	}
}