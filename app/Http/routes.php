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

  Route::get('/moderateur', 'ModerateurController@index');
});  
