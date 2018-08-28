<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;
use DateTime;
use App\Http\Controllers\Controller;

class VehiculeController extends Controller {


  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($id1)
  {
  $id_Auto_ecole=DB::table('teamwork')->where('id_Personne',$id1)->value('id_Auto_ecole');

    $Vehicule= DB::table('teamwork')
            ->join('vehicule', 'teamwork.id', '=', 'vehicule.id_moniteur')
            ->join('auto_ecole', 'auto_ecole.id', '=', 'teamwork.id_Auto_ecole')
            ->join('personne','personne.id','=', 'teamwork.id_Personne')
            ->select('vehicule.Matricule','vehicule.Marque', 'vehicule.Type', 'teamwork.id', 'auto_ecole.Nom as Nom1', 'personne.Nom','personne.Prenom')
            ->where('auto_ecole.id',$id_Auto_ecole)
            ->GroupBy('vehicule.Matricule')->orderby('vehicule.Matricule','DESC')->get();
$list=DB::table('teamwork')->join('personne','personne.id','=', 'teamwork.id_Personne')
            ->Join('vehicule', 'teamwork.id', '<>', 'vehicule.id_moniteur')
            ->join('auto_ecole', 'auto_ecole.id', '=', 'teamwork.id_Auto_ecole')
            ->select( 'personne.id', 'personne.Nom','personne.Prenom','auto_ecole.Nom as Nom1')
            ->where('teamwork.Type','moniteur') ->where('teamwork.id','<>','vehicule.id_moniteur')->where('auto_ecole.id',$id_Auto_ecole)->get();



       return view('admin.Vehicule',compact('Vehicule','list','id1'));
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
  public function store(Request $req ,$id1)
  {
  $id_Auto_ecole=DB::table('teamwork')->where('id_Personne',$id1)->value('id_Auto_ecole');

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

$data= array('Matricule' => $Matricule,
 'Marque' => $Marque, 
 'Type' => $Type, 
 'id_moniteur' => $id_moniteur, 
 'id_Auto_ecole' => $id_Auto_ecole, 
 );
DB::table('vehicule')->insert($data);

  return redirect('/admin/Vehicule/'. $id1 )->with('success','Ajout avec succès');
  
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
  public function update(Request $req,$Matricule,$id1)
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

  return redirect('/admin/Vehicule/'. $id1)->with('success','Modification avec succès');
  
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($Matricule,$id1)
  {
    
    DB::table('alerte_vidange')->where('id_Vehicule',$Matricule)->delete();
    DB::table('alerte_av')->where('id_Vehicule',$Matricule)->delete();
   DB::table('vehicule')->where('Matricule',$Matricule)->delete();

 return redirect('/admin/Vehicule/'. $id1 )->with('success','Suppression avec succès');
  }

  
}

?>