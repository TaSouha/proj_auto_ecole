
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

          
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Employées</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li  class="active"><a href="/proj_auto_ecole/public/administrateur"><i class="fa fa-circle-o"></i> Administrateurs </a></li>
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
        Administrateurs
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Acceuil </a></li>
        <li class="active">Administrateurs</li>
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
    <th>Prenom</th>
    <th>Adresse</th>
    <th>Date naissance</th>
    <th>Sexe</th>
    <th>Email</th>
    <th>Auto école</th>
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
                    <h4 class="modal-title" id="custom-width-modalLabel">Administrateur</h4></center>
                </div>
                <form action="/proj_auto_ecole/public/store_administrateur" method="POST" class="remove-record-model">
                <div class="modal-body">
                    <h4>
  
      {{ csrf_field() }}
    <div class="input-group date"><div class="input-group-addon" >
        Nom
          </div>
          <input type="text" name="Nom" class="form-control pull-right"  value="{{old('Nom')}}">   </div>
   
            @if ($errors->has('Nom'))
                                   
                {{ $errors->first('Nom') }}
                                   
                 @endif
   
      <div class="input-group date"><div class="input-group-addon">
      Prenom
        </div>
      <input type="text" name="Prenom" class="form-control pull-right" value="{{old('Prenom')}}"></div>
        
            @if ($errors->has('Prenom'))
                                   
                    {{ $errors->first('Prenom') }}
                                   
                @endif

                 <div class="input-group date"><div class="input-group-addon">
              Date naissance

        </div>
      <input type="date" name="Date_nais" class="form-control pull-right" value="{{old('Date_nais')}}"></div>
        
            @if ($errors->has('Date_nais'))
                                   
                    {{ $errors->first('Date_nais') }}
                                   
                @endif
 
    <div class="input-group date"><div class="input-group-addon">
         
        Sexe
        </div>
          <input type="radio" name="Sexe" value="Homme" checked>H
        

  <input type="radio" name="Sexe" value="Femme">F
 </div>
       
            @if ($errors->has('Sexe'))
                                   
                    {{ $errors->first('Sexe') }}
                                   
                 @endif

  <div class="input-group date"><div class="input-group-addon">
      
        Adresse
     </div>
        <input type="text" name="Adresse" class="form-control pull-right" value="{{old('Adresse')}}"> </div>
       
            @if ($errors->has('Adresse'))
                                   
                  {{ $errors->first('Adresse') }}
                                   
                 @endif
     
  <div class="input-group date"><div class="input-group-addon">
        Email
       </div>
      <input type="email" name="email" class="form-control pull-right" value="{{old('email')}}"> </div>
       
            @if ($errors->has('email'))
                                   
                {{ $errors->first('email') }}
                                   
                 @endif

    
  <div class="input-group date"><div class="input-group-addon">
        Mot de passe
    </div>
        <input type="password" name="password" class="form-control pull-right" ></div>
        
            @if ($errors->has('password'))
                                   
            {{ $errors->first('password') }}
                                   
                 @endif

  <div class="input-group date"><div class="input-group-addon">
     
           Confirm mot de passe
       </div>
        <input type="password" name="Confirm_mot_de_passe" id="Confirm_mot_de_passe" class="form-control pull-right"></div>
      
            @if ($errors->has('Confirm_mot_de_passe'))
                                   
                    {{ $errors->first('Confirm_mot_de_passe') }}
                                   
                 @endif
    
     
  <div class="input-group date"><div class="input-group-addon"> 
      Photo
     </div>
        <input type="file" name="Photo" class="form-control pull-right" value="{{old('Photo')}}"></div>
        
            @if ($errors->has('Photo'))
                                   
                {{ $errors->first('Photo') }}
                                   
                 @endif
 <div class="input-group date"><div class="input-group-addon"> 
  Auto école</div>
<SELECT name="auto_ecole" size="1">

@foreach($list as $l)
<OPTION value="{{$l->Nom}}">{{$l->Nom}}</OPTION>
@endforeach
</SELECT></div>
       
            @if ($errors->has('auto_ecole'))
                                   
                    <strong>{{ $errors->first('auto_ecole') }}</strong><br>
                                   
                 @endif

  
                <div class="modal-footer">
                  <input type="submit" class="btn btn-primary" name="submit" value="Add">
                    
                </div>             
             </div>
</form>

        </div>
    </div>
  </h4>
</div>









                    @foreach ($Administrateur as $key => $value)


                <!-- Delete Model -->

    <div id="custom-width-modalc{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Confirmation de suppression</h4>
                </div>
                {!! Form::open(['method' => 'DELETE','url' => ['destroy_administrateur', $value->id],'style'=>'display:inline']) !!}
                <div class="modal-body">
                    <h4>Voulez-vous vraiment supprimer ce admin?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Fermer</button>
                    <button type="submit" style="display: inline;"  class="btn btn-danger waves-effect waves-light">Supprimer</button>

                </div>
            </div>
  {!! Form::close() !!}
        </div>
    </div>





<form action="/proj_auto_ecole/public/show_administrateur/{{$value->id}}" method="POST" class="remove-record-model">
    <div id="custom-width-modala2{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Administrateur</h4></center>
                </div>
                <div class="modal-body">
                    <h4>
   
      
       <div> <strong>Photo : </strong> 
    
         {{ $value->Photo}} <br><br>
       </div>  
    
      <div> <strong>Nom : </strong> 
    
         {{ $value->Nom}} <br><br>
       </div>  
        <div><strong>Prenom : </strong> 
    
            {{ $value->Prenom}}<br><br></div>
        
        <strong>Date naissance : </strong>
   
            {{ $value->Date_nais}}<br><br>

   <strong>Sexe : </strong>
   
            {{ $value->Sexe}}<br><br>
<strong>Adresse : </strong>
   
            {{ $value->Adresse}}<br><br>
<strong>Email : </strong>
   
            {{ $value->email}}<br><br>
<strong>Mot de passe : </strong>
   
            {{ $value->password}}<br><br>
            <strong>Auto école : </strong>
   
            {{ $value->Nom1}}<br><br>
        
</h4>
                </div>
                <div class="modal-footer">
                  
                    
                </div>
            </div>
        </div>
    </div>
</form>





    <div id="custom-width-modalb5{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Administrateur</h4></center>
                </div>
                <form action="/proj_auto_ecole/public/update_administrateur/{{$value->id}}" method="POST" class="remove-record-model">
                <div class="modal-body">
                    <h4>
  
      {{ csrf_field() }}
{{ method_field('PATCH') }}

    <div class="input-group date"><div class="input-group-addon" >
        Nom
          </div>
          <input type="text" name="Nom" class="form-control pull-right"  value="{{$value->Nom}}">   </div>
   
            @if ($errors->has('Nom'))
                                   
                {{ $errors->first('Nom') }}
                                   
                 @endif
   
      <div class="input-group date"><div class="input-group-addon">
      Prenom
        </div>
      <input type="text" name="Prenom" class="form-control pull-right" value="{{$value->Prenom}}"></div>
        
            @if ($errors->has('Prenom'))
                                   
                    {{ $errors->first('Prenom') }}
                                   
                @endif

                 <div class="input-group date"><div class="input-group-addon">
              Date naissance

        </div>
      <input type="date" name="Date_nais" class="form-control pull-right" value="{{$value->Date_nais}}"></div>
        
            @if ($errors->has('Date_nais'))
                                   
                    {{ $errors->first('Date_nais') }}
                                   
                @endif
 
    <div class="input-group date"><div class="input-group-addon">
         
        Sexe
        </div>
        @if($value->Sexe=='Femme')
          <input type="radio" name="Sexe" value="Homme" >H
        <input type="radio" name="Sexe" value="Femme" checked>F
        
        @else
            <input type="radio" name="Sexe" value="Homme" checked>H
        <input type="radio" name="Sexe" value="Femme">F
      
@endif
 </div>
       
            @if ($errors->has('Sexe'))
                                   
                    {{ $errors->first('Sexe') }}
                                   
                 @endif

  <div class="input-group date"><div class="input-group-addon">
      
        Adresse
     </div>
        <input type="text" name="Adresse" class="form-control pull-right" value="{{$value->Adresse}}"> </div>
       
            @if ($errors->has('Adresse'))
                                   
                  {{ $errors->first('Adresse') }}
                                   
                 @endif
     
  <div class="input-group date"><div class="input-group-addon">
        Email
       </div>
      <input type="text" name="email" class="form-control pull-right" value="{{$value->email}}"> </div>
       
            @if ($errors->has('email'))
                                   
                {{ $errors->first('email') }}
                                   
                 @endif

    
  <div class="input-group date"><div class="input-group-addon">
        Mot de passe
    </div>
        <input type="password" name="password" class="form-control pull-right" value="{{$value->password}}"></div>
        
            @if ($errors->has('password'))
                                   
            {{ $errors->first('password') }}
                                   
                 @endif

  <div class="input-group date"><div class="input-group-addon">
     
           Confirm mot de passe
       </div>
        <input type="password" name="Confirm_mot_de_passe" id="Confirm_mot_de_passe" class="form-control pull-right" value="{{$value->password}}"></div>
      
            @if ($errors->has('Confirm_mot_de_passe'))
                                   
                    {{ $errors->first('Confirm_mot_de_passe') }}
                                   
                 @endif
    
     
  <div class="input-group date"><div class="input-group-addon"> 
      Photo
     </div>
        <input type="file" name="Photo" class="form-control pull-right" value="{{$value->Photo}}"></div>
        
            @if ($errors->has('Photo'))
                                   
                {{ $errors->first('Photo') }}
                                   
                 @endif

                <div class="modal-footer">
                  <input type="submit" class="btn btn-primary" name="submit" value="Modifier">
                    
                </div>   
                </div>  
                </h4>
                </form>        
             </div>
        </div>
    </div>












  
    




      <tr>
        <td>{{$value->Nom}}</td>
        <td>{{ $value->Prenom }}</td>
        <td>{{ $value->Adresse }}</td>
        <td>{{ $value->Date_nais }}</td>
        <td>{{ $value->Sexe }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->Nom1 }}</td>
     
      
     <td>
           

               <button  class="btn btn-info btn-sm"  data-toggle="modal" data-url="{{url('/show_administrateur', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modala2{{$value->id}}"> <i class="glyphicon glyphicon-zoom-in"></i></button>

 

                      <button  class="btn btn-success btn-sm"  data-toggle="modal" data-url="{{url('/edit_administrateur', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modalb5{{$value->id}}"> <i class="glyphicon glyphicon-pencil"></i></button>

               <button class="btn btn-danger btn-sm" data-toggle="modal" data-url="{{url('/destroy_administrateur', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modalc{{$value->id}}"><i class="glyphicon glyphicon-trash"></i></button>

         

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

