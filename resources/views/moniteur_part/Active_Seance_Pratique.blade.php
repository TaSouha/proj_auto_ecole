
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
       <li>
          <a href="/proj_auto_ecole/public/moniteur/Accueil/{{$id1}}">
            <i class="fa fa-dashboard"></i> <span>Accueil</span>
         
          </a>
         
        </li>
  
           <li ><a href="/proj_auto_ecole/public/moniteur/Auto_ecole/{{$id1}}"><i class="fa fa-home"></i> Auto-école </a></li>

      
   
        <li ><a href="/proj_auto_ecole/public/moniteur/Candidat/{{$id1}}"><i class="fa fa-user"></i> <span>Candidats</span></a></li>

        <li class="treeview">
           <a href="#">
            <i class="fa fa-automobile"></i>
            <span>Véhicule</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
     
               <li><a href="/proj_auto_ecole/public/moniteur/Vehicule/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Info</span></a></li>
               <li><a href="/proj_auto_ecole/public/moniteur/Alerte_Vidange/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Alerte de vidange</span></a></li>
               <li><a href="/proj_auto_ecole/public/moniteur/Alerte_V/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Alerte de visite</span></a></li>
               <li><a href="/proj_auto_ecole/public/moniteur/Alerte_A/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Alerte d'assurance </span></a></li>

 </ul>
        </li>
             <li class="treeview active">

          <a href="#">
            <i class="fa fa-book"></i>
            <span>Séances pratiques</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
     
              <li><a href="/proj_auto_ecole/public/moniteur/Plan_Seance_Pratique/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Plan des séances</span></a></li>
              <li  class="active"><a href="/proj_auto_ecole/public/moniteur/Active_Seance_Pratique/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Les séances validées</span></a></li>
              <li><a href="/proj_auto_ecole/public/moniteur/Non_active_Seance_Pratique/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Les séances en attente</span></a></li>
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
        Seances pratiques
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Acceuil </a></li>
        <li class="active">Seances pratiques</li>
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
                  <th>Date</th>

    <th>Prix</th>
   <th>Moniteur</th>
   <th>Candidat</th>
   <th>Etat</th>

   
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
            <span class="label label-success">valide</span>
</h4></center>
                </div>


<form action="/proj_auto_ecole/public/moniteur/store_Active_Seance_Pratique/{{$id1}}" method="POST" class="remove-record-model">
                <div class="modal-body">
                    <h4>
  
      {{ csrf_field() }}
    <div class="input-group date"><div class="input-group-addon" >
        Date
          </div>
          <input type="date" name="Date" class="form-control pull-right"  value="{{old('Date')}}">   </div>
   
            @if ($errors->has('Date'))
                                   
                {{ $errors->first('Date') }}
                                   
                 @endif
   
      <div class="input-group date"><div class="input-group-addon">
      Début
        </div>
      <input type="time" name="Debut" class="form-control pull-right" value="{{old('Debut')}}"></div>
        
            @if ($errors->has('Debut'))
                                   
                    {{ $errors->first('Debut') }}
                                   
                @endif

                 <div class="input-group date"><div class="input-group-addon">
           Fin

        </div>
      <input type="time" name="Fin" class="form-control pull-right" value="{{old('Date_nais')}}"></div>
        
            @if ($errors->has('Fin'))
                                   
                    {{ $errors->first('Fin') }}
                                   
                @endif
 
     <div class="input-group date"><div class="input-group-addon">
      Prix
        </div>
      <input type="text" name="Prix" class="form-control pull-right" value="{{old('Prix')}}"></div>
        
            @if ($errors->has('Prix'))
                                   
                    {{ $errors->first('Prix') }}
                                   
                @endif


           
<div class="input-group date"><div class="input-group-addon"> 
  Candidats</div>
<SELECT name="Candidat" size="1">

@foreach($list as $l)
<OPTION value="{{$l->id}}">{{$l->Nom}} {{$l->Prenom}}</OPTION>
@endforeach
</SELECT></div>
       
            @if ($errors->has('Candidat'))
                                   
                    <strong>{{ $errors->first('Candidat') }}</strong><br>
                                   
                 @endif

  
      </div>
           </h4>
  
                <div class="modal-footer">
                  <input type="submit" class="btn btn-primary" name="submit" value="Ajouter">
                    
                </div>             
       
</form>
</div>
        </div>
    </div>










                    @foreach ($seance_pratique as $key => $value)



<!-- Delete Model -->
    <div id="custom-width-modalb{{$value->id2}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Confirmation de suppression</h4>
                </div>

   <form action="/proj_auto_ecole/public/moniteur/destroy_Active_Seance_Pratique/{{ $value->id}}/{{$value->id2}}/{{$id1}}" method="DELETE" data-parsley-validate>

                <div class="modal-body">
                    <h4>Voulez-vous vraiment supprimer cette séance?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Fermer</button>
                    <button type="submit" style="display: inline;"  class="btn btn-danger waves-effect waves-light">Supprimer</button>

                </div>
            </div>
  {!! Form::close() !!}

        </div>
    </div>


         <?php
$N=DB::table('Personne')->where('id',$value->id_P1)->value('Nom');
$P=DB::table('Personne')->where('id',$value->id_P1)->value('Prenom');
$N1=DB::table('Personne')->where('id',$value->id_Personne)->value('Nom');
$P1=DB::table('Personne')->where('id',$value->id_Personne)->value('Prenom');


        ?>
<form action="" method="POST" class="remove-record-model">
    <div id="custom-width-modala{{$value->id2}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Séance 
    @if($value->Etat=='non valide')
            <span class="label label-danger">{{ $value->Etat}}</span>

              @elseif($value->Etat=='valide')
            <span class="label label-success">{{ $value->Etat}}</span>

                @else
            <span class="label label-warning">{{ $value->Etat}}</span>

      
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
                   
     
        <strong>Moniteur : </strong>
   
            {{ $N}} {{$P}}<br><br>
             
        <strong>candidat : </strong>
   
            {{ $N1}} {{$P1}}<br><br>
                
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






    <div id="custom-width-modalc{{$value->id2}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Séance  @if($value->Etat=='non valide')
            <span class="label label-danger">{{ $value->Etat}}</span>

              @elseif($value->Etat=='valide')
            <span class="label label-success">{{ $value->Etat}}</span>

                @else
            <span class="label label-warning">{{ $value->Etat}}</span>

      
      @endif</h4></center>
                </div>


<form action="/proj_auto_ecole/public/moniteur/update_Active_Seance_Pratique/{{$value->id}}/{{$value->id2}}/{{$id1}}" method="POST" class="remove-record-model">
                <div class="modal-body">
                    <h4>
  
              {{ csrf_field() }}
{{ method_field('PATCH') }}
    <div class="input-group date"><div class="input-group-addon" >
        Date
          </div>
          <input type="date" name="Date" class="form-control pull-right"  value="{{$value->Date}}">   </div>
   
            @if ($errors->has('Date'))
                                   
                {{ $errors->first('Date') }}
                                   
                 @endif
   
      <div class="input-group date"><div class="input-group-addon">
      Début
        </div>
      <input type="time" name="Debut" class="form-control pull-right" value="{{$value->Debut}}"></div>
        
            @if ($errors->has('Debut'))
                                   
                    {{ $errors->first('Debut') }}
                                   
                @endif

                 <div class="input-group date"><div class="input-group-addon">
           Fin

        </div>
      <input type="time" name="Fin" class="form-control pull-right" value="{{$value->Fin}}"></div>
        
            @if ($errors->has('Fin'))
                                   
                    {{ $errors->first('Fin') }}
                                   
                @endif
 
     <div class="input-group date"><div class="input-group-addon">
      Prix
        </div>
      <input type="text" name="Prix" class="form-control pull-right" value="{{$value->Prix}}"></div>
        
            @if ($errors->has('Prix'))
                                   
                    {{ $errors->first('Prix') }}
                                   
                @endif

  
           </h4>
  </div>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-primary" name="submit" value="Modifier">
                    
                </div>             
       
</form>

        </div>
    </div>






                <!-- Delete Model -->





      <tr>
        <td>{{$value->Date}}</td>
        <td>{{ $value->Prix }}</td>
      
            <td>{{ $N }} {{$P}}</td>
            <td>{{ $N1 }} {{$P1}} </td>
            @if($value->Etat=='non valide')
            <td><span class="label label-danger">{{ $value->Etat}}</span></td>

              @elseif($value->Etat=='valide')
            <td><span class="label label-success">{{ $value->Etat}}</span></td>

                @else
            <td><span class="label label-warning">{{ $value->Etat}}</span></td>

      
      @endif
     <td>



               <button  class="btn btn-info btn-sm"  data-toggle="modal" data-url="{{url('/show_candidat', $value->id) }}" data-id="{{$value->id2}}" data-target="#custom-width-modala{{$value->id2}}"> <i class="glyphicon glyphicon-zoom-in"></i></button>

 

                      <button  class="btn btn-success btn-sm"  data-toggle="modal" data-url="{{url('/edit_candidat', $value->id) }}" data-id="{{$value->id2}}" data-target="#custom-width-modalc{{$value->id2}}"> <i class="glyphicon glyphicon-pencil"></i></button>

               <button class="btn btn-danger btn-sm" data-toggle="modal" data-url="{{url('/destroy_candidat', $value->id) }}" data-id="{{$value->id2}}" data-target="#custom-width-modalb{{$value->id2}}"><i class="glyphicon glyphicon-trash"></i></button>

           @if($value->Etat=="non valide")
 <a class="btn btn-success btn-sm" href='/proj_auto_ecole/public/moniteur/active_Plan_Seance_Pratique/{{$value->id}}/{{$value->id2}}/{{$id1}}'>
              <i class="fa fa-check-square-o"></i></a>

       
              @elseif($value->Etat=="valide")
                   <a class="btn btn-danger btn-sm" href='/proj_auto_ecole/public/moniteur/non_active_Active_Seance_Pratique/{{$value->id}}/{{$value->id2}}/{{$id1}}'>
              <i class="fa fa-square-o"></i></a>
        @else
           <a class="btn btn-success btn-sm" href='/proj_auto_ecole/public/admin/active_Seance_Pratique/{{$value->id}}/{{$value->id2}}/{{$id1}}'>
              <i class="fa fa-check-square-o"></i></a>
                    <a class="btn btn-danger btn-sm" href='/proj_auto_ecole/public/admin/non_active1_Seance_Pratique/{{$value->id2}}/{{$id1}}'>
              <i class="fa fa-square-o"></i></a>
              @endif
        </td>
</tr>
    @endforeach   

                </tbody>
                
              </table>


      
    

    
  </table>
  
  </center>
  </form>




            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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

