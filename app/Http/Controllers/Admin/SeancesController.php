<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;


class SeancesController extends Controller {


  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($id,$id2,$id1)
  {$id_Auto_ecole=DB::table('teamwork')->where('id_Personne',$id1)->value('id_Auto_ecole');
    $seance_theorique= DB::table('seance_theorique')
               ->join('candidat', 'candidat.id', '=', 'seance_theorique.id_candidat')
              ->join('personne', 'personne.id', '=', 'candidat.id_Personne')
            ->join('seance', 'seance.id', '=', 'seance_theorique.id_Seance')  
          ->select('seance.id as id2','seance_theorique.id','personne.Nom','personne.Prenom','seance.Date','seance_theorique.Prix','seance.Debut','seance.Fin','seance.Etat')
          ->where('seance.id',$id2)
            ->orderby('seance_theorique.id','DESC')->get();
$id_formateur=DB::table('seance_theorique')->where('id_Seance',$id2)->value('id_formateur');
$id_Personne=DB::table('teamwork')->where('id',$id_formateur)->value('id_Personne');
$Nom=DB::table('personne')->where('id',$id_Personne)->value('Nom');
$Prenom=DB::table('personne')->where('id',$id_Personne)->value('Prenom');
$list=DB::table('candidat')->join('personne','personne.id','=','candidat.id_Personne')->where('candidat.id_Auto_ecole',$id_Auto_ecole)->select('candidat.id','personne.Nom','personne.Prenom')->get();
       return view('admin.Seances',compact('seance_theorique','id1','list','id2','id','Nom','Prenom'));
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
  public function store(Request $req,$id,$id2,$id1)
  {
$this->validate($req,[
 
  'id_Candidat' => 'required|unique:seance_theorique',
  ]);

$id_Candidat =$req -> input("id_Candidat"); 
$id_Seance=$id2; 
$id_formateur=DB::table('seance_theorique')->where('id_Seance',$id2)->value('id_formateur');   
$Prix=DB::table('seance_theorique')->where('id_Seance',$id2)->value('Prix');   
$data= array('id_candidat' => $id_Candidat,
  'id_formateur' => $id_formateur,
  'id_Seance' => $id_Seance,
  'Prix' => $Prix,

);

DB::table('seance_theorique')->insert($data);
$Etat=DB::table('seance')->where('id',$id2)->value('Etat'); 
if($Etat=="valide"){
$Montant=DB::table('facture')->where('id_Candidat',$id_Candidat)->value('Montant');
$Montant_rest=DB::table('facture')->where('id_Candidat',$id_Candidat)->value('Montant_rest');
$Montant=$Montant+$Prix;
$Montant_rest=$Montant_rest+$Prix;
$data1 = array('Montant' => $Montant,'Montant_rest' => $Montant_rest);
DB::table('facture')->where('id_Candidat',$id_Candidat)->update($data1);
}

  return redirect('/admin/seances/'.$id.'/'.$id2.'/'. $id1)->with('success','Ajout avec succès');
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
  public function active(Request $req,$id,$id2,$id1)
  {  

$data= array('Etat' => 'valide'
);
DB::table('seance')->where('id',$id2)->update($data);
$id_candidat=DB::table('seance_theorique')->where('id',$id)->value('id_candidat');
$Prix=DB::table('seance_theorique')->where('id',$id)->value('Prix');
$Montant=DB::table('facture')->where('id_Candidat',$id_candidat)->value('Montant');
$Montant_rest=DB::table('facture')->where('id_Candidat',$id_candidat)->value('Montant_rest');
$Montant=$Montant+$Prix;
$Montant_rest=$Montant_rest+$Prix;
$data1 = array('Montant' => $Montant,'Montant_rest' => $Montant_rest);
DB::table('facture')->where('id_Candidat',$id_candidat)->update($data1);

 return redirect('/admin/seances/'.$id.'/'.$id2.'/'. $id1)->with('success','Validation avec succès');

  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id Request $req
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

 return redirect('/admin/Candidat/'. $id1)->with('success','Modification avec succès');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id,$id2,$id1)
  {

$Etat=DB::table('seance')->where('id',$id2)->value('Etat'); 
$Prix=DB::table('seance_theorique')->where('id',$id)->value('Prix'); 
$id_Candidat=DB::table('seance_theorique')->where('id',$id)->value('id_Candidat'); 
if($Etat=="valide"){
$Montant=DB::table('facture')->where('id_Candidat',$id_Candidat)->value('Montant');
$Montant_rest=DB::table('facture')->where('id_Candidat',$id_Candidat)->value('Montant_rest');
$Montant=$Montant-$Prix;
$Montant_rest=$Montant_rest-$Prix;
$data1 = array('Montant' => $Montant,'Montant_rest' => $Montant_rest);
DB::table('facture')->where('id_Candidat',$id_Candidat)->update($data1);
}

    DB::table('seance_theorique')->where('id',$id)->delete();
    
    
 
 return redirect('/admin/seances/'.$id.'/'.$id2.'/'. $id1)->with('success','Suppression avec succès');
  }
  
}

?>