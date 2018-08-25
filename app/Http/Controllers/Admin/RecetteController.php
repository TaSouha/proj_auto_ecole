<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;
use DateTime;
use App\Http\Controllers\Controller;

class RecetteController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($id)
  {
    $id_Auto_ecole=DB::table('teamwork')->where('id_Personne',$id)->value('id_Auto_ecole');
    $auto_ecole=DB::table('auto_ecole')->where('id',$id_Auto_ecole)->first();
        $depense= DB::table('recette')->where('id_Auto_ecole',$id_Auto_ecole)
            ->orderby('id','DESC')->get();

       return view('admin.Recette',['depense'=> $depense, 'id1'=> $id , 'auto_ecole'=>$auto_ecole ]);
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create($id)
  {
    
    return view('Depense.create',['id'=> $id ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $req,$id)
  {
    $id_Auto_ecole=DB::table('teamwork')->where('id_Personne',$id)->value('id_Auto_ecole');

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
 'id_Auto_ecole'=>$id_Auto_ecole);

DB::table('recette')->insert($data);


  return redirect('/admin/Recette/'. $id )->with('success','Ajout avec succès');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
    $depense=DB::table('recette')->where('id',$id)->first();
   $id_Auto=DB::table('recette')->where('id',$id)->value('id_Auto_ecole');

    $auto_ecole=DB::table('auto_ecole')->where('id',$id_Auto)->first();
             return view('Recette.show',['depense'=> $depense ,'auto_ecole' => $auto_ecole]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  { $depense=DB::table('depense')->where('id',$id)->first();
    $id_Auto=DB::table('depense')->where('id',$id)->value('id_Auto_ecole');
    $auto_ecole=DB::table('auto_ecole')->where('id',$id_Auto)->first();
        return view('depense.edit',['depense'=> $depense, 'auto_ecole'=>$auto_ecole ]);
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $req,$id,$id1)
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
  return redirect('/admin/Recette/'. $id1 )->with('success','Modification avec succès');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id,$id1)
  {
    
    DB::table('recette')->where('id',$id)->delete();
 



  return redirect('admin/Recette/'. $id1 )->with('success','Suppression avec succès');
  
  }
  
}

?>