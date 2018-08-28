
@extends('layouts.moderateur')
@section('profile')
 <div class="pull-left">
                  <a href="/proj_auto_ecole/public/admin/Profile/{{$id1}}"class="btn btn-default btn-flat">Profile</a>
                </div>
@endsection


@section('content')

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
       <li >
          <a href="/proj_auto_ecole/public/admin/Accueil/{{$id1}}">
            <i class="fa fa-dashboard"></i> <span>Accueil</span>
         
          </a>
         
        </li>
  <li class="treeview">

          <a href="#">
            <i class="fa fa-users"></i>
            <span>Auto_école</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
           <li ><a href="/proj_auto_ecole/public/admin/Auto_ecole/{{$id1}}"><i class="fa fa-circle-o"></i> Paramétrage </a></li>
            <li ><a href="/proj_auto_ecole/public/admin/Depense/{{$id1}}"><i class="fa fa-circle-o"></i> Dépenses </a></li>
            <li ><a href="/proj_auto_ecole/public/admin/Recette/{{$id1}}"><i class="fa fa-circle-o"></i> Recette </a></li>
            
          </ul>
        </li>
          <li class="treeview ">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Employées</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li ><a href="/proj_auto_ecole/public/admin/Moniteur/{{$id1}}"><i class="fa fa-circle-o"></i> Moniteurs </a></li>
            <li><a href="/proj_auto_ecole/public/admin/Formateur/{{$id1}}"><i class="fa fa-circle-o"></i> Formateurs </a></li>
            
          </ul>
        </li>
        <li ><a href="/proj_auto_ecole/public/admin/Candidat/{{$id1}}"><i class="fa fa-user"></i> <span>Candidats</span></a></li>
               <li><a href="/proj_auto_ecole/public/admin/Vehicule/{{$id1}}"><i class=" fa fa-automobile"></i> <span>Véhicules</span></a></li>
            <li class="treeview active">

          <a href="#">
            <i class="fa fa-book"></i>
            <span>Séances</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
           
           <li  class="active" ><a href="/proj_auto_ecole/public/admin/Seance_Theorique/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Séances théoriques</span></a></li>
              <li><a href="/proj_auto_ecole/public/admin/Seance_Pratique/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Séances pratiques</span></a></li>
          </ul>
        </li>

<li class="treeview">

          <a href="#">
            <i class="fa fa-pencil-square-o"></i>
            <span>Examens</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu ">
           
           <li ><a href="/proj_auto_ecole/public/admin/Examen/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Examens théoriques</span></a></li>
              <li ><a href="/proj_auto_ecole/public/admin/Examen_pratique/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Examens pratiques-circuit</span></a></li>
                   <li ><a href="/proj_auto_ecole/public/admin/Examen_pratique_créno/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Examens pratiques-créno</span></a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
               <?php $Date=DB::table('seance')->where('id',$id2)->value('Date'); ?> 
       Séance théorique Le {{$Date}}
       <?php $Date=DB::table('seance')->where('id',$id2)->value('Date'); ?> 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Acceuil </a></li>
        <li class="active">Séances théoriques</li>
        <li class="active">Candidats</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <script type="text/javascript"> 
function bascule(id) 
{ 
  if (document.getElementById(id).style.visibility == "hidden")
      document.getElementById(id).style.visibility = "visible"; 
  else  document.getElementById(id).style.visibility = "hidden"; 
} 
</script> 

          <div class="box">
            <div class="box-header">
              @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
             

    <th>Prix</th>
   <th>Formateur</th>
   <th>Candidat</th>
   
   
       <th with="140px" class="text-center">
    <!-- <a href="{{url('/create_auto_ecole')}}" class="btn btn-success btn-sm">
      <i class="glyphicon glyphicon-plus"></i></a>-->
<button  class="btn btn-success btn-sm"  data-toggle="modal" data-url="{{url('/create_candidat')}}"  data-target="#custom-width-modal4"> <i class="glyphicon glyphicon-plus"></i></button>
        </th>

                </tr>
                </thead>
                <tbody>





    <div id="custom-width-modal4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Séance 
         
</h4></center>
                </div>


<form action="/proj_auto_ecole/public/admin/store_Seances/{{$id}}/{{$id2}}/{{$id1}}" method="POST" class="remove-record-model">
                <div class="modal-body">
                    <h4>
  
      {{ csrf_field() }}


           
<div class="input-group date"><div class="input-group-addon"> 
  Candidat</div>
<SELECT name="id_Candidat" size="1">

@foreach($list as $l)
<OPTION value="{{$l->id}}">{{$l->Nom}} {{$l->Prenom}}</OPTION>
@endforeach
</SELECT></div>
       
            @if ($errors->has('id_Candidat'))
                                   
                    <strong>{{ $errors->first('id_Candidat') }}</strong><br>
                                   
                 @endif

  
      </div>
           </h4>
  
                <div class="modal-footer">
                  <input type="submit" class="btn btn-primary" name="submit" value="Add">
                    
                </div>             

</form></div></div></div>









                    @foreach ($seance_theorique as $key => $value)

                <!-- Delete Model -->


<!-- Delete Model -->
    <div id="custom-width-modalb{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Confirmation de suppression</h4>
                </div>

   <form action="/proj_auto_ecole/public/admin/destroy_Seances/{{ $value->id}}/{{$value->id2}}/{{$id1}}" method="DELETE" data-parsley-validate>

                <div class="modal-body">
                    <h4>Voulez-vous vraiment supprimer ce candidat?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Fermer</button>
                    <button type="submit" style="display: inline;"  class="btn btn-danger waves-effect waves-light">Supprimer</button>

                </div>
            </div>
  {!! Form::close() !!}

        </div>
    </div>
    
<form action="" method="POST" class="remove-record-model">
    <div id="custom-width-modala{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Séance théorique</h4><center>
   @if($value->Etat=='non valide')
            <span class="label label-danger">{{ $value->Etat}}</span>

              @elseif($value->Etat=='valide')
            <span class="label label-success">{{ $value->Etat}}</span>


      
      @endif
                    </h4><center>


                </div>
                <div class="modal-body">
                  <h4>
       <strong>Date : </strong>
   
            {{ $value->Date}}<br><br>
   
               <strong>Début : </strong>
   
            {{ $value->Debut}}<br><br>     

    
        <strong>Fin : </strong>
   
            {{ $value->Fin}}<br><br>

 
        <strong>Prix : </strong>
   
            {{ $value->Prix}}<br><br>
   <strong>Formateur : </strong>
   
            {{ $Nom }} {{ $Prenom }}<br><br>
     
        <strong>Candidat : </strong>
   
            {{ $value->Nom }} {{$value->Prenom }}<br><br>
 
                  </h4>
                  </div>   
                <div class="modal-footer">
      
                </div>

            </div>
        </div>
    </div>

</div>
</center>
</form>




      <tr>
        
        <td>{{ $value->Prix }}</td>
            <td>{{ $Nom }} {{ $Prenom }} </td>
            <td>{{ $value->Nom }} {{ $value->Prenom }} </td>
   
             

     <td>



               <button  class="btn btn-info btn-sm"  data-toggle="modal" data-url="{{url('/show_candidat', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modala{{$value->id}}"> <i class="glyphicon glyphicon-zoom-in"></i></button>

 

                   

               <button class="btn btn-danger btn-sm" data-toggle="modal" data-url="{{url('/destroy_candidat', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modalb{{$value->id}}"><i class="glyphicon glyphicon-trash"></i></button>
               </td>




</tr>
    @endforeach   

                </tbody>
                
              </table>


  </center>
  </form>




            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

      
   <a class="btn btn-primary btn-sm" href="/proj_auto_ecole/public/admin/Seance_Theorique/{{$id1}}">
             <i class="glyphicon glyphicon-arrow-left"></i></a>
  
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->




@endsection


@section('script')
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>




@endsection

