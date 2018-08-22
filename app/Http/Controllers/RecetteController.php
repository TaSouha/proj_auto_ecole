<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\facture;
use App\candidat;
use DB;
use DateTime;
class RecetteController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($id)
  {
    $auto_ecole=DB::table('auto_ecole')->where('id',$id)->first();
        $recette= DB::table('recette')->where('id_Auto_ecole',$id)
            ->orderby('id','DESC')->get();

       return view('Recette.index',['recette'=> $recette, 'id'=> $id , 'auto_ecole'=>$auto_ecole ]);
}
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create($id)
  {
    
    return view('Recette.create',['id'=> $id ]);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $req,$id)
  {
    $this->validate($req,[
  'Montant'=>'required',
  'Mode_paiement'=>'required',
  'Designations' => 'required', 
  ]);
$Montant =$req -> input("Montant");
$Mode_paiement =$req -> input("Mode_paiement");
$Designations=$req -> input("Designations");
$Date=new DateTime(); 

$data= array('Montant' => $Montant,
  'Mode_paiement' => $Mode_paiement,
 'Designations' => $Designations, 
 'Date' => $Date,
 'id_Auto_ecole'=>$id);

DB::table('recette')->insert($data);


  return redirect('/index_recette/'. $id )->with('success','Ajout avec succès');
  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $recette=DB::table('recette')->where('id',$id)->first();
   $id_Auto=DB::table('recette')->where('id',$id)->value('id_Auto_ecole');

    $auto_ecole=DB::table('auto_ecole')->where('id',$id_Auto)->first();
             return view('Recette.show',['recette'=> $recette ,'auto_ecole' => $auto_ecole]);
  }

 
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  { $recette=DB::table('recette')->where('id',$id)->first();
    $id_Auto=DB::table('recette')->where('id',$id)->value('id_Auto_ecole');
    $auto_ecole=DB::table('auto_ecole')->where('id',$id_Auto)->first();
        return view('recette.edit',['recette'=> $recette, 'auto_ecole'=>$auto_ecole ]);
    
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
  'Mode_paiement'=>'required',
  'Designations' => 'required', 
  ]);


$Montant =$req -> input("Montant");
$Mode_paiement =$req -> input("Mode_paiement");
$Designations =$req -> input("Designations");
$Date =new DateTime();
$id_Auto=DB::table('recette')->where('id',$id)->value('id_Auto_ecole');
$data= array('Montant' => $Montant,
 'Designations' => $Designations, 
 'Mode_paiement'=>$Mode_paiement,
 'Date' => $Date, 
'id_Auto_ecole'=>$id_Auto);

DB::table('recette')->where('id',$id)->update($data);
  return redirect('/index_recette/'. $id_Auto )->with('success','Modification avec succès');
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $id_Auto=DB::table('recette')->where('id', $id)->value('id_Auto_ecole');
    DB::table('recette')->where('id',$id)->delete();
 
  


  return redirect('/index_recette/'. $id_Auto )->with('success','Suppression avec succès');
  
  }
  
}

?>