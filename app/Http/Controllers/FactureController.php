<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\facture;
use App\candidat;
use DB;
use DateTime;

class FactureController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
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
  public function store()
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
      $id_candidat=DB::table('candidat')->where('id_Personne',$id)->value('id');
$paiement=DB::table('paiement')->where('id_Candidat',$id_candidat)->get();
$personne=DB::table('personne')->where('id',$id)->first();
$candidat=DB::table('candidat')->where('id',$id_candidat)->first();
$id_Auto_ecole=DB::table('candidat')->where('id',$id_candidat)->value('id_Auto_ecole');
$auto_ecole=DB::table('auto_ecole')->where('id',$id_Auto_ecole)->first();
$facture=DB::table('facture')->where('id_Candidat',$id_candidat)->first();
$dateInDB=new DateTime();
$newDate = $dateInDB->format('d-m-Y');

       return view('Facture.show',compact('personne','paiement','candidat','auto_ecole','newDate','facture','id'));
  
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
    $candidat=DB::table('personne')->where('id',$id)->first();
    $id_candidat=DB::table('candidat')->where('id_Personne',$id)->value('id');
    $facture=DB::table('facture')->where('id_Candidat',$id_candidat)->first();
        return view('facture.edit',['facture'=> $facture, 'candidat'=>$candidat ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $req,$id)
  {
     $this->validate($req,[
     
  'Montant'=>'required',
  'Montant_paye' => 'required', 
  'Montant_rest' => 'required', 
  ]);

$Montant =$req -> input("Montant");
$Montant_paye =$req -> input("Montant_paye");
$Montant_rest =$req -> input("Montant_rest");

$data= array('Montant' => $Montant,
 'Montant_paye' => $Montant_paye, 
 'Montant_rest' => $Montant_rest );
$id_candidat=DB::table('candidat')->where('id_Personne',$id)->value('id');
DB::table('facture')->where('id_Candidat',$id_candidat)->update($data);
 return redirect()->action('FactureController@show', ['id' => $id] )->with('success','Modification avec succès');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $id_Candidat=  DB::table('candidat')->where('id_Personne',$id)->value('id');
    DB::table('facture')->where('id_Candidat',$id_Candidat)->delete();

 return redirect()->action('FactureController@show', ['id' => $id] )->with('success','Suppression avec succès');
  }
  
}

?>