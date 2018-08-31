<?php 
namespace App\Http\Controllers\Moniteur;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;
use DateTime;

class Auto_ecoleController extends Controller {


  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($id1)
  {
       $id_auto_ecole= DB::table('teamwork')->where('id_Personne',$id1)->value('id_Auto_ecole');
 
     $auto_ecole=DB::table('auto_ecole')->where('id',$id_auto_ecole)->first();
     
       return view('moniteur_part.Auto_ecole',compact('auto_ecole','id1'));
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
  public function update($id,$id1,Request $req)
  {    $this->validate($req,[
     
  'Nom'=>'required|string',
  'Lieu' =>'required|string', 
  'Adresse' => 'required|string',
  'Description' => 'required|max:255',
  'Nbre_candidat' => 'required', 
  'Nbre_moniteur' => 'required',
  'Nbre_formateur' => 'required',
  ]);

$Nom =$req -> input("Nom");
$Lieu =$req -> input("Lieu");
$Adresse =$req -> input("Adresse");
$Description =$req -> Input('Description');
$Nbre_candidat =$req->input("Nbre_candidat");
$Nbre_moniteur =$req -> input("Nbre_moniteur");
$Nbre_formateur =$req -> input("Nbre_formateur");
$Photo =$req->input("Photo");
$data= array('Nom' => $Nom,
 'Lieu' => $Lieu, 
 'Adresse' => $Adresse, 
 'Description' => $Description,
 'Photo' => $Photo);
DB::table('auto_ecole')->where('id',$id)->update($data);
$data2= array(
 'Nbre_candidat' => $Nbre_candidat, 
  'Nbre_moniteur' => $Nbre_moniteur,
   'Nbre_formateur' => $Nbre_formateur,
 'id_Auto_ecole' => $id);
DB::table('parametrage')->where('id_Auto_ecole',$id)->update($data2);
 return redirect('/admin/Auto_ecole/'. $id1)->with('success','Modification avec succès');

       

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