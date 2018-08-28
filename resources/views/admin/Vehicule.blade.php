
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
          <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Employées</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
                      
            <li><a href="/proj_auto_ecole/public/admin/Moniteur/{{$id1}}"><i class="fa fa-circle-o"></i> Moniteurs </a></li>
            <li><a href="/proj_auto_ecole/public/admin/Formateur/{{$id1}}"><i class="fa fa-circle-o"></i> Formateurs </a></li>
          </ul>
        </li>
        <li ><a href="/proj_auto_ecole/public/admin/Candidat/{{$id1}}"><i class="fa fa-user"></i> <span>Candidats</span></a></li>
   <li class="active"><a href="/proj_auto_ecole/public/admin/Vehicule/{{$id1}}"><i class=" fa fa-automobile"></i> <span>Véhicules</span></a></li>
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
        Véhicules
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Acceuil </a></li>
        <li class="active">Véhicules</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <script type="text/javascript"> 
 
function bascule(id) 
{ 
  if (document.getElementById(id).style.visibility == "hidden" ){
      document.getElementById(id).style.visibility = "visible";
      document.getElementById(id).style.display = "table-row";
}
  else  {document.getElementById(id).style.visibility = "hidden"; 
        document.getElementById(id).style.display = "none";
} 
}
</script> 

            <div class="box-header">
              @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
                 <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Matricule</th>
    <th>Marque</th>
    <th>Type</th>
    <th>Auto école</th>
    <th>Moniteur</th>
       <th with="140px" class="text-center">
    <!-- <a href="{{url('/create_auto_ecole')}}" class="btn btn-success btn-sm">
      <i class="glyphicon glyphicon-plus"></i></a>-->
<button  class="btn btn-success btn-sm"  data-toggle="modal" data-url="{{url('/create_administrateur')}}"  data-target="#custom-width-modald"> <i class="glyphicon glyphicon-plus"></i></button>
        </th>

                </tr>
                </thead>
                <tbody>





    <div id="custom-width-modald" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Vehicule</h4></center>
                </div>
<form action="/proj_auto_ecole/public/admin/store_vehicule/{{$id1}}" method="POST" class="remove-record-model">

                <div class="modal-body">
                    <h4>
  
      {{ csrf_field() }}
    <div class="input-group date"><div class="input-group-addon" >
        Matricule
          </div>
          <input type="text" name="Matricule" class="form-control pull-right"  value="{{old('Matricule')}}">   </div>
   
            @if ($errors->has('Matricule'))
                                   
                {{ $errors->first('Matricule') }}
                                   
                 @endif
   
      <div class="input-group date"><div class="input-group-addon">
      Marque
        </div>
      <input type="text" name="Marque" class="form-control pull-right" value="{{old('Marque')}}"></div>
        
            @if ($errors->has('Marque'))
                                   
                    {{ $errors->first('Marque') }}
                                   
                @endif

                 <div class="input-group date"><div class="input-group-addon">
              Type

        </div>
      <input type="text" name="Type" class="form-control pull-right" value="{{old('Type')}}"></div>
        
            @if ($errors->has('Type'))
                                   
                    {{ $errors->first('Type') }}
                                   
                @endif
 
     <div class="input-group date"><div class="input-group-addon"> 
Moniteur</div>
<SELECT NAME="moniteur" onChange='Choix(this.form)'>

@foreach($list as $l)

<OPTION value="{{$l->id}}">{{$l->Nom}} {{$l->Prenom}} </OPTION>
@endforeach

</SELECT></div>
       
            @if ($errors->has('moniteur'))
                                   
                    <strong>{{ $errors->first('moniteur') }}</strong><br>
                                   
                 @endif
                       <div> 
          

    </body> 
</html>

  
                <div class="modal-footer">
                  <input type="submit" class="btn btn-primary" name="submit" value="Add">
                    
                </div>             
             </div>
</form>

        </div>
    </div>
  </h4>
</div>









                    @foreach ($Vehicule as $key => $value)








  
    




      <tr>
        <td>{{$value->Matricule}}</td>
        <td>{{ $value->Marque}}</td>
        <td>{{ $value->Type }}</td>
        <td>{{ $value->Nom1 }}</td>
        <td>{{ $value->Nom }} {{ $value->Prenom}}</td>

     
       
     <td>
           

               <button  class="btn btn-info btn-sm"  data-toggle="modal" data-url="" data-id="{{$value->id}}" data-target="#custom-width-modala2{{$value->Matricule}}"> <i class="glyphicon glyphicon-zoom-in"></i></button>

 
   <a onclick="bascule('edit/{{$value->Matricule}}');" class="btn btn-success btn-sm">
                     <i class="glyphicon glyphicon-pencil"></i></a>

               <button class="btn btn-danger btn-sm" data-toggle="modal" data-url="" data-id="{{$value->id}}" data-target="#custom-width-modalc{{$value->Matricule}}"><i class="glyphicon glyphicon-trash"></i></button>
   <a class="btn btn-success btn-sm" href='/proj_auto_ecole/public/admin/Alerte_Vidange/{{$value->Matricule}}/{{$id1}}'>
              <i class="glyphicon glyphicon-file"></i></a>
              <a class="btn btn-warning btn-sm"  href='/proj_auto_ecole/public/admin/Alerte_V/{{$value->Matricule}}/{{$id1}}'>
              <i class="glyphicon glyphicon-list-alt"></i></a>
   <a class="btn btn-success btn-sm" href='/proj_auto_ecole/public/admin/Alerte_A/{{$value->Matricule}}/{{$id1}}'>
              <i class="glyphicon glyphicon-file"></i></a>
         

        </td>
</tr>



                <!-- Delete Model -->
    <div id="custom-width-modalc{{$value->Matricule}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Confirmation de suppression</h4>
                </div>
   <form action="/proj_auto_ecole/public/admin/destroy_vehicule/{{ $value->Matricule}}/ff/{{$id1}}" method="DELETE" data-parsley-validate>

                <div class="modal-body">
                    <h4>Voulez-vous vraiment supprimer ce vehicule?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Fermer</button>
                    <button type="submit" style="display: inline;"  class="btn btn-danger waves-effect waves-light">Supprimer</button>

                </div>
            </div>
  {!! Form::close() !!}

        </div>
    </div>
  
    <div id="custom-width-modala2{{$value->Matricule}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Véhicule</h4></center>
                </div>
<form action="" method="POST" class="remove-record-model">

                <div class="modal-body">
                    <h4>
   
      
       <div> <strong>Matricule : </strong> 
    
         {{ $value->Matricule}} <br><br>
       </div>  
    
      <div> <strong>Marque : </strong> 
    
         {{ $value->Marque}} <br><br>
       </div>  
        <div><strong>Type : </strong> 
    
            {{ $value->Type}}<br><br></div>
        
        <strong>Auto école : </strong>
   
            {{ $value->Nom1}}<br><br>

   <strong>Moniteur : </strong>
   
            {{ $value->Nom}} {{ $value->Prenom}}<br><br>

</h4>
                </div>
                <div class="modal-footer">
                  
                    
                </div>
            </div>
</form>

        </div>
    </div>



<tr id="edit/{{$value->Matricule}}" style="visibility: hidden; display:none;">

                  <form action="/proj_auto_ecole/public/admin/update_vehicule/{{$value->Matricule}}/ff/{{$id1}}" method="POST" >
                 {{ csrf_field() }}
{{ method_field('PATCH') }}
                    <!-- /.form group -->
<th>

                  </th>
                  <th><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-cab"></i>
                  </div><input type="text" name="Marque" class="form-control pull-right" value="{{$value->Marque}}"></div>
                 @if ($errors->has('Marque'))
                                   
                    <strong class="help-block">{{ $errors->first('Marque') }}</strong><br>
                                   
                 @endif
                  
                </th>

                  <th><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-cab"></i>
                  </div><input type="text" name="Type" class="form-control pull-right" value="{{$value->Type}}"></div>
                 @if ($errors->has('Type'))
                                   
                    <strong class="help-block">{{ $errors->first('Type') }}</strong><br>
                                   
                 @endif
                  
               
<th></th><th></th>



                  
                      <th><input type="submit" class="btn btn-primary" name="submit" value="Modifier">
                  </th>
                </form>
                </tr>

    @endforeach   

              </tbody>
            
              </table>
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
  </div>



@endsection



@section('script')
<script type="text/javascript">
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection