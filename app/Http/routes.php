<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/2', function () {
    return view('welcome2');
});




Route::get('/inscription','PersonneController@index');
Route::post('/insert','PersonneController@create');
Route::get('/create_candidat','CandidatController@create');
Route::get('/edit_candidat/{id?}','CandidatController@edit');
Route::patch('/update_candidat/{candidat?}','CandidatController@update');
Route::get('/show_candidat/{id?}','CandidatController@show');
Route::post('/store_candidat','CandidatController@store');
Route::resource('/destroy_candidat','CandidatController@destroy');

Route::get('/show_facture/{id?}','FactureController@show');
Route::get('/edit_facture/{id?}','FactureController@edit');
Route::patch('/update_facture/{candidat?}','FactureController@update');
Route::resource('/destroy_facture','FactureController@destroy');

Route::get('/index_paiement/{id?}','PaiementController@index');
Route::get('/create_paiement/{id?}','PaiementController@create');
Route::post('/store_paiement/{id?}','PaiementController@store');
Route::get('/show_paiement/{id?}','PaiementController@show');
Route::resource('/destroy_paiement','PaiementController@destroy');
Route::get('/edit_paiement/{id?}','PaiementController@edit');
Route::patch('/update_paiement/{paiement?}','PaiementController@update');

Route::get('/index_auto_ecole','Auto_ecoleController@index');
Route::get('/create_auto_ecole/{id?}','Auto_ecoleController@create');
Route::post('/store_auto_ecole/{id?}','Auto_ecoleController@store');
Route::get('/show_auto_ecole/{id?}','Auto_ecoleController@show');
Route::resource('/destroy_auto_ecole','Auto_ecoleController@destroy');
Route::get('/edit_auto_ecole/{id?}','Auto_ecoleController@edit');
Route::patch('/update_auto_ecole/{auto_ecole?}','Auto_ecoleController@update');

Route::get('/index_depense/{id?}','DepenseController@index');
Route::get('/create_depense/{id?}','DepenseController@create');
Route::post('/store_depense/{id?}','DepenseController@store');
Route::get('/show_depense/{id?}','DepenseController@show');
Route::resource('/destroy_depense','DepenseController@destroy');
Route::get('/edit_depense/{id?}','DepenseController@edit');
Route::patch('/update_depense/{depense?}','DepenseController@update');

Route::get('/index_recette/{id?}','RecetteController@index');
Route::get('/create_recette/{id?}','RecetteController@create');
Route::post('/store_recette/{id?}','RecetteController@store');
Route::get('/show_recette/{id?}','RecetteController@show');
Route::resource('/destroy_recette','RecetteController@destroy');
Route::get('/edit_recette/{id?}','RecetteController@edit');
Route::patch('/update_recette/{recette?}','RecetteController@update');


Route::get('/index_administrateur','AdministrateurController@create');
Route::get('/create_administrateur','AdministrateurController@create');
Route::get('/edit_administrateur/{id?}','AdministrateurController@edit');
Route::patch('/update_administrateur/{candidat?}','AdministrateurController@update');
Route::get('/show_administrateur/{id?}','AdministrateurController@show');
Route::post('/store_administrateur','AdministrateurController@store');
Route::resource('/destroy_administrateur','AdministrateurController@destroy');

Route::get('/index_moniteur','MoniteurController@create');
Route::get('/create_moniteur','MoniteurController@create');
Route::get('/edit_moniteur/{id?}','MoniteurController@edit');
Route::patch('/update_moniteur/{candidat?}','MoniteurController@update');
Route::get('/show_moniteur/{id?}','MoniteurController@show');
Route::post('/store_moniteur','MoniteurController@store');
Route::resource('/destroy_moniteur','MoniteurController@destroy');

Route::get('/index_formateur','FormateurController@create');
Route::get('/create_formateur','FormateurController@create');
Route::get('/edit_formateur/{id?}','FormateurController@edit');
Route::patch('/update_formateur/{candidat?}','FormateurController@update');
Route::get('/show_formateur/{id?}','FormateurController@show');
Route::post('/store_formateur','FormateurController@store');
Route::resource('/destroy_formateur','FormateurController@destroy');


Route::get('/index_vehicule','VehiculeController@create');
Route::get('/create_vehicule','VehiculeController@create');
Route::get('/edit_vhicule/{id?}','VehiculeController@edit');
Route::patch('/update_vehicule/{candidat?}','VehiculeController@update');
Route::get('/show_vehicule/{id?}','VehiculeController@show');
Route::post('/store_vehicule','VehiculeController@store');
Route::resource('/destroy_vehicule','VehiculeController@destroy');


Route::get('/index_alerte_vidange/{Matricule?}','Alerte_VidangeController@index');
Route::get('/create_alerte_vidange/{id?}','Alerte_VidangeController@create');
Route::post('/store_alerte_vidange/{id?}','Alerte_VidangeController@store');
Route::get('/show_alerte_vidange/{id?}','Alerte_VidangeController@show');
Route::resource('/destroy_alerte_vidange','Alerte_VidangeController@destroy');
Route::get('/edit_alerte_vidange/{id?}','Alerte_VidangeController@edit');
Route::patch('/update_alerte_vidange/{depense?}','Alerte_VidangeController@update');



Route::get('/index_alerte_v/{Matricule?}','Alerte_AVController@index');
Route::get('/create_alerte_v/{id?}','Alerte_AVController@create');
Route::post('/store_alerte_v/{id?}','Alerte_AVController@store');
Route::get('/show_alerte_v/{id?}','Alerte_AVController@show');
Route::resource('/destroy_alerte_v','Alerte_AVController@destroy');
Route::get('/edit_alerte_v/{id?}','Alerte_AVController@edit');
Route::patch('/update_alerte_v/{depense?}','Alerte_AVController@update');


Route::get('/index_accueil','AccueilController@index');

Route::group(['middleware' => ['web']], function () {
  //Login Routes...
    Route::get('/moderateur/login','ModerateurAuth\AuthController@showLoginForm');
    Route::post('/moderateur/login','ModerateurAuth\AuthController@login');
    Route::get('/moderateur/logout','ModerateurAuth\AuthController@logout');

    // Registration Routes...
    Route::get('moderateur/register', 'ModerateurAuth\AuthController@showRegistrationForm');
    Route::post('moderateur/register', 'ModerateurAuth\AuthController@register');

    Route::post('moderateur/password/email','ModerateurAuth\PasswordController@sendResetLinkEmail');
    Route::post('moderateur/password/reset','ModerateurAuth\PasswordController@reset');
    Route::get('moderateur/password/reset/{token?}','ModerateurAuth\PasswordController@showResetForm');

  Route::get('/Moderateur', 'ModerateurController@index');
});  

Route::resource('formateur', 'FormateurController');
Route::resource('moniteur', 'MoniteurController');
Route::resource('administrateur', 'AdministrateurController');
Route::resource('personne', 'PersonneController');
Route::resource('/candidat', 'CandidatController');
Route::resource('teamwork', 'TeamworkController');
Route::resource('cours', 'CoursController');
Route::resource('moderateur', 'ModerateurController');
Route::resource('auto_ecole', 'Auto_ecoleController');
Route::resource('vehicule', 'VehiculeController');
Route::resource('seance', 'SeanceController');
Route::resource('seance_pratique', 'Seance_pratiqueController');
Route::resource('seance_theorique', 'Seance_theoriqueController');
Route::resource('examen', 'ExamenController');
Route::resource('paiement', 'PaiementController');
Route::resource('facture', 'FactureController');
Route::resource('recette', 'RecetteController');
Route::resource('depense', 'DepenseController');
Route::resource('alerte_av', 'Alerte_AVController');
Route::resource('alerte_vidange/{$Matricule}', 'Alerte_VidangeController');
Route::resource('parametrage', 'ParametrageController');

Route::auth();

Route::group(['middleware' => ['web']], function(){
	Route::auth();
	Route::get('/home', 'HomeController@index');
});



Route::get('/admin/Accueil/{id?}','Admin\AccueilController@index');
Route::get('/admin/Depense/{id?}','Admin\DepenseController@index');
Route::post('/admin/store_depense/{id?}','Admin\DepenseController@store');
Route::resource('/admin/destroy_depense/{id?}/ff/{id1?}/','Admin\DepenseController@destroy');
Route::patch('/admin/update_depense/{id?}/ff/{id1?}/','Admin\DepenseController@update');

Route::get('/admin/Recette/{id?}','Admin\RecetteController@index');
Route::post('/admin/store_recette/{id?}','Admin\RecetteController@store');
Route::resource('/admin/destroy_recette/{id?}/ff/{id1?}/','Admin\RecetteController@destroy');
Route::patch('/admin/update_recette/{id?}/ff/{id1?}','Admin\RecetteController@update');

Route::get('/admin/Moniteur/{id?}','Admin\MoniteurController@index');
Route::post('/admin/store_moniteur/{id?}','Admin\MoniteurController@store');
Route::resource('/admin/destroy_moniteur/{id?}/ff/{id1?}/','Admin\MoniteurController@destroy');
Route::patch('/admin/update_moniteur/{id?}/ff/{id1?}/','Admin\MoniteurController@update');

Route::get('/admin/Formateur/{id?}','Admin\FormateurController@index');
Route::post('/admin/store_formateur/{id?}','Admin\FormateurController@store');
Route::resource('/admin/destroy_formateur/{id?}/ff/{id1?}/','Admin\FormateurController@destroy');
Route::patch('/admin/update_formateur/{id?}/ff/{id1?}/','Admin\FormateurController@update');


Route::get('/admin/Candidat/{id?}','Admin\CandidatController@index');
Route::post('/admin/store_candidat/{id?}','Admin\CandidatController@store');
Route::resource('/admin/destroy_candidat/{id?}/ff/{id1?}/','Admin\CandidatController@destroy');
Route::patch('/admin/update_candidat/{id?}/ff/{id1?}/','Admin\CandidatController@update');
Route::get('/admin/Facture/{id?}/{id1?}','Admin\FactureController@show');
Route::get('/admin/Paiement/{id?}/{id1?}','Admin\PaiementController@index');
Route::post('/admin/store_paiement/{id?}/{id1?}','Admin\PaiementController@store');
Route::resource('/admin/destroy_paiement/{id?}/ff/{id1?}/','Admin\PaiementController@destroy');
Route::patch('/admin/update_paiement/{id?}/ff/{id1?}/','Admin\PaiementController@update');

Route::get('/admin/Vehicule/{id?}','Admin\VehiculeController@index');
Route::post('/admin/store_vehicule/{id?}/{id1?}','Admin\VehiculeController@store');
Route::resource('/admin/destroy_vehicule/{id?}/ff/{id1?}/','Admin\VehiculeController@destroy');
Route::patch('/admin/update_vehicule/{id?}/ff/{id1?}/','Admin\VehiculeController@update');


Route::get('/admin/Alerte_V/{id?}/{id1?}','Admin\Alerte_VController@index');
Route::post('/admin/store_Alerte_V/{id?}/{id1?}','Admin\Alerte_VController@store');
Route::resource('/admin/destroy_Alerte_V/{id?}/ff/{id1?}/','Admin\Alerte_VController@destroy');
Route::patch('/admin/update_Alerte_V/{id?}/ff/{id1?}/','Admin\Alerte_VController@update');

Route::get('/admin/Alerte_Vidange/{id?}/{id1?}','Admin\Alerte_VidangeController@index');
Route::post('/admin/store_Alerte_Vidange/{id?}/{id1?}','Admin\Alerte_VidangeController@store');
Route::resource('/admin/destroy_Alerte_Vidange/{id?}/ff/{id1?}/','Admin\Alerte_VidangeController@destroy');
Route::patch('/admin/update_Alerte_Vidange/{id?}/ff/{id1?}/','Admin\Alerte_VidangeController@update');


Route::get('/admin/Alerte_A/{id?}/{id1?}','Admin\Alerte_AController@index');
Route::post('/admin/store_Alerte_A/{id?}/{id1?}','Admin\Alerte_AController@store');
Route::resource('/admin/destroy_Alerte_A/{id?}/ff/{id1?}/','Admin\Alerte_AController@destroy');
Route::patch('/admin/update_Alerte_A/{id?}/ff/{id1?}/','Admin\Alerte_AController@update');
Route::get('/admin/Seance_Theorique/{id?}','Admin\Seance_TheoriqueController@index');
Route::get('/admin/Seance_Pratique/{id?}','Admin\Seance_PratiqueController@index');

Route::post('/admin/store_Seance_Pratique/{id?}','Admin\Seance_PratiqueController@store');
Route::patch('/admin/update_Seance_Pratique/{id?}/{id2?}/{id1?}/','Admin\Seance_PratiqueController@update');
Route::resource('/admin/destroy_Seance_Pratique/{id?}/{id2?}/{id1?}/','Admin\Seance_PratiqueController@destroy');
Route::resource('/admin/active_Seance_Pratique/{id?}/{id2?}/{id1?}/','Admin\Seance_PratiqueController@active');
Route::resource('/admin/non_active_Seance_Pratique/{id?}/{id2?}/{id1?}/','Admin\Seance_PratiqueController@non_active');
Route::resource('/admin/non_active1_Seance_Pratique/{id2?}/{id1?}/','Admin\Seance_PratiqueController@non_active1');


Route::group(['middleware' => ['web']], function () {
    //Login Routes...
    Route::get('/admin/login','AdminAuth\AuthController@showLoginForm');
    Route::post('/admin/login','AdminAuth\AuthController@login');
    Route::get('/admin/logout','AdminAuth\AuthController@logout');

    // Registration Routes...
    Route::get('admin/register', 'AdminAuth\AuthController@showRegistrationForm');
    Route::post('admin/register', 'AdminAuth\AuthController@register');

    Route::post('admin/password/email','AdminAuth\PasswordController@sendResetLinkEmail');
    Route::post('admin/password/reset','AdminAuth\PasswordController@reset');
    Route::get('admin/password/reset/{token?}','AdminAuth\PasswordController@showResetForm');

    Route::get('/admin', 'AdminController@index');

});  


Route::get('/admin/Examen/{id?}','Admin\ExamenController@index');
Route::post('/admin/store_Examen/{id?}','Admin\ExamenController@store');
Route::resource('/admin/destroy_Examen/{id?}/{id1?}/','Admin\ExamenController@destroy');
Route::patch('/admin/update_Examen/{id?}/{id1?}/','Admin\ExamenController@update');
Route::resource('/admin/admis_Examen/{id?}/{id1?}/','Admin\ExamenController@admis');
Route::resource('/admin/refusé_Examen/{id?}/{id1?}/','Admin\ExamenController@refusé');


Route::get('/admin/Examen_pratique/{id?}','Admin\Examen_pratiqueController@index');
Route::post('/admin/store_Examen_pratique/{id?}','Admin\Examen_pratiqueController@store');
Route::resource('/admin/destroy_Examen_pratique/{id?}/{id1?}/','Admin\Examen_pratiqueController@destroy');
Route::patch('/admin/update_Examen_pratique/{id?}/{id1?}/','Admin\Examen_pratiqueController@update');
Route::resource('/admin/admis_Examen_pratique/{id?}/{id1?}/','Admin\Examen_pratiqueController@admis');
Route::resource('/admin/refusé_Examen_pratique/{id?}/{id1?}/','Admin\Examen_pratiqueController@refusé');


Route::get('/admin/Examen_pratique_créno/{id?}','Admin\Examen_pratique_crenoController@index');
Route::post('/admin/store_Examen_pratique_créno/{id?}','Admin\Examen_pratique_crenoController@store');
Route::resource('/admin/destroy_Examen_pratique_créno/{id?}/{id1?}/','Admin\Examen_pratique_crenoController@destroy');
Route::patch('/admin/update_Examen_pratique_créno/{id?}/{id1?}/','Admin\Examen_pratique_crenoController@update');
Route::resource('/admin/admis_Examen_pratique_créno/{id?}/{id1?}/','Admin\Examen_pratique_crenoController@admis');
Route::resource('/admin/refusé_Examen_pratique_créno/{id?}/{id1?}/','Admin\Examen_pratique_crenoController@refusé');


Route::post('/admin/store_Seances/{id?}/{id2?}/{id1?}/','Admin\SeancesController@store');
Route::get('/admin/seances/{id?}/{id2?}/{id1?}/','Admin\SeancesController@index');
Route::resource('/admin/destroy_Seances/{id?}/{id2?}/{id1?}/','Admin\SeancesController@destroy');

Route::post('/admin/store_Seance_Theorique/{id?}','Admin\Seance_TheoriqueController@store');
Route::patch('/admin/update_Seance_Theorique/{id?}/{id2?}/{id1?}/','Admin\Seance_TheoriqueController@update');
Route::resource('/admin/destroy_Seance_Theorique/{id?}/{id2?}/{id1?}/','Admin\Seance_TheoriqueController@destroy');
Route::resource('/admin/active_Seance_Theorique/{id?}/{id2?}/{id1?}/','Admin\Seance_TheoriqueController@active');
Route::resource('/admin/non_active_Seance_Theorique/{id?}/{id2?}/{id1?}/','Admin\Seance_TheoriqueController@non_active');

Route::get('/admin/Auto_ecole/{id1?}','Admin\ParametrageController@index');
Route::patch('/admin/update_Parametrage/{id?}/{id1?}','Admin\ParametrageController@update');

Route::get('/admin/Profile/{id1?}','Admin\ProfileController@index');
Route::patch('/admin/update_Profile/{id1?}','Admin\ProfileController@update');
