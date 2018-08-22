<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;
use DateTime;
class Auto_ecoleController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
        $Auto_ecole=DB::table('auto_ecole')
            ->join('parametrage', 'parametrage.id_Auto_ecole', '=', 'auto_ecole.id')
            ->select('auto_ecole.id','auto_ecole.Nom', 'auto_ecole.Lieu', 'auto_ecole.Adresse', 'auto_ecole.Photo', 'parametrage.id as id1', 'parametrage.Nbre_candidat', 'parametrage.Nbre_formateur','parametrage.Nbre_moniteur','auto_ecole.Description')
            ->GroupBy('auto_ecole.id')->orderby('auto_ecole.id','DESC')->get();
       return view('Auto_ecole.index',compact('Auto_ecole'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
        return view('Auto_ecole.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $req)
  {
    $this->validate($req,[
  'Nom'=>'required|string',
  'Lieu' => 'required|string', 
  'Adresse' => 'required|string',
  'Description' => 'required|max:255|string'
  ]);
$Nom =$req -> input("Nom");
$Lieu =$req -> input("Lieu");
$Adresse =$req -> input("Adresse");
$Description =$req -> Input('Description');
$Photo =$req -> input("Photo");
$Nbre_candidat=$req -> input("Nbre_candidat");
$Nbre_formateur=$req -> input("Nbre_formateur");
$Nbre_moniteur =$req -> input("Nbre_moniteur");   
$data= array('Nom' => $Nom,
 'Lieu' => $Lieu, 
 'Adresse' => $Adresse, 
 'Description' => $Description,
 'Photo' => $Photo);
DB::table('auto_ecole')->insert($data);
$id_Auto_ecole=DB::table('auto_ecole')->where('Adresse',$Adresse)->where('Nom',$Nom)->where('Description',$Description)->value('id');
$data2 = array('Nbre_candidat' => $Nbre_candidat,
 'Nbre_formateur' => $Nbre_formateur, 
 'Nbre_moniteur' => $Nbre_moniteur,
'id_Auto_ecole'=> $id_Auto_ecole);
DB::table('parametrage')->insert($data2);


  return redirect('/index_auto_ecole/')->with('success','Ajout avec succès');
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
     $auto_ecole=DB::table('auto_ecole')->where('id',$id)->first();
  $parametrage= DB::table('parametrage')->where('id_Auto_ecole',$id)->first();
             return view('Auto_ecole.show',['auto_ecole'=> $auto_ecole, 'parametrage'=>$parametrage ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
     $auto_ecole=DB::table('auto_ecole')->where('id',$id)->first();
     $parametrage=DB::table('parametrage')->where('id_Auto_ecole',$id)->first();
        return view('Auto_ecole.edit',['auto_ecole'=> $auto_ecole ,'parametrage'=>$parametrage]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id,Request $req)
  {  
       

    $this->validate($req,[
     
  'Nom'=>'required|string',
  'Lieu' =>'required|string', 
  'Adresse' => 'required|string',
  'Description' => 'required|max:255',
  'Nbre_candidat' => 'required', 
  'Nbre_moniteur' => 'required',
  'Nbre_formateur' => 'required',
  ]);

$Nom =$req -> input("Nom");
$Lieu =$req -> input("Lieu");
$Adresse =$req -> input("Adresse");
$Description =$req -> Input('Description');
$Nbre_candidat =$req->input("Nbre_candidat");
$Nbre_moniteur =$req -> input("Nbre_moniteur");
$Nbre_formateur =$req -> input("Nbre_formateur");
$Photo =$req->input("Photo");
$data= array('Nom' => $Nom,
 'Lieu' => $Lieu, 
 'Adresse' => $Adresse, 
 'Description' => $Description,
 'Photo' => $Photo);
DB::table('auto_ecole')->where('id',$id)->update($data);
$data2= array(
 'Nbre_candidat' => $Nbre_candidat, 
  'Nbre_moniteur' => $Nbre_moniteur,
   'Nbre_formateur' => $Nbre_formateur,
 'id_Auto_ecole' => $id);
DB::table('parametrage')->where('id_Auto_ecole',$id)->update($data2);
 return redirect()->action('Auto_ecoleController@index')->with('success','Modification avec succès');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
       DB::table('vehicule')->where('id_Auto_ecole',$id)->delete();

     DB::table('teamwork')->where('id_Auto_ecole',$id)->delete();
    
    DB::table('recette')->where('id_Auto_ecole',$id)->delete();

     DB::table('depense')->where('id_Auto_ecole',$id)->delete();
   DB::table('parametrage')->where('id_Auto_ecole',$id)->delete();
    DB::table('auto_ecole')->where('id',$id)->delete();
 return redirect()->action('Auto_ecoleController@index')->with('success','Suppression avec succès');
  }
  
}

?>