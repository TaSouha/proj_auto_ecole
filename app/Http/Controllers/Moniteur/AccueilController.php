<?php 
namespace App\Http\Controllers\Moniteur;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;
use DateTime;

class AccueilController extends Controller {
  

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($id)
  {
  $id_moniteur=DB::table('teamwork')->where('id_Personne',$id)->where('Type','moniteur')->value('id');

       $auto_ecole= DB::table('teamwork')->where('id_Personne',$id)->value('id_Auto_ecole');
 $active= DB::table('seance_pratique')
              ->join('candidat','candidat.id','=','seance_pratique.id_candidat')
              ->join('seance','seance.id','=','seance_pratique.id_Seance')
              ->where('seance.Etat','valide')
              ->where('id_Auto_ecole',$auto_ecole)
              ->where('id_moniteur',$id_moniteur)->count();
 $attente= DB::table('seance_pratique')
              ->join('candidat','candidat.id','=','seance_pratique.id_candidat')
              ->join('seance','seance.id','=','seance_pratique.id_Seance')
              ->where('seance.Etat','en attente')
              ->where('id_Auto_ecole',$auto_ecole)
              ->where('seance_pratique.id_moniteur',$id_moniteur)->count();
   $candidat=  DB::table('seance_pratique')
              ->join('candidat','candidat.id','=','seance_pratique.id_candidat')
              ->join('seance','seance.id','=','seance_pratique.id_Seance')
              ->where('seance.Etat','non valide')
              ->where('id_Auto_ecole',$auto_ecole)
              ->where('seance_pratique.id_moniteur',$id_moniteur)->count();

   $vehicule= DB::table('vehicule')->where('id_Auto_ecole',$auto_ecole)->where('id_moniteur',$id_moniteur)->count();
$veh= DB::table('seance_pratique')
              ->join('candidat','candidat.id','=','seance_pratique.id_candidat')
              ->join('seance','seance.id','=','seance_pratique.id_Seance')
              ->where('seance.Etat','en attente')
              ->where('id_Auto_ecole',$auto_ecole)
              ->where('seance_pratique.id_moniteur',$id_moniteur)
              ->select('seance.Debut','seance.Fin','seance.Etat','seance.Date')->orderby('seance_pratique.id','DESC')->take(3)->get();
$ecole=DB::table('auto_ecole')->where('id',$auto_ecole)->value('Nom');
    $cand= DB::table('candidat')->join('seance_pratique','candidat.id','=','seance_pratique.id_candidat')
            ->join('personne', 'personne.id', '=', 'candidat.id_Personne')
            ->select('personne.id','personne.Nom', 'personne.Prenom', 'personne.Adresse', 'personne.Date_nais', 'personne.Sexe', 'personne.email','personne.password','personne.Photo')
              ->where('id_Auto_ecole',$auto_ecole)
              ->where('id_moniteur',$id_moniteur)->groupBy('personne.id')->orderby('personne.id','DESC')->take(8)->get();
       return view('moniteur_part.Accueil',compact('administrateur','active','auto_ecole','attente','candidat','vehicule','ecole','cand','veh','id'));
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