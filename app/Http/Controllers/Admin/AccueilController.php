<?php 
namespace App\Http\Controllers\Admin;

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
       $auto_ecole= DB::table('teamwork')->where('id_Personne',$id)->value('id_Auto_ecole');
 $candidat= DB::table('candidat')->where('id_Auto_ecole',$auto_ecole)->count();
  $moniteur= DB::table('teamwork')->where('Type','moniteur')->where('id_Auto_ecole',$auto_ecole)->count();
   $formateur= DB::table('teamwork')->where('id_Auto_ecole',$auto_ecole)->where('Type','formateur')->count();

   $vehicule= DB::table('vehicule')->where('id_Auto_ecole',$auto_ecole)->count();
$veh=DB::table('vehicule')->where('id_Auto_ecole',$auto_ecole)->take(3)->get();
$ecole=DB::table('auto_ecole')->where('id',$auto_ecole)->value('Nom');
    $cand= DB::table('candidat')
            ->join('personne', 'personne.id', '=', 'candidat.id_Personne')
            ->where('candidat.id_Auto_ecole',$auto_ecole)
            ->select('personne.id','personne.Nom', 'personne.Prenom', 'personne.Adresse', 'personne.Date_nais', 'personne.Sexe', 'personne.email','personne.password','personne.Photo')
            
            ->GroupBy('candidat.id')->orderby('personne.id','DESC')->take(8)->get();
       return view('admin.Accueil',compact('administrateur','candidat','auto_ecole','moniteur','formateur','vehicule','ecole','cand','veh','id'));
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