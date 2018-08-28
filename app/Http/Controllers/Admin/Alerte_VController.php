<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\personne;
use App\candidat;
use App\Http\Requests;
use DB;
use DateTime;
use App\Http\Controllers\Controller;

class Alerte_VController extends Controller {


  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($Matricule,$id1)
  {
    $alerte=DB::table('alerte_av')->where('id_Vehicule',$Matricule)->where('Type','visite')->orderby('id','DESC')->get();
      $Vehicule=DB::table('vehicule')->where('Matricule',$Matricule)->first();
$dateInDB=new DateTime();
$newDate = $dateInDB->format('Y-m-d');
       return view('admin.Alerte_V',['alerte'=> $alerte , 'Vehicule'=> $Vehicule , 'newDate'=>$newDate,'id1'=>$id1]);
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
  public function store(Request $req,$Matricule,$id1)
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


  return redirect('/admin/Alerte_V/'. $Matricule.'/'.$id1 )->with('success','Ajout avec succès');
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
  public function update(Request $req,$id,$id1)
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

    return redirect('/admin/Alerte_V/'. $Matricule.'/'.$id1 )->with('success','Modification avec succès');
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id,$id1)
  {  $Matricule=DB::table('alerte_av')->where('id',$id)->value('id_Vehicule');
    DB::table('alerte_av')->where('id',$id)->delete();
 
    return redirect('/admin/Alerte_V/'. $Matricule.'/'.$id1)->with('success','Suppression avec succès');
  }
  
}

?>