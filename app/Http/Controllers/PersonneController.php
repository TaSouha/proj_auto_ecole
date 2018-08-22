<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\personne;
use DB;
class PersonneController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $list=DB::table('auto_ecole')->groupBy('id')->get();
     return view('inscription')->with('list', $list);
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
public function create(Request $req)
{
$this->validate($req,[
  'email'=>'required|string|max:255|unique:personne',
  'password' => 'min:6|required_with:Confirm_mot_de_passe|same:Confirm_mot_de_passe', 
  'Nom' => 'required|max:255',
  'Prenom' => 'required|max:255',
  'Date_nais' => 'required', 
  'Sexe' => 'required',
  'Adresse' => 'required',
  'auto_ecole' => 'required',
  'Confirm_mot_de_passe' => 'required|min:6', 
  ]);
$Nom =$req -> input("Nom");
$Prenom =$req -> input("Prenom");
$Date_nais =$req -> input("Date_nais");
$Sexe =$req -> Input('Sexe');
$Adresse =$req -> input("Adresse");
$email =$req -> input("email");
$password =$req->input("password");

$Photo =$req->input("Photo");
$id_auto=$req-> input("auto_ecole");
$id_auto_ecole=DB::table('auto_ecole')->where('Nom', $id_auto)->value('id');       
$data= array('Nom' => $Nom,
 'Prenom' => $Prenom, 
 'Date_nais' => $Date_nais, 
 'Sexe' => $Sexe, 
 'Adresse' => $Adresse, 
 'email' => $email, 
 'password' => $password, 
 'Photo' => $Photo);
DB::table('personne')->insert($data);
$id_personne=DB::table('personne')->where('email', $email)->value('id');
$data1=array('id_Auto_ecole' => $id_auto_ecole, 'id_Personne' => $id_personne);
DB::table('candidat')->insert($data1);
$id_candidat=DB::table('candidat')->where('id_Personne', $id_personne)->value('id');
$data2=array('id_Candidat' => $id_candidat, 'Montant' => 0 , 'Montant_paye' => 0 , 'Montant_rest' => 0 ,);
DB::table('facture')->insert($data2);
  return redirect()->route('personne.index')->with('success','inscription avec succès');
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
  public function update($id)
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