
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
            <li class="treeview">

          <a href="#">
            <i class="fa fa-book"></i>
            <span>Séances</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
           
           <li   ><a href="/proj_auto_ecole/public/admin/Seance_Theorique/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Séances théoriques</span></a></li>
              <li><a href="/proj_auto_ecole/public/admin/Seance_Pratique/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Séances pratiques</span></a></li>
          </ul>
        </li>

<li class="treeview active">

          <a href="#">
            <i class="fa fa-pencil-square-o"></i>
            <span>Examens</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu ">
           
           <li ><a href="/proj_auto_ecole/public/admin/Examen/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Examens théoriques</span></a></li>
              <li class="active"><a href="/proj_auto_ecole/public/admin/Examen_pratique/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Examens pratiques-circuit</span></a></li>
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
        Examens pratiques-circuit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Acceuil </a></li>
        <li class="active">Examens pratiques-circuit</li>
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
                  <th>Date de déclaration</th>

    <th>Date d'examen</th>

   <th>Candidat</th>
   <th>Résultat</th>
   
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
                    <h4 class="modal-title" id="custom-width-modalLabel">Examen pratique-circuit
            <span class="label label-warning">en attente</span>
</h4></center>
                </div>


<form action="/proj_auto_ecole/public/admin/store_Examen_pratique/{{$id1}}" method="POST" class="remove-record-model">
                <div class="modal-body">
                    <h4>
  
      {{ csrf_field() }}
    <div class="input-group date"><div class="input-group-addon" >
        Date d'examen
          </div>
          <input type="datetime-local" name="Date_exa" class="form-control pull-right"  value="{{old('Date_exa')}}">   </div>
   
            @if ($errors->has('Date_exa'))
                                   
                {{ $errors->first('Date_exa') }}
                                   
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

  
      
           </h4>
  </div>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-primary" name="submit" value="Add">
                    
                </div>             
       
</form>

        </div>
    </div>
</div>


                    @foreach ($examen as $key => $value)


<!-- Delete Model -->
    <div id="custom-width-modalb{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Confirmation de suppression</h4>
                </div>

   <form action="/proj_auto_ecole/public/admin/destroy_Examen_pratique/{{ $value->id}}/{{$id1}}" method="DELETE" data-parsley-validate>

                <div class="modal-body">
                    <h4>Voulez-vous vraiment supprimer cette examen?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Fermer</button>
                    <button type="submit" style="display: inline;"  class="btn btn-danger waves-effect waves-light">Supprimer</button>

                </div>
            </div>
  {!! Form::close() !!}

        </div>
    </div>





    <div id="custom-width-modalc{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Examen pratique-circuit
            <span class="label label-warning" ></span>
</h4></center>
                </div>


<form action="/proj_auto_ecole/public/admin/update_Examen_pratique/{{$value->id}}/{{$id1}}" method="POST" class="remove-record-model">
                <div class="modal-body">
                    <h4>
  
      {{ csrf_field() }}
{{ method_field('PATCH') }}

    <div class="input-group date"><div class="input-group-addon" >
        Date d'examen
          </div>
          <input type="timestamp-local" name="Date_exa" class="form-control pull-right"  value="{{$value->Date_exa}}">   </div>
   
            @if ($errors->has('Date_exa'))
                                   
                {{ $errors->first('Date_exa') }}
                                   
                 @endif
  

           
<div class="input-group date"><div class="input-group-addon"> 
  Candidats</div>
<SELECT name="Candidat" size="1">
<OPTION value="{{$value->id_Candidat}}">{{$value->Nom}} {{$value->Prenom}}</OPTION>
@foreach($list as $l)
<OPTION value="{{$l->id}}">{{$l->Nom}} {{$l->Prenom}}</OPTION>
@endforeach
</SELECT></div>
       
            @if ($errors->has('Candidat'))
                                   
                    <strong>{{ $errors->first('Candidat') }}</strong><br>
                                   
                 @endif

        @if($value->Resultat=='En attente')
          <input type="radio" name="Resultat" value="En attente" checked>En attente
        

  <input type="radio" name="Resultat" value="Admis">Admis
  <input type="radio" name="Resultat" value="Refusé">Refusé
@elseif($value->Resultat=='Admis')

 <input type="radio" name="Resultat" value="En attente" >En attente
        

  <input type="radio" name="Resultat" value="Admis" checked>Admis
  <input type="radio" name="Resultat" value="Refusé">Refusé

  @else
  <input type="radio" name="Resultat" value="En attente" >En attente
        

  <input type="radio" name="Resultat" value="Admis" >Admis
  <input type="radio" name="Resultat" value="Refusé" checked>Refusé
  @endif
        
            @if ($errors->has('Resultat'))
                                   
                    {{ $errors->first('Resultat') }}
                                   
                 @endif

  
      
           </h4>
  </div>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-primary" name="submit" value="Modifier">
                    
                </div>             
       
</form>

        </div>
    </div>
</div>



<form action="" method="POST" class="remove-record-model">
    <div id="custom-width-modala{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Examen 
    @if($value->Resultat=='Refusé')
            <span class="label label-danger">{{ $value->Resultat}}</span>

              @elseif($value->Resultat=='Admis')
            <span class="label label-success">{{ $value->Resultat}}</span>
              @else            
         <span class="label label-warning">{{ $value->Resultat}}</span>
      @endif
                    </h4><center>


                </div>
                <div class="modal-body">
                  <h4>
       <strong>Type d'examen : </strong>
   
            {{ $value->Type_Exa}}<br><br>
   
               <strong>Date de déclaration : </strong>
   
            {{ $value->Date_dec}}<br><br>     

    
        <strong>Date d'examen : </strong>
   
            {{ $value->Date_exa}}<br><br>
                   
 
        <strong>Candidat : </strong>
   
            {{ $value->Nom}}  {{ $value->Prenom}}<br><br>
                   
     
        
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
        <td>{{$value->Date_dec}}</td>
        <td>{{ $value->Date_exa }}</td>
      
            <td>{{ $value->Nom }} {{$value->Prenom}} </td>

              @if($value->Resultat=='Refusé')
            <td><span class="label label-danger">{{ $value->Resultat }}</span></td>

              @elseif($value->Resultat=='Admis')
            <td><span class="label label-success">{{ $value->Resultat }}</span></td>

              @else            
        <td> <span class="label label-warning">{{ $value->Resultat}}</span></td>
      @endif
             
           
     <td>



               <button  class="btn btn-info btn-sm"  data-toggle="modal" data-url="{{url('/show_candidat', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modala{{$value->id}}"> <i class="glyphicon glyphicon-zoom-in"></i></button>

 

                      <button  class="btn btn-success btn-sm"  data-toggle="modal" data-url="{{url('/edit_candidat', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modalc{{$value->id}}"> <i class="glyphicon glyphicon-pencil"></i></button>

               <button class="btn btn-danger btn-sm" data-toggle="modal" data-url="{{url('/destroy_candidat', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modalb{{$value->id}}"><i class="glyphicon glyphicon-trash"></i></button>

        @if($value->Resultat=="Refusé")
 <a class="btn btn-success btn-sm" href='/proj_auto_ecole/public/admin/admis_Examen_pratique/{{$value->id}}/{{$id1}}'>
              <i class="fa fa-check-square-o"></i></a>

       
              @elseif($value->Resultat=="Admis")
                   <a class="btn btn-danger btn-sm" href='/proj_auto_ecole/public/admin/refusé_Examen_pratique/{{$value->id}}/{{$id1}}'>
              <i class="fa fa-square-o"></i></a>
        @else
           <a class="btn btn-success btn-sm" href='/proj_auto_ecole/public/admin/admis_Examen_pratique/{{$value->id}}/{{$id1}}'>
              <i class="fa fa-check-square-o"></i></a>
                    <a class="btn btn-danger btn-sm" href='/proj_auto_ecole/public/admin/refusé_Examen_pratique/{{$value->id}}/{{$id1}}'>
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

