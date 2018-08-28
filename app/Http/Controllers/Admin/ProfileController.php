<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;
use DateTime;

class ProfileController extends Controller {


  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($id1)
  {
       $id_auto_ecole= DB::table('teamwork')->where('id_Personne',$id1)->value('id_Auto_ecole');
 
     $administrateur=DB::table('personne')->where('id',$id1)->first();
     $auto_ecole=DB::table('auto_ecole')->where('id',$id_auto_ecole)->first();
       return view('admin.Profile',compact('auto_ecole','administrateur','id1'));
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
  public function update($id1,Request $req)
  {   
    $this->validate($req,[
     
  'email'=>'required|string|max:255|unique:personne,email,' . $id1 . ',id',
  'password' => 'min:6|required_with:Confirm_mot_de_passe|same:Confirm_password', 
  'Nom' => 'required|max:255',
  'Prenom' => 'required|max:255',
  'Date_nais' => 'required', 
  'Sexe' => 'required',
  'Adresse' => 'required',
  'Confirm_password' => 'required|min:6', 
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
DB::table('personne')->where('id',$id1)->update($data);

 return redirect('/admin/Profile/'. $id1)->with('success','Modification avec succès');

       

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