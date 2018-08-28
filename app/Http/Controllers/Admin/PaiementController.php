<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;
use DateTime;
use App\Http\Controllers\Controller;

class PaiementController extends Controller {


  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($id,$id1)
  {
    $id_candidat=DB::table('candidat')->where('id_Personne',$id)->value('id');
        $Paiement= DB::table('paiement')->where('id_Candidat',$id_candidat)
            ->orderby('id','DESC')->get();
            $candidat=DB::table('personne')->where('id',$id)->first();
                $id_Auto_ecole=DB::table('candidat')->where('id_Personne',$id)->value('id_Auto_ecole');

          $auto_ecole=DB::table('auto_ecole')->where('id',$id_Auto_ecole)->first();
$dateInDB=new DateTime();
$newDate = $dateInDB->format('Y-m-d');


       return view('admin.Paiement',['Paiement'=> $Paiement, 'id'=> $id,'candidat'=>$candidat,'auto_ecole'=>$auto_ecole , 'newDate'=>$newDate,'id1'=>$id1]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create($id)
  {
    return view('Paiement.create',['id'=> $id ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $req,$id,$id1)
  {
    $this->validate($req,[
  'Montant'=>'required',
  'Designations' => 'required', 
  ]);
$Montant =$req -> input("Montant");
$Designations=$req -> input("Designations");
$Date_ope =new DateTime(); 
$id_candidat=DB::table('candidat')->where('id_Personne', $id)->value('id');

$data= array('Montant' => $Montant,
 'Designations' => $Designations, 
 'Date_ope' => $Date_ope,
 'id_Candidat' => $id_candidat);
DB::table('paiement')->insert($data);

$Montant_paye=DB::table('facture')->where('id_Candidat', $id_candidat)->value('Montant_paye');
$Montant_tout=DB::table('facture')->where('id_Candidat', $id_candidat)->value('Montant');
$Montant_rest=DB::table('facture')->where('id_Candidat', $id_candidat)->value('Montant_rest');
$Montant_paye=$Montant_paye+$Montant;
if($Montant_rest==0){
  $Montant_rest=$Montant_tout-$Montant;
}
else{
  $Montant_rest=$Montant_rest-$Montant;
}

$data_facture=array(
 'Montant_paye' => $Montant_paye, 
 'Montant_rest' => $Montant_rest);

DB::table('facture')->where('id_Candidat',$id_candidat)->update($data_facture);

  return redirect('/admin/Paiement/'. $id.'/'.$id1 )->with('success','Ajout avec succès');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  { 
    $paiement=DB::table('paiement')->where('id',$id)->first();
    $id_candidat=DB::table('paiement')->where('id',$id)->value('id_Candidat');
    $id_Personne=DB::table('candidat')->where('id',$id_candidat)->value('id_Personne');
    $candidat=DB::table('personne')->where('id',$id_Personne)->first();
    $id_Auto=DB::table('candidat')->where('id',$id_candidat)->value('id_Auto_ecole');
    $auto_ecole=DB::table('auto_ecole')->where('id',$id_Auto)->first();
             return view('Paiement.show',['paiement'=> $paiement ,'candidat'=>$candidat, 'auto_ecole' => $auto_ecole]);
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
    $paiement=DB::table('paiement')->where('id',$id)->first();
    $id_candidat=DB::table('paiement')->where('id',$id)->value('id_Candidat');
    $id_Personne=DB::table('candidat')->where('id',$id_candidat)->value('id_Personne');
    $candidat=DB::table('personne')->where('id',$id_Personne)->first();
        return view('paiement.edit',['paiement'=> $paiement, 'candidat'=>$candidat ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $req,$id,$id1)
  {
    $this->validate($req,[
     
  'Montant'=>'required',
  'Designations' => 'required', 
  ]);


$Montant =$req -> input("Montant");
$Designations =$req -> input("Designations");
$Date_ope =new DateTime();
$id_candidat=DB::table('paiement')->where('id',$id)->value('id_Candidat');
$id_Personne=DB::table('candidat')->where('id',$id_candidat)->value('id_Personne');
$data= array('Montant' => $Montant,
 'Designations' => $Designations, 
 'Date_ope' => $Date_ope, 
'id_Candidat'=>$id_candidat);

DB::table('paiement')->where('id',$id)->update($data);
  return redirect('/admin/Paiement/'. $id_Personne.'/'.$id1 )->with('success','Modification avec succès');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id,$id1)
  {
    $id_candidat=DB::table('paiement')->where('id',$id)->value('id_Candidat');
    $id_Personne=DB::table('candidat')->where('id',$id_candidat)->value('id_Personne');
    DB::table('paiement')->where('id',$id)->delete();
 
  


  return redirect('/admin/Paiement/'. $id_Personne.'/'.$id1 )->with('success','Suppression avec succès');
  }
  
}

?>