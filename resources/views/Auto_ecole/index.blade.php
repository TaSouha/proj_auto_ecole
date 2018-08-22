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
        Auto écoles
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Acceuil </a></li>
        <li class="active">Auto écoles</li>
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
                <tr>
                          <th>Nom</th>
    <th>Lieu</th>
    <th>Adresse</th>
    <th>Déscription</th>
    <th with="140px" class="text-center">
    <!-- <a href="{{url('/create_auto_ecole')}}" class="btn btn-success btn-sm">
      <i class="glyphicon glyphicon-plus"></i></a>-->
<button  class="btn btn-success btn-sm"  data-toggle="modal" data-url="{{url('/create_auto_ecole')}}"  data-target="#custom-width-modalah"> <i class="glyphicon glyphicon-plus"></i></button>

        </th>
                </tr>
                </thead>
                <tbody>
               
   



                    @foreach ($Auto_ecole as $key => $value)





    <div id="custom-width-modalah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:30%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Auto_ecole</h4><center>
                </div>

 <form action="/proj_auto_ecole/public/store_auto_ecole" method="POST" class="remove-record-model">
                <div class="modal-body">
                <center>    <h4>
   
      
       
    {{ csrf_field() }}
 <div class="input-group date"><div class="input-group-addon">
                    Photo
                  </div><input type="file" name="Photo" class="form-control pull-right" value="{{old('Photo')}}">                 @if ($errors->has('Photo'))
                                   
                    {{ $errors->first('Photo') }}<br>
                                   
                 @endif
</div>
                    
                  <div class="input-group date"><div class="input-group-addon">
                    Nom
                  </div><input type="text" name="Nom" class="form-control pull-right" value="{{old('Nom')}}">
                 @if ($errors->has('Nom'))
                                   
                {{ $errors->first('Nom') }}                                   
                 @endif
               </div>
               <div class="input-group date"><div class="input-group-addon">
                    Lieu
                  </div><input type="text" name="Lieu" class="form-control pull-right" value="{{old('Lieu')}}">
                         @if ($errors->has('Lieu'))
                                   
                  {{ $errors->first('Lieu') }}
                                   
                 @endif
                </div>
                    <div class="input-group date"><div class="input-group-addon">
                   Adresse
                  </div><input type="text" name="Adresse" class="form-control pull-right" value="{{old('Adresse')}}">
                         @if ($errors->has('Adresse'))
                                   
                  {{ $errors->first('Adresse') }}
                                   
                 @endif
  </div>
                   <div class="input-group date"><div class="input-group-addon">
                      Nombre max des candidats
                  </div><input type="text" name="Nbre_candidat" class="form-control pull-right" value="{{old('Nbre_candidat')}}">
                         @if ($errors->has('Nbre_candidat'))
                                   
                    {{ $errors->first('Nbre_candidat') }}
                                   
                 @endif
                  </div>
                  <div class="input-group date"><div class="input-group-addon">
                   Nombre max des formateurs
                  </div><input type="text" name="Nbre_formateur" class="form-control pull-right" value="{{old('Nbre_formateur')}}">
                         @if ($errors->has('Nbre_formateur'))
                                   
                {{ $errors->first('Nbre_formateur') }}
                                   
                 @endif
</div>

                  <div class="input-group date"><div class="input-group-addon">
                    Nombre max des moniteurs
                  </div><input type="text" name="Nbre_moniteur" class="form-control pull-right" value="{{old('Nbre_moniteur')}}">
                         @if ($errors->has('Nbre_moniteur'))
                                   
                    {{ $errors->first('Nbre_moniteur') }}
                                   
                 @endif
               </div>
               <div class="input-group date"><div class="input-group-addon">
                   Description
                  </div>
                   <textarea type="text" name="Description" class="form-control pull-right" value="{{old('Description')}}" ></textarea>
                       @if ($errors->has('Description'))
                                   
                    {{ $errors->first('Description') }}
                                   
                 @endif
                </div>
                 </h4> 
             </center>
           </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="submit" value="Ajouter">
                    
                </div>

            </div>
            </form>
            
        </div>
    </div>









                 <!-- Delete Model -->

    <div id="custom-width-modald{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Confirmation de suppression</h4>
                </div>
                {!! Form::open(['method' => 'DELETE','url' => ['destroy_auto_ecole', $value->id],'style'=>'display:inline']) !!}
                <div class="modal-body">
                    <h4>Voulez-vous vraiment supprimer cette auto école?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Fermer</button>
                    <button type="submit" style="display: inline;"  class="btn btn-danger waves-effect waves-light">Supprimer</button>

                </div>
            </div>
  {!! Form::close() !!}
        </div>
    </div>

 


<form action="/proj_auto_ecole/public/show_auto_ecole/{{$value->id}}" method="POST" class="remove-record-model">
    <div id="custom-width-modalc{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Auto_ecole</h4></center>
                </div>
                <div class="modal-body">
                    <h4>
   
      
       
    
      <div> <strong>Photo : </strong> 
    
         {{ $value->Photo}} <br><br>
       </div>  
        <div><strong>Nom : </strong> 
    
            {{ $value->Nom}}<br><br></div>
              
    
            <strong>Lieu : </strong>
   
            {{ $value->Lieu}}<br><br>
        <strong>Description : </strong>
   
            {{ $value->Description}}<br><br>

   <strong>Nombre max des candidats : </strong>
   
            {{ $value->Nbre_candidat}}<br><br>
<strong>Nombre max des formateurs : </strong>
   
            {{ $value->Nbre_formateur}}<br><br>
<strong>Nombre max des moniteurs : </strong>
   
            {{ $value->Nbre_formateur}}<br><br>

        
</h4>
                </div>
                <div class="modal-footer">
                  
                    
                </div>
            </div>
        </div>
    </div>
</form>


    <div id="custom-width-modalb{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Auto_ecole</h4><center>
                </div>
                <form action="/proj_auto_ecole/public/update_auto_ecole/{{$value->id}}" method="POST" class="remove-record-model">
                <div class="modal-body">
                <center>    <h4>
   
      
       
    {{ csrf_field() }}
{{ method_field('PATCH') }}
 <div class="input-group date"><div class="input-group-addon">
                    Photo
                  </div><input type="file" name="Photo" class="form-control pull-right" value="{{$value->Nom}}"></div>
                 @if ($errors->has('Photo'))
                                   
                    <strong class="help-block">{{ $errors->first('Photo') }}</strong><br>
                                   
                 @endif

                    
                  <div class="input-group date"><div class="input-group-addon">
                    Nom
                  </div><input type="text" name="Nom" class="form-control pull-right" value="{{$value->Nom}}"></div>
                 @if ($errors->has('Nom'))
                                   
                    <strong class="help-block">{{ $errors->first('Nom') }}</strong><br>
                                   
                 @endif
                  
          




               <div class="input-group date"><div class="input-group-addon">
                    Lieu
                  </div><input type="text" name="Lieu" class="form-control pull-right"value="{{$value->Lieu}}"></div>
                         @if ($errors->has('Lieu'))
                                   
                    <strong class="help-block">{{ $errors->first('Lieu') }}</strong><br>
                                   
                 @endif
                
                    <div class="input-group date"><div class="input-group-addon">
                   Adresse
                  </div><input type="text" name="Adresse" class="form-control pull-right"value="{{$value->Adresse}}"></div>
                         @if ($errors->has('Adresse'))
                                   
                    <strong class="help-block">{{ $errors->first('Adresse') }}</strong><br>
                                   
                 @endif
  
                   <div class="input-group date"><div class="input-group-addon">
                      Nombre max des candidats
                  </div><input type="text" name="Nbre_candidat" class="form-control pull-right"value="{{$value->Nbre_candidat}}"></div>
                         @if ($errors->has('Nbre_candidat'))
                                   
                    <strong class="help-block">{{ $errors->first('Nbre_candidat') }}</strong><br>
                                   
                 @endif
                  
                  <div class="input-group date"><div class="input-group-addon">
                   Nombre max des formateurs
                  </div><input type="text" name="Nbre_formateur" class="form-control pull-right"value="{{$value->Nbre_candidat}}"></div>
                         @if ($errors->has('Nbre_formateur'))
                                   
                    <strong class="help-block">{{ $errors->first('Nbre_formateur') }}</strong><br>
                                   
                 @endif


                  <div class="input-group date"><div class="input-group-addon">
                    Nombre max des moniteurs
                  </div><input type="text" name="Nbre_moniteur" class="form-control pull-right"value="{{$value->Nbre_moniteur}}"></div>
                         @if ($errors->has('Nbre_moniteur'))
                                   
                    <strong class="help-block">{{ $errors->first('Nbre_moniteur') }}</strong><br>
                                   
                 @endif
               <div class="input-group date"><div class="input-group-addon">
                   Description
                  </div>
                   <textarea type="text" name="Description" class="form-control pull-right" value="{{$value->Description}}" >{{$value->Description}}</textarea></div>
                       @if ($errors->has('Description'))
                                   
                    <strong class="help-block">{{ $errors->first('Description') }}</strong><br>
                                   
                 @endif
</h4></center></div>                
                  
             
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="submit" value="Modifier">
                    
                </div>
              </div>
              </form>

            </div>
        </div>
    </div>


   


      <tr>
        <td>{{$value->Nom}}</td>
        <td>{{ $value->Lieu }}</td>
        <td>{{ $value->Adresse }}</td>
        <td>{{ $value->Description }}</td>

      
     <td>
           

               <button  class="btn btn-info btn-sm"  data-toggle="modal" data-url="{{url('/show_auto_ecole', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modalc{{$value->id}}"> <i class="glyphicon glyphicon-zoom-in"></i></button>

 

                      <button  class="btn btn-success btn-sm"  data-toggle="modal" data-url="{{url('/edit_auto_ecole', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modalb{{$value->id}}"> <i class="glyphicon glyphicon-pencil"></i></button>

               <button class="btn btn-danger btn-sm" data-toggle="modal" data-url="{{url('/destroy_auto_ecole', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modald{{$value->id}}"><i class="glyphicon glyphicon-trash"></i></button>

             <a class="btn btn-success btn-sm" href="{{url('/index_depense',$value->id)}}">
              <i class="glyphicon glyphicon-file"></i></a>
              <a class="btn btn-warning btn-sm" href="{{url('/index_recette',$value->id)}}" >
              <i class="glyphicon glyphicon-list-alt"></i></a>
        </td>
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


