<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;


class Seance_PratiqueController extends Controller {


  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($id1)
  {$id_Auto_ecole=DB::table('teamwork')->where('id_Personne',$id1)->value('id_Auto_ecole');
    $seance_pratique= DB::table('seance_pratique')
              ->join('candidat','candidat.id','=','seance_pratique.id_candidat')
               ->join('teamwork', 'teamwork.id', '=', 'seance_pratique.id_moniteur')
               ->join('personne','personne.id','=','teamwork.id_Personne')
            ->join('seance', 'seance.id', '=', 'seance_pratique.id_Seance')  
          ->select('seance.id as id2','seance_pratique.id','seance.Date','seance.Debut','seance.Fin','seance_pratique.Prix','teamwork.id as id_P','teamwork.id_Personne as id_P1','candidat.id_Personne','seance.Etat','personne.Nom','personne.Prenom')
          ->where('teamwork.id_Auto_ecole',$id_Auto_ecole)
          ->where('candidat.id_Auto_ecole',$id_Auto_ecole)
->orderby('seance_pratique.id','DESC')->get();
$liste=DB::table('teamwork')->join('personne','personne.id','=','teamwork.id_Personne')->where('teamwork.id_Auto_ecole',$id_Auto_ecole)->where('teamwork.Type','moniteur')->select('teamwork.id','personne.Nom','personne.Prenom')->get();

$list=DB::table('candidat')->join('personne','personne.id','=','candidat.id_Personne')->where('candidat.id_Auto_ecole',$id_Auto_ecole)->select('candidat.id','personne.Nom','personne.Prenom')->get();

       return view('admin.Seance_Pratique',compact('seance_pratique','id1','liste','list'));
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
  'Moniteur' => 'required', 
  'Candidat' => 'required',
  ]);
$Date =$req -> input("Date");
$Debut =$req -> input("Debut");
$Fin =$req -> input("Fin");
$Prix =$req -> Input('Prix');
$Moniteur =$req -> input("Moniteur");
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
 'id_moniteur' => $Moniteur, 
 'id_candidat' => $Candidat, 
);
DB::table('seance_pratique')->insert($data1);


  return redirect('/admin/Seance_Pratique/'. $id1)->with('success','Ajout avec succès');
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
  'Moniteur' => 'required', 
  ]);
$Date =$req -> input("Date");
$Debut =$req -> input("Debut");
$Fin =$req -> input("Fin");
$Prix =$req -> Input('Prix');
$Moniteur =$req -> input("Moniteur");  
$data= array('Date' => $Date,
 'Debut' => $Debut, 
 'Fin' => $Fin,  

);
DB::table('seance')->where('id',$id2)->update($data);


$data1= array(
 'Prix' => $Prix, 
 'id_moniteur' => $Moniteur, 
);
DB::table('seance_pratique')->where('id',$id)->update($data1);


 return redirect('/admin/Seance_Pratique/'. $id1)->with('success','Modification avec succès');

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
$id_candidat=DB::table('seance_pratique')->where('id',$id)->value('id_candidat');
$Prix=DB::table('seance_pratique')->where('id',$id)->value('Prix');
$Montant=DB::table('facture')->where('id_Candidat',$id_candidat)->value('Montant');
$Montant_rest=DB::table('facture')->where('id_Candidat',$id_candidat)->value('Montant_rest');
$Montant=$Montant+$Prix;
$Montant_rest=$Montant_rest+$Prix;
$data1 = array('Montant' => $Montant,'Montant_rest' => $Montant_rest);
DB::table('facture')->where('id_Candidat',$id_candidat)->update($data1);

 return redirect('/admin/Seance_Pratique/'. $id1)->with('success','Validation avec succès');

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
$id_candidat=DB::table('seance_pratique')->where('id',$id)->value('id_candidat');
$Prix=DB::table('seance_pratique')->where('id',$id)->value('Prix');
$Montant=DB::table('facture')->where('id_Candidat',$id_candidat)->value('Montant');
$Montant_rest=DB::table('facture')->where('id_Candidat',$id_candidat)->value('Montant_rest');
$Montant=$Montant-$Prix;
$Montant_rest=$Montant_rest-$Prix;
$data1 = array('Montant' => $Montant,'Montant_rest' => $Montant_rest);
DB::table('facture')->where('id_Candidat',$id_candidat)->update($data1);


 return redirect('/admin/Seance_Pratique/'. $id1)->with('success','Invalidation avec succès');

  }

  public function non_active1(Request $req,$id2,$id1)
  {  

$data= array('Etat' => 'non valide'
);
DB::table('seance')->where('id',$id2)->update($data);


 return redirect('/admin/Seance_Pratique/'. $id1)->with('success','Invalidation avec succès');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id,$id2,$id1)
  {
    DB::table('seance_pratique')->where('id',$id)->delete();
    
    DB::table('seance')->where('id',$id2)->delete();
 
 return redirect('/admin/Seance_Pratique/'. $id1)->with('success','Suppression avec succès');
  }
  
}

?>