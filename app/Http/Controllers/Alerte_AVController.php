<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;
use DateTime;

class Alerte_AVController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($Matricule)
  {
    $alerte=DB::table('alerte_av')->where('id_Vehicule',$Matricule)->where('Type','visite')->orderby('id','DESC')->get();
      $Vehicule=DB::table('vehicule')->where('Matricule',$Matricule)->first();
$dateInDB=new DateTime();
$newDate = $dateInDB->format('Y-m-d');
       return view('Alerte_V.index',['alerte'=> $alerte , 'Vehicule'=> $Vehicule , 'newDate'=>$newDate]);
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
  'Date_present'=>'required',
  'Date_prochain'=>'required',
  'Description' => 'required', 
  ]);
$Date_present =$req -> input("Date_present");
$Date_prochain =$req -> input("Date_prochain");
$Description=$req -> input("Description");

$data= array('Date_present' => $Date_present,
  'Date_prochain' => $Date_prochain,
 'Description' => $Description, 
  'Type' => 'visite',
 'id_Vehicule'=>$Matricule);

DB::table('alerte_av')->insert($data);


  return redirect('/index_alerte_v/'. $Matricule )->with('success','Ajout avec succès');
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
  'Date_present'=>'required',
  'Date_prochain'=>'required',
  'Description' => 'required',  

  ]);
$Date_present =$req -> input("Date_present");
$Date_prochain =$req -> input("Date_prochain");
$Description=$req -> input("Description");

$data= array('Date_present' => $Date_present,
  'Date_prochain' => $Date_prochain,
 'Description' => $Description, 
 );

DB::table('alerte_av')->where('id',$id)->update($data);
$Matricule=DB::table('alerte_av')->where('id',$id)->value('id_Vehicule');

    return redirect('/index_alerte_v/'. $Matricule )->with('success','Suppression avec succès');
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {  $Matricule=DB::table('alerte_av')->where('id',$id)->value('id_Vehicule');
    DB::table('alerte_av')->where('id',$id)->delete();
 
    return redirect('/index_alerte_v/'. $Matricule )->with('success','Suppression avec succès');
  }
  
}

?>