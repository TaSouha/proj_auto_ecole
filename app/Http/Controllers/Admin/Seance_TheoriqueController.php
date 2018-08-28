<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;


class Seance_TheoriqueController extends Controller {



  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($id1)
  {$id_Auto_ecole=DB::table('teamwork')->where('id_Personne',$id1)->value('id_Auto_ecole');
    $seance_theorique= DB::table('seance_theorique')
               ->join('teamwork', 'teamwork.id', '=', 'seance_theorique.id_formateur')
              ->join('personne', 'personne.id', '=', 'teamwork.id_Personne')
            ->join('seance', 'seance.id', '=', 'seance_theorique.id_Seance')  
          ->select('seance.id as id2','seance_theorique.id','personne.Nom','personne.Prenom','seance.Date','seance_theorique.Prix','seance.Debut','seance.Fin','seance.Etat','teamwork.id as id_P')
          ->where('teamwork.id_Auto_ecole',$id_Auto_ecole)
            ->GroupBy('seance_theorique.id_Seance')->orderby('seance_theorique.id','DESC')->get();


$liste=DB::table('teamwork')->join('personne','personne.id','=','teamwork.id_Personne')->where('teamwork.id_Auto_ecole',$id_Auto_ecole)->where('teamwork.Type','formateur')->select('teamwork.id','personne.Nom','personne.Prenom')->get();

$list=DB::table('candidat')->join('personne','personne.id','=','candidat.id_Personne')->where('candidat.id_Auto_ecole',$id_Auto_ecole)->select('candidat.id','personne.Nom','personne.Prenom')->get();

       return view('admin.Seance_Theorique',compact('seance_theorique','id1','liste','list'));
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
  public function store(Request $req,$id1)
  {
$this->validate($req,[
  'Date'=>'required',
  'Debut' => 'required', 
  'Fin' => 'required',
  'Prix' => 'required',
  'Formateur' => 'required', 
  'Candidat' => 'required',
  ]);
$Date =$req -> input("Date");
$Debut =$req -> input("Debut");
$Fin =$req -> input("Fin");
$Prix =$req -> Input('Prix');
$Formateur =$req -> input("Formateur");
$Candidat =$req -> input("Candidat");     
$data= array('Date' => $Date,
 'Debut' => $Debut, 
 'Fin' => $Fin, 
 'Etat' => 'non valide', 

);
DB::table('seance')->insert($data);
$id_Seance=DB::table('seance')->where('Date',$Date)->where('Debut',$Debut)->where('Fin',$Fin)->orderby('id','DESC')->value('id');

$data1= array(
 'Prix' => $Prix, 
 'id_Seance' => $id_Seance, 
 'id_formateur' => $Formateur, 
 'id_candidat' => $Candidat, 
);
DB::table('seance_theorique')->insert($data1);

  return redirect('/admin/Seance_Theorique/'. $id1)->with('success','Ajout avec succès');
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
  public function update(Request $req,$id,$id2,$id1)
  {  
       

$this->validate($req,[
  'Date'=>'required',
  'Debut' => 'required', 
  'Fin' => 'required',
  'Prix' => 'required',
  'Formateur' => 'required', 
  ]);
$Date =$req -> input("Date");
$Debut =$req -> input("Debut");
$Fin =$req -> input("Fin");
$Prix =$req -> Input('Prix');
$Formateur =$req -> input("Formateur");  
$data= array('Date' => $Date,
 'Debut' => $Debut, 
 'Fin' => $Fin,  

);
DB::table('seance')->where('id',$id2)->update($data);


$data1= array(
 'Prix' => $Prix, 
 'id_formateur' => $Formateur, 
);
DB::table('seance_theorique')->where('id',$id)->update($data1);


 return redirect('/admin/Seance_Theorique/'. $id1)->with('success','Modification avec succès');
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
$candidat=DB::table('seance_theorique')->where('id_Seance',$id2)->get();

foreach ($candidat as $key => $value) {
  $Prix=DB::table('seance_theorique')->where('id_Seance',$id2)->value('Prix');
$Montant=DB::table('facture')->where('id_Candidat',$value->id_candidat)->value('Montant');
$Montant_rest=DB::table('facture')->where('id_Candidat',$value->id_candidat)->value('Montant_rest');
$Montant=$Montant+$Prix;
$Montant_rest=$Montant_rest+$Prix;
$data1 = array('Montant' => $Montant,'Montant_rest' => $Montant_rest);
DB::table('facture')->where('id_Candidat',$value->id_candidat)->update($data1);

}


 return redirect('/admin/Seance_Theorique/'. $id1)->with('success','Validation avec succès');

  }

/**
   * Update the specified resource in storage.
   *
   * @param  int  $id Request $req
   * @return Response
   */
  public function non_active(Request $req,$id,$id2,$id1)
  {  

$data= array('Etat' => 'non valide'
);
DB::table('seance')->where('id',$id2)->update($data);
$candidat=DB::table('seance_theorique')->where('id_Seance',$id2)->get();

foreach ($candidat as $key => $value) {
  $Prix=DB::table('seance_theorique')->where('id_Seance',$id2)->value('Prix');
$Montant=DB::table('facture')->where('id_Candidat',$value->id_candidat)->value('Montant');
$Montant_rest=DB::table('facture')->where('id_Candidat',$value->id_candidat)->value('Montant_rest');
$Montant=$Montant-$Prix;
$Montant_rest=$Montant_rest-$Prix;
$data1 = array('Montant' => $Montant,'Montant_rest' => $Montant_rest);
DB::table('facture')->where('id_Candidat',$value->id_candidat)->update($data1);

}


 return redirect('/admin/Seance_Theorique/'. $id1)->with('success','Validation avec succès');

  }



  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id,$id2,$id1)
  {
    DB::table('seance_theorique')->where('id_Seance',$id2)->delete();
    
    DB::table('seance')->where('id',$id2)->delete();
 
 return redirect('/admin/Seance_Theorique/'. $id1)->with('success','Suppression avec succès');
  }
  
}

?>
