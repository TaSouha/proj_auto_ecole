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
         <li ><a href="/proj_auto_ecole/public/auto_ecole"><i class="fa fa-home"></i> <span>Auto écoles</span></a></li>
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
        <li class="active treeview"><a href="/proj_auto_ecole/public/vehicule"><i class=" fa fa-automobile"></i> <span>Véhicules</span></a></li>
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
       Alerte de {{$Vehicule->Matricule}}   </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Acceuil </a></li>
        <li class="active">Véhicules</li><li class="active">Alerte de vidange</li>
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
            <!-- /.box-header -->
             <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
    <th>Date présent </th>
    <th>Date prochain</th>
<th>Description</th>
    <th with="140px" class="text-center">
   
       <a onclick="bascule('create');" class="btn btn-success btn-sm">
         <i class="glyphicon glyphicon-plus"></i>
        </th>
     

                </tr>
                </thead>
                <tbody>
                  
    @foreach ($alerte as $key => $value)
     

<!-- Delete Model -->
    <div id="custom-width-modalb{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Confirmation de suppression</h4>
                </div>
{!! Form::open(['method' => 'DELETE','url' => ['destroy_alerte_v', $value->id],'style'=>'display:inline']) !!}

                <div class="modal-body">
                    <h4>Voulez-vous vraiment supprimer cette alerte?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Fermer</button>
                    <button type="submit" style="display: inline;"  class="btn btn-danger waves-effect waves-light">Supprimer</button>

                </div>
            </div>
  {!! Form::close() !!}

        </div>
    </div>

                
    <div id="custom-width-modala2{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Alerte de visite</h4><center>
                </div>
<form action="" method="POST" class="remove-record-model">

                <div class="modal-body">
                  <h4>
                      <strong>Véhicule : </strong>
   
            {{ $Vehicule->Matricule}}<br><br>
   <strong>Date présent : </strong>
   
            {{ $value->Date_present}}<br><br>
        <strong>Date prochain : </strong>
   
            {{ $value->Date_prochain}}<br><br>
    
   
            <strong>Description : </strong> 
   
            {{ $value->Description }}<br><br>
     
            
    
</h4>
                </div>
                <div class="modal-footer">
                  
                    
                </div>
            </div>
</form>

        </div>
    </div>



      <tr >
        <td>{{$value->Date_present}}</td>
        <td>{{ $value->Date_prochain }}</td>
         <td>{{ $value->Description }}</td>


     <td>
           <button  class="btn btn-info btn-sm"  data-toggle="modal" data-url="" data-id="{{$value->id}}" data-target="#custom-width-modala2{{$value->id}}"> <i class="glyphicon glyphicon-zoom-in"></i></button>
         <!-- <a class="btn btn-primary btn-sm" href="{{url('/edit_depense', $value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>-->
                     <a onclick="bascule('edit/{{$value->id}}');" class="btn btn-success btn-sm">
                     <i class="glyphicon glyphicon-pencil"></i></a>
          
             <button class="btn btn-danger btn-sm" data-toggle="modal" data-url="{{url('/destroy_alerte_vidange', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modalb{{$value->id}}"><i class="glyphicon glyphicon-trash"></i></button>
              
        </td>
      </tr>

                <tr id="edit/{{$value->id}}" style="visibility: hidden; display:none;">

                  <form action="/proj_auto_ecole/public/update_alerte_v/{{$value->id}}" method="POST" >
                 {{ csrf_field() }}
{{ method_field('PATCH') }}
                    <!-- /.form group --></th>
                  <th><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-calendar-times-o"></i>
                  </div><input type="date" name="Date_present" class="form-control pull-right" value="{{$value->Date_present}}"></div>
                 @if ($errors->has('Date_present'))
                                   
                    <strong class="help-block">{{ $errors->first('Date_present') }}</strong><br>
                                   
                 @endif
                  
                </th>

                  <th><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-calendar-times-o"></i>
                  </div><input type="date" name="Date_prochain" class="form-control pull-right" value="{{$value->Date_prochain}}"></div>
                 @if ($errors->has('Date_prochain'))
                                   
                    <strong class="help-block">{{ $errors->first('Date_prochain') }}</strong><br>
                                   
                 @endif
                  
                </th>
  <th><textarea name="Description" class="form-control pull-right" value="{{old('Description')}}">{{$value->Description}}</textarea>
                       @if ($errors->has('Description'))
                                   
                    <strong class="help-block">{{ $errors->first('Description') }}</strong><br>
                                   
                 @endif</th>


                  
                      <th><input type="submit" class="btn btn-primary" name="submit" value="Modifier">
                  </th>
                </form>
                </tr>
                 

           
    
    @endforeach   


                </tbody>
                <thead>
                   <tr id="create" style="visibility: hidden; display:none;">

                  <form action="/proj_auto_ecole/public/store_alerte_v/{{$Vehicule->Matricule}}" method="POST" >
                    {{ csrf_field() }}
                    <!-- /.form group --></th>
                  <th><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-calendar-times-o"></i>
                  </div><input type="date" name="Date_present" class="form-control pull-right" value="{{old('Date_present')}}"></div>
                 @if ($errors->has('Date_present'))
                                   
                    <strong class="help-block">{{ $errors->first('Date_present') }}</strong><br>
                                   
                 @endif
                  
                </th>

                  <th><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-calendar-times-o"></i>
                  </div><input type="date" name="Date_prochain" class="form-control pull-right" value="{{old('Date_prochain')}}"></div>
                 @if ($errors->has('Date_prochain'))
                                   
                    <strong class="help-block">{{ $errors->first('Date_prochain') }}</strong><br>
                                   
                 @endif
                  
                </th>
                
                  <th><textarea name="Description" class="form-control pull-right" value="{{old('Description')}}">{{old('Description')}}</textarea>
                       @if ($errors->has('Description'))
                                   
                    <strong class="help-block">{{ $errors->first('Description') }}</strong><br>
                                   
                 @endif</th>

          
                   
                      <th><input type="submit" class="btn btn-primary" name="submit" value="Ajouter">
                  </th>
                </form>
                </tr>

               



              

                </thead>
              </table>


    <a class="btn btn-primary btn-sm" href="{{url('/vehicule')}}">
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



