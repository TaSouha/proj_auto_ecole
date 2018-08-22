@extends('layouts.moderateur')
@section('content')

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
       <li >
          <a href="/proj_auto_ecole/public/index_accueil">
            <i class="fa fa-dashboard"></i> <span>Accueil</span>
         
          </a>
         
        </li>
         <li class="active treeview"><a href="/proj_auto_ecole/public/auto_ecole"><i class="fa fa-home"></i> <span>Auto écoles</span></a></li>
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
        <li><a href="/proj_auto_ecole/public/candidat"><i class="fa fa-user"></i> <span>Candidats</span></a></li>
        <li><a href="/proj_auto_ecole/public/vehicule"><i class=" fa fa-automobile"></i> <span>Véhicules</span></a></li>
       <li><a href="#"><i class=" fa fa-book"></i> <span>Cours</span></a></li>
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
       Recette de {{$auto_ecole->Nom}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Acceuil </a></li>
        <li class="active">Auto écoles</li><li class="active">Recettes</li>
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
              <table id="example2" class="table table-bordered table-striped">
                <thead>
              <tr>
    
    
    <th>Date </th>
    <th>Montant </th>
    <th>Mode de paiement </th>
<th> Designations</th>


  <!--  <th with="140px" class="text-center">
     <a href="{{url('/create_recette',$id)}}" class="btn btn-success btn-sm">
      <i class="glyphicon glyphicon-plus"></i></a>
        </th>-->
 <th>
       <a onclick="bascule('create');" class="btn btn-success btn-sm">
         <i class="glyphicon glyphicon-plus"></i>
        </th>
     

                </tr>
                </thead>
                <tbody>
                  
    @foreach ($recette as $key => $value)
     

<form action="" method="POST" class="remove-record-model">
    <div id="custom-width-modala{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Recette</h4><center>
                </div>
                <div class="modal-body">
                  <h4>
   
      
       
 
        <div><strong>Date opération : </strong> 
    
            {{ $value->Date}}<br><br></div>
              
    
            <strong>Montant : </strong>
   
            {{ $value->Montant}}<br><br>
        <strong>Mode de paiement : </strong>
   
            {{ $value->Mode_paiement}}<br><br>
    
   
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

<!-- Delete Model -->
    <div id="custom-width-modalb{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Confirmation de suppression</h4>
                </div>

{!! Form::open(['method' => 'DELETE','url' => ['destroy_recette', $value->id],'style'=>'display:inline']) !!}
                <div class="modal-body">
                    <h4>Voulez-vous vraiment supprimer cette dépense?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Fermer</button>
                    <button type="submit" style="display: inline;"  class="btn btn-danger waves-effect waves-light">Supprimer</button>

                </div>
            </div>
  {!! Form::close() !!}

        </div>
    </div>




      <tr >
             <td>{{$value->Date}}</td>
        <td>{{ $value->Montant }}</td>
         <td>{{ $value->Mode_paiement }}</td>
        <td>{{ $value->Designations }}</td>
       
     <td>


           <button  class="btn btn-info btn-sm"  data-toggle="modal" data-url="{{url('/destroy_recette', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modala{{$value->id}}"> <i class="glyphicon glyphicon-zoom-in"></i></button>
         <!-- <a class="btn btn-primary btn-sm" href="{{url('/edit_depense', $value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>-->
                     <a onclick="bascule('edit/{{$value->id}}');" class="btn btn-success btn-sm">
                     <i class="glyphicon glyphicon-pencil"></i></a>
          
             <button class="btn btn-danger btn-sm" data-toggle="modal" data-url="{{url('/destroy_recette', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modalb{{$value->id}}"><i class="glyphicon glyphicon-trash"></i></button>
            </td>  
      
      </tr>
   <tr id="edit/{{$value->id}}"  style="visibility: hidden; display:none;">
               <form action="/proj_auto_ecole/public/update_recette/{{ $value->id}}" method="POST" data-parsley-validate>
             

          
{{ csrf_field() }}
{{ method_field('PATCH') }}
                    <td>    <!-- Date -->
               Date d'aujordhui
                
             
              <!-- /.form group --></td>
                  <td><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-dollar"></i>
                  </div><input type="text" name="Montant" class="form-control pull-right" value="{{$value->Montant}}"></div>
                 @if ($errors->has('Montant'))
                                   
                    <strong class="help-block">{{ $errors->first('Montant') }}</strong><br>
                                   
                 @endif
                  
                </td>




                   <td><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-dollar"></i>
                  </div><input type="text" name="Mode_paiement" class="form-control pull-right"value="{{$value->Mode_paiement}}"></div>
                         @if ($errors->has('Mode_paiement'))
                                   
                    <strong class="help-block">{{ $errors->first('Mode_paiement') }}</strong><br>
                                   
                 @endif
                </td>
                   
                  
                  <td><textarea type="text" name="Designations" class="form-control pull-right" value="{{$value->Designations}}" >{{$value->Designations}}</textarea>
                       @if ($errors->has('Designations'))
                                   
                    <strong class="help-block">{{ $errors->first('Designations') }}</strong><br>
                                   
                 @endif</td>
                  <td><input type="submit" class="btn btn-primary" name="submit" value="Modifier">
                  </td>
                </form>
                </tr>
    
    @endforeach   

                </tbody>
                <thead>
                  
                <tr id="create"  style="visibility: hidden; display:none;">

                  <form action="/proj_auto_ecole/public/store_recette/{{$id}}" method="POST" >
                    {{ csrf_field() }}
                    <th>    <!-- Date -->


                    Date d'aujordhui
           
             
              <!-- /.form group --></th>
                  <th><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-dollar"></i>
                  </div><input type="text" name="Montant" class="form-control pull-right" value="{{old('Montant')}}"></div>
                 @if ($errors->has('Montant'))
                                   
                    <strong class="help-block">{{ $errors->first('Montant') }}</strong><br>
                                   
                 @endif
                  
                </th>




                   <th><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-dollar"></i>
                  </div><input type="text" name="Mode_paiement" class="form-control pull-right"value="{{old('Mode_paiement')}}"></div>
                         @if ($errors->has('Mode_paiement'))
                                   
                    <strong class="help-block">{{ $errors->first('Mode_paiement') }}</strong><br>
                                   
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


    <a class="btn btn-primary btn-sm" href="{{url('/index_auto_ecole')}}">
             <i class="glyphicon glyphicon-arrow-left"></i></a>

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


