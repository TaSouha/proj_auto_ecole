<?php 
namespace App\Http\Controllers\Moniteur;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use DateTime;

class Examen_pratique_circuitController extends Controller {


  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($id,$id1)
  {$id_Auto_ecole=DB::table('teamwork')->where('id_Personne',$id1)->value('id_Auto_ecole');
    $examen= DB::table('examen')
               ->join('candidat', 'examen.id_Candidat', '=', 'candidat.id') 
              ->join('personne','candidat.id_Personne','=','personne.id')

          ->select('examen.id_Candidat','examen.id as id2','examen.id','examen.Date_dec','examen.Date_exa','examen.Resultat','examen.Type_Exa','personne.id as id_P','personne.Nom','personne.Prenom')
          ->where('candidat.id_Auto_ecole',$id_Auto_ecole)
          ->where('candidat.id',$id)
          ->where('examen.Type_Exa','Examen pratique-circuit')
          ->orderby('examen.id','DESC')->get();
$list=DB::table('candidat')->join('personne','personne.id','=','candidat.id_Personne')->where('candidat.id_Auto_ecole',$id_Auto_ecole)->select('candidat.id','personne.Nom','personne.Prenom')->get();

       return view('moniteur_part.Examen_pratique_circuit',compact('examen','id1','list'));
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
  'Date_exa'=>'required',
  'Candidat' => 'required', 
  
  ]);
$Date_exa =$req -> input("Date_exa");
$id_Candidat =$req -> input("Candidat");
$Date_dec=new DateTime(); 
$Resultat='En attente';
$data= array('Date_dec' => $Date_dec,
 'Date_exa' => $Date_exa, 
 'id_Candidat' => $id_Candidat, 
 'Resultat' => $Resultat,
 'Type_Exa' => 'Examen pratique-circuit'
);
DB::table('examen')->insert($data);


  return redirect('/admin/Examen_pratique/'. $id1)->with('success','Ajout avec succès');
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
  public function update(Request $req,$id,$id1)
  {  
       
$this->validate($req,[
  'Date_exa'=>'required',
  'Candidat' => 'required', 
 'Resultat' =>'required'
  ]);
$Date_exa =$req -> input("Date_exa");
$id_Candidat =$req -> input("Candidat");
$Date_dec =new DateTime();
$Resultat =$req -> Input('Resultat');
$data= array('Date_dec' => $Date_dec,
 'Date_exa' => $Date_exa, 
 'id_Candidat' => $id_Candidat, 
 'Resultat' => $Resultat,
);
DB::table('examen')->where('id',$id)->update($data);


 return redirect('/admin/Examen_pratique/'. $id1)->with('success','Modification avec succès');

}

/**
   * Update the specified resource in storage.
   *
   * @param  int  $id Request $req
   * @return Response
   */
  public function admis(Request $req,$id,$id1)
  {  

$data= array('Resultat' => 'Admis'
);
DB::table('examen')->where('id',$id)->update($data);


 return redirect('/admin/Examen_pratique/'. $id1)->with('success','Validation avec succès');

  }

/**
   * Update the specified resource in storage.
   *
   * @param  int  $id Request $req
   * @return Response
   */
  public function refusé(Request $req,$id,$id1)
  {  

$data= array('Resultat' => 'Refusé'
);
DB::table('examen')->where('id',$id)->update($data);

 return redirect('/admin/Examen_pratique/'. $id1)->with('success','Invalidation avec succès');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id,$id1)
  {
    DB::table('examen')->where('id',$id)->delete();
    
 return redirect('/admin/Examen_pratique/'. $id1)->with('success','Suppression avec succès');
  }
  
}

?>