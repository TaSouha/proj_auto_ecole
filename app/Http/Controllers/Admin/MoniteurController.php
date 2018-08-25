<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;

use DateTime;
class MoniteurController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($id1)
  {$id_Auto_ecole=DB::table('teamwork')->where('id_Personne',$id1)->value('id_Auto_ecole');
       $Administrateur= DB::table('teamwork')
            ->join('personne', 'personne.id', '=', 'teamwork.id_Personne')
            ->join('auto_ecole', 'auto_ecole.id', '=', 'teamwork.id_Auto_ecole')
            ->select('personne.id','personne.Nom', 'personne.Prenom', 'personne.Adresse', 'personne.Date_nais', 'personne.Sexe', 'personne.email','personne.password', 'auto_ecole.Nom as Nom1','auto_ecole.id as id1','personne.Photo','teamwork.Type')
            ->where('Type','moniteur')
            ->where('auto_ecole.id',$id_Auto_ecole)
            ->GroupBy('teamwork.id')->orderby('personne.id','DESC')->get();
 $list=DB::table('auto_ecole')->groupBy('id')->get();
       return view('admin.Moniteur',compact('Administrateur','list','id1'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
     $list=DB::table('auto_ecole')->groupBy('id')->get();
    return view('Moniteur.create')->with('list', $list);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $req,$id1)
  {
    $this->validate($req,[
  'email'=>'required|string|max:255|email|unique:personne',
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
$email =$req -> input("email");
$password =$req->input("password");

$Photo =$req->input("Photo");
    
$data= array('Nom' => $Nom,
 'Prenom' => $Prenom, 
 'Date_nais' => $Date_nais, 
 'Sexe' => $Sexe, 
 'Adresse' => $Adresse, 
 'email' => $email, 
 'password' => $password, 
 'Photo' => $Photo);
DB::table('personne')->insert($data);
$id_Auto_ecole=DB::table('teamwork')->where('id_Personne',$id1)->value('id_Auto_ecole');

$id_personne=DB::table('personne')->where('email', $email)->value('id');
$Type='moniteur';
$data1=array('id_Auto_ecole' => $id_Auto_ecole, 'id_Personne' => $id_personne, 'Type' => $Type);
DB::table('teamwork')->insert($data1);


  return redirect('/admin/Moniteur/'. $id1 )->with('success','Ajout avec succès');
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
             return view('Moniteur.show',['administrateur'=> $administrateur, 'Nom_Auto'=>$Nom_Auto ]);
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
  public function update($id,Request $req,$id1)
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

 return redirect('/admin/Moniteur/'. $id1 )->with('success','Modification avec succès');
}

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id,$id1)
  {
    
    $id_Admin=  DB::table('teamwork')->where('id_Personne',$id)->value('id');
   
    DB::table('teamwork')->where('id',$id_Admin)->delete();
   DB::table('personne')->where('id',$id)->delete();

 return redirect('/admin/Moniteur/'. $id1 )->with('success','Suppression avec succès');
  }
  
}

?>