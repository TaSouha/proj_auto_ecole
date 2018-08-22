<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;

class CandidatController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $Candidat= DB::table('candidat')
            ->join('personne', 'personne.id', '=', 'candidat.id_Personne')
            ->join('auto_ecole', 'auto_ecole.id', '=', 'candidat.id_Auto_ecole')
            ->select('personne.id','personne.Nom', 'personne.Prenom', 'personne.Adresse', 'personne.Date_nais', 'personne.Sexe', 'personne.email','personne.password', 'auto_ecole.Nom as Nom1','auto_ecole.id as id1','personne.Photo')
            ->GroupBy('candidat.id')->orderby('personne.id','DESC')->get();
 $list=DB::table('auto_ecole')->groupBy('id')->get();
       return view('Candidat.index',compact('Candidat','list'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $list=DB::table('auto_ecole')->groupBy('id')->get();
    return view('Candidat.create')->with('list', $list);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $req)
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


  return redirect()->action('CandidatController@index')->with('success','Ajout avec succès');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
 $candidat=DB::table('personne')->where('id',$id)->first();
  $id_A= DB::table('candidat')->where('id_Personne',$id)->value('id_Auto_ecole');
  $Nom_Auto= DB::table('auto_ecole')->where('id',$id_A)->value('Nom');
             return view('Candidat.show',['candidat'=> $candidat, 'Nom_Auto'=>$Nom_Auto ]);
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
        return view('Candidat.edit',['candidat'=> $candidat ]);
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id Request $req
   * @return Response
   */
  public function update($id,Request $req)
  {  
       

    $this->validate($req,[
     
  'email'=>'required|string|max:255|unique:personne,email,' . $id . ',id',
  'password' => 'min:6|required_with:Confirm_mot_de_passe|same:Confirm_mot_de_passe', 
  'Nom' => 'required|max:255',
  'Prenom' => 'required|max:255',
  'Date_nais' => 'required', 
  'Sexe' => 'required',
  'Adresse' => 'required',
  'Confirm_mot_de_passe' => 'required|min:6', 
  ]);

$Nom =$req -> input("Nom");
$Prenom =$req -> input("Prenom");
$Date_nais =$req -> input("Date_nais");
$Sexe =$req -> Input('Sexe');
$Adresse =$req -> input("Adresse");
$password =$req->input("password");
$email =$req -> input("email");
$Photo =$req->input("Photo");
$data= array('Nom' => $Nom,
 'Prenom' => $Prenom, 
 'Date_nais' => $Date_nais, 
 'Sexe' => $Sexe, 
 'Adresse' => $Adresse, 
 'email' => $email, 
 'password' => $password, 
 'Photo' => $Photo);
DB::table('personne')->where('id',$id)->update($data);

 return redirect()->action('CandidatController@index')->with('success','Modification avec succès');

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
    DB::table('paiement')->where('id_Candidat',$id_Candidat)->delete();
    DB::table('examen')->where('id_Candidat',$id_Candidat)->delete();
    DB::table('seance_pratique')->where('id_candidat',$id_Candidat)->delete();
    DB::table('seance_theorique')->where('id_candidat',$id_Candidat)->delete();
     DB::table('facture')->where('id_Candidat',$id_Candidat)->delete();
    DB::table('candidat')->where('id',$id_Candidat)->delete();
   DB::table('personne')->where('id',$id)->delete();

 return redirect()->action('CandidatController@index')->with('success','Suppression avec succès');
  }
  
}

?>