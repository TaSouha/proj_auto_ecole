<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;
use DateTime;

class Alerte_VidangeController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($Matricule)
  {
    $alerte=DB::table('alerte_vidange')->where('id_Vehicule',$Matricule)->orderby('id','DESC')->get();
      $Vehicule=DB::table('vehicule')->where('Matricule',$Matricule)->first();
$dateInDB=new DateTime();
$newDate = $dateInDB->format('Y-m-d');
       return view('Alerte_Vidange.index',['alerte'=> $alerte , 'Vehicule'=> $Vehicule , 'newDate'=>$newDate]);
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
  public function store(Request $req,$Matricule)
  {
    $this->validate($req,[
  'Kilometrage_actuel'=>'required',
  'Kilometrage'=>'required',
  'Type_d_huile' => 'required', 
    'Type_d_filtre' => 'required', 

  ]);
$Kilometrage_actuel =$req -> input("Kilometrage_actuel");
$Kilometrage =$req -> input("Kilometrage");
$Type_d_huile=$req -> input("Type_d_huile");
$Type_d_filtre=$req -> input("Type_d_filtre");

$Date_operation=new DateTime(); 

$data= array('Kilometrage_actuel' => $Kilometrage_actuel,
  'Kilometrage' => $Kilometrage,
 'Type_d_huile' => $Type_d_huile, 
  'Type_d_filtre' => $Type_d_filtre,
 'Date_operation' => $Date_operation,
 'id_Vehicule'=>$Matricule);

DB::table('alerte_vidange')->insert($data);


  return redirect('/index_alerte_vidange/'. $Matricule )->with('success','Ajout avec succès');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
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
  public function update(Request $req,$id)
  { $this->validate($req,[
  'Kilometrage_actuel'=>'required',
  'Kilometrage'=>'required',
  'Type_d_huile' => 'required', 
    'Type_d_filtre' => 'required', 

  ]);
$Kilometrage_actuel =$req -> input("Kilometrage_actuel");
$Kilometrage =$req -> input("Kilometrage");
$Type_d_huile=$req -> input("Type_d_huile");
$Type_d_filtre=$req -> input("Type_d_filtre");

$Date_operation=new DateTime(); 

$data= array('Kilometrage_actuel' => $Kilometrage_actuel,
  'Kilometrage' => $Kilometrage,
 'Type_d_huile' => $Type_d_huile, 
  'Type_d_filtre' => $Type_d_filtre,
 'Date_operation' => $Date_operation);

DB::table('alerte_vidange')->where('id',$id)->update($data);
$Matricule=DB::table('alerte_vidange')->where('id',$id)->value('id_Vehicule');

    return redirect('/index_alerte_vidange/'. $Matricule )->with('success','Suppression avec succès');
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {  $Matricule=DB::table('alerte_vidange')->where('id',$id)->value('id_Vehicule');
    DB::table('alerte_vidange')->where('id',$id)->delete();
 
    return redirect('/index_alerte_vidange/'. $Matricule )->with('success','Suppression avec succès');
  }
  
}

?>