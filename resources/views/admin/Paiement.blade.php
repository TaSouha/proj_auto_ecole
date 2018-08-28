
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
          <a href="/proj_auto_ecole/public/index_accueil">
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
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/proj_auto_ecole/public/administrateur"><i class="fa fa-circle-o"></i> Administrateurs </a></li>
            <li><a href="/proj_auto_ecole/public/moniteur"><i class="fa fa-circle-o"></i> Moniteurs </a></li>
            <li><a href="/proj_auto_ecole/public/formateur"><i class="fa fa-circle-o"></i> Formateurs </a></li>
            
          </ul>
        </li>
        <li class="active treeview"><a href="/proj_auto_ecole/public/candidat"><i class="fa fa-user"></i> <span>Candidats</span></a></li>
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
       Paiements de {{$candidat->Nom}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Acceuil </a></li>
            <li class="active">Candidats</li>
        <li class="active">Paiements</li>
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
            </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>                 <th>Date opération</th>
    <th>Montant</th>
    <th>Designation</th>


       <th with="140px" class="text-center"> 
        <a onclick="bascule('create');" class="btn btn-success btn-sm">
         <i class="glyphicon glyphicon-plus"></i>
        </th>

                </tr>
                </thead>
                <tbody>













                    @foreach ($Paiement as $key => $value)
                <!-- Delete Model -->
    <div id="custom-width-modala{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Confirmation de suppression</h4>
                </div>
   <form action="/proj_auto_ecole/public/admin/destroy_paiement/{{ $value->id}}/ff/{{$id1}}" method="DELETE" data-parsley-validate>

                <div class="modal-body">
                    <h4>Voulez-vous vraiment supprimer ce paiement?</h4>
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
    <div id="custom-width-modalb{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Paiement</h4><center>
                </div>
                <div class="modal-body">
                  <h4>
   
      
             <div><strong>Auto école :</strong>
                    {{ $auto_ecole->Nom}} <br><br></div>
              
      
             <div><strong>Nom :</strong>
                    {{ $candidat->Nom}} <br><br></div>
    
              

        <div><strong>Montant : </strong> 
    
           {{ $value->Montant}}<br><br></div>
              
       
        <strong>Date d'opération : </strong>
   
            {{ $value->Date_ope}}<br><br>
    
   
            <strong>Désignations : </strong> 
   
            {{ $value->Designations }}<br><br>
    
</h4>
                </div>
                <div class="modal-footer">
                  
                    
                </div>
            </div>
        </div>
    </div>
</form>
  
    




      <tr>
                <td>{{$value->Date_ope}}</td>
        <td>{{ $value->Montant }}</td>
        <td>{{ $value->Designations }}</td>
       

     
      
     <td>
           

               <button  class="btn btn-info btn-sm"  data-toggle="modal" data-url="{{url('/show_paiement', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modalb{{$value->id}}"> <i class="glyphicon glyphicon-zoom-in"></i></button>

 
                 <a onclick="bascule('edit/{{$value->id}}');" class="btn btn-success btn-sm">
                     <i class="glyphicon glyphicon-pencil"></i></a>

               <button class="btn btn-danger btn-sm" data-toggle="modal" data-url="{{url('/destroy_paiement', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modala{{$value->id}}"><i class="glyphicon glyphicon-trash"></i></button>

        
        </td>
      </td>


</tr>

<form action="/proj_auto_ecole/public/admin/update_paiement/{{ $value->id}}/ff/{{$id1}}" method="POST" data-parsley-validate>
                <tr id="edit/{{$value->id}}" style="visibility: hidden; display:none;">

          
{{ csrf_field() }}
{{ method_field('PATCH') }}
                    <td>    <!-- Date -->
                   {{$newDate}}
             
              <!-- /.form group --></td>
                  <td><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-dollar"></i>
                  </div><input type="text" name="Montant" class="form-control pull-right" value="{{$value->Montant}}"></div>
                 @if ($errors->has('Montant'))
                                   
                    <strong class="help-block">{{ $errors->first('Montant') }}</strong><br>
                                   
                 @endif
                  
                </td>


                   
                  
                  <td><textarea type="text" name="Designations" class="form-control pull-right" value="{{$value->Designations}}" >{{$value->Designations}}</textarea>
                       @if ($errors->has('Designations'))
                                   
                    <strong class="help-block">{{ $errors->first('Designations') }}</strong><br>
                                   
                 @endif</td>
                  <td><input type="submit" class="btn btn-primary" name="submit" value="Modifier">
                  </td>
                </tr>
                </form>

    @endforeach   
           
                </tbody>
               <thead>
                  <tr id="create" style="visibility: hidden; display:none;">

                  <form action="/proj_auto_ecole/public/admin/store_paiement/{{$id}}/{{$id1}}" method="POST" >
                    {{ csrf_field() }}
                    <th>    <!-- Date -->

                      {{$newDate}}
           
             
              <!-- /.form group --></th>
                  <th><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-dollar"></i>
                  </div><input type="text" name="Montant" class="form-control pull-right" value="{{old('Montant')}}"></div>
                 @if ($errors->has('Montant'))
                                   
                    <strong class="help-block">{{ $errors->first('Montant') }}</strong><br>
                                   
                 @endif
                  
                </th>


   <th><textarea name="Designations" class="form-control pull-right" value="{{old('Designations')}}">{{old('Designations')}}</textarea>
                       @if ($errors->has('Designations'))
                                   
                    <strong class="help-block">{{ $errors->first('Designations') }}</strong><br>
                                   
                 @endif</th>
                  
                  <th><input type="submit" class="btn btn-primary" name="submit" value="Ajouter">
                  </th>
                </form>
                </tr>
               </thead> 
              </table>


  </center>

  </form>


            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->

  <a class="btn btn-primary btn-sm" href='/proj_auto_ecole/public/admin/Candidat/{{$id1}}'">

             <i class="glyphicon glyphicon-arrow-left"></i></a>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->





@endsection


