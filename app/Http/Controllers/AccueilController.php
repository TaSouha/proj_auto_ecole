<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;
use DateTime;
class AccueilController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
       $auto_ecole= DB::table('auto_ecole')->count();
 $candidat= DB::table('candidat')->count();
  $moniteur= DB::table('teamwork')->where('Type','moniteur')->count();
   $formateur= DB::table('teamwork')->where('Type','formateur')->count();

   $administrateur= DB::table('teamwork')->count();
$ecole=DB::table('auto_ecole')->orderby('id','DESC')->take(3)->get();
   $vehicule= DB::table('vehicule')->count();


    $cand= DB::table('candidat')
            ->join('personne', 'personne.id', '=', 'candidat.id_Personne')
            ->join('auto_ecole', 'auto_ecole.id', '=', 'candidat.id_Auto_ecole')
            ->select('personne.id','personne.Nom', 'personne.Prenom', 'personne.Adresse', 'personne.Date_nais', 'personne.Sexe', 'personne.email','personne.password', 'auto_ecole.Nom as Nom1','auto_ecole.id as id1','personne.Photo')
            ->GroupBy('candidat.id')->orderby('personne.id','DESC')->take(8)->get();
       return view('Accueil.index',compact('administrateur','candidat','auto_ecole','moniteur','formateur','vehicule','ecole','cand'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $req)
  {
   
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $administrateur=DB::table('personne')->where('id',$id)->first();
  $id_A= DB::table('teamwork')->where('id_Personne',$id)->value('id_Auto_ecole');
  $Nom_Auto= DB::table('auto_ecole')->where('id',$id_A)->value('Nom');
             return view('Candidat.show',['administrateur'=> $administrateur, 'Nom_Auto'=>$Nom_Auto ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id,Request $req)
  {  
       

}

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>