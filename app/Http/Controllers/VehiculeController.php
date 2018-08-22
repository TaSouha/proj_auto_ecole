<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;
use DateTime;

class VehiculeController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $Vehicule= DB::table('teamwork')
            ->join('vehicule', 'teamwork.id', '=', 'vehicule.id_moniteur')
            ->join('auto_ecole', 'auto_ecole.id', '=', 'teamwork.id_Auto_ecole')
            ->join('personne','personne.id','=', 'teamwork.id_Personne')
            ->select('vehicule.Matricule','vehicule.Marque', 'vehicule.Type', 'teamwork.id', 'auto_ecole.Nom as Nom1', 'personne.Nom','personne.Prenom')
            ->GroupBy('vehicule.Matricule')->orderby('vehicule.Matricule','DESC')->get();
$list=DB::table('teamwork')->join('personne','personne.id','=', 'teamwork.id_Personne')
            ->Join('vehicule', 'teamwork.id', '<>', 'vehicule.id_moniteur')
            ->join('auto_ecole', 'auto_ecole.id', '=', 'teamwork.id_Auto_ecole')
            ->select( 'personne.id', 'personne.Nom','personne.Prenom','auto_ecole.Nom as Nom1')
            ->where('teamwork.Type','moniteur') ->where('teamwork.id','<>','vehicule.id_moniteur')->get();



       return view('Vehicule.index',compact('Vehicule','list'));
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
  public function store(Request $req )
  {
     $this->validate($req,[
  'Matricule'=>'required|string|max:255|unique:vehicule',
  'Marque' => 'required|max:255',
  'Type' => 'required|max:255', 
    'moniteur' => 'required|max:255', 
  ]);
$Matricule =$req -> input("Matricule");
$Marque =$req -> input("Marque");
$Type =$req -> input("Type");
$moniteur=$req->input('moniteur');

$id_moniteur=DB::table('teamwork')->where('id_Personne',$moniteur)->value('id');
$id_Auto_ecole=DB::table('teamwork')->where('id_Personne',$moniteur)->value('id_Auto_ecole');
$data= array('Matricule' => $Matricule,
 'Marque' => $Marque, 
 'Type' => $Type, 
 'id_moniteur' => $id_moniteur, 
 'id_Auto_ecole' => $id_Auto_ecole, 
 );
DB::table('vehicule')->insert($data);

  return redirect()->action('VehiculeController@index')->with('success','Ajout avec succès');
  
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
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
  public function update(Request $req,$Matricule)
  {
    $this->validate($req,[
  'Marque' => 'required|max:255',
  'Type' => 'required|max:255', 
  ]);
$Marque =$req -> input("Marque");
$Type =$req -> input("Type");

$data= array(
 'Marque' => $Marque, 
 'Type' => $Type, 
 
 );
DB::table('vehicule')->where('Matricule',$Matricule)->update($data);

  return redirect()->action('VehiculeController@index')->with('success','Modification avec succès');
  
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($Matricule)
  {
    
    DB::table('alerte_vidange')->where('id_Vehicule',$Matricule)->delete();
    DB::table('alerte_av')->where('id_Vehicule',$Matricule)->delete();
   DB::table('vehicule')->where('Matricule',$Matricule)->delete();

 return redirect()->action('VehiculeController@index')->with('success','Suppression avec succès');
  }

  /**
     * Get country's cities.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function cities($id)
    {
        // Retour des villes pour le pays sélectionné 
       $id_personne=DB::table('teamwork')->where('id_Auto_ecole',$id)->where('Type','moniteur')->value('id_Personne');
       return DB::table('personne')->where('id_Personne',$id_Personne)->get();

    }  
}

?>