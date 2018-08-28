
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
        <li  class="active" ><a href="/proj_auto_ecole/public/admin/Candidat/{{$id1}}"><i class="fa fa-user"></i> <span>Candidats</span></a></li>
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
        Candidats
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Acceuil </a></li>
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
                    <h4 class="modal-title" id="custom-width-modalLabel">Candidat</h4></center>
                </div>


<form action="/proj_auto_ecole/public/admin/store_candidat/{{$id1}}" method="POST" class="remove-record-model">
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
      <input type="text" name="email" class="form-control pull-right" value="{{old('email')}}"> </div>
       
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
        <input type="password" name="Confirm_mot_de_passe" class="form-control pull-right"></div>
      
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


  
                <div class="modal-footer">
                  <input type="submit" class="btn btn-primary" name="submit" value="Add">
                    
                </div>             
             </div>
           </h4>
</form>

        </div>
    </div>
</div>









                    @foreach ($Candidat as $key => $value)

                <!-- Delete Model -->

    <div id="custom-width-modala{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Confirmation de suppression</h4>
                </div>
            <form action="/proj_auto_ecole/public/admin/destroy_candidat/{{ $value->id}}/ff/{{$id1}}" method="DELETE" data-parsley-validate>
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




    <div id="custom-width-modalb{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Candidat</h4></center>
                </div>
<form action="/proj_auto_ecole/public/show_candidat/{{$value->id}}" method="POST" class="remove-record-model">

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
</form>

        </div>
    </div>


    <div id="custom-width-modalc{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><center>
                    <h4 class="modal-title" id="custom-width-modalLabel">Candidat</h4></center>
                </div>
<form action="/proj_auto_ecole/public/admin/update_candidat/{{$value->id}}/ff/{{$id1}}" method="POST" class="remove-record-model">

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
        <input type="password" name="Confirm_mot_de_passe" class="form-control pull-right" value="{{$value->password}}"></div>
      
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

  </h4>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-primary" name="submit" value="Add">
                    
                </div>   
                </div>   
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



               <button  class="btn btn-info btn-sm"  data-toggle="modal" data-url="{{url('/show_candidat', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modalb{{$value->id}}"> <i class="glyphicon glyphicon-zoom-in"></i></button>

 

                      <button  class="btn btn-success btn-sm"  data-toggle="modal" data-url="{{url('/edit_candidat', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modalc{{$value->id}}"> <i class="glyphicon glyphicon-pencil"></i></button>

               <button class="btn btn-danger btn-sm" data-toggle="modal" data-url="{{url('/destroy_candidat', $value->id) }}" data-id="{{$value->id}}" data-target="#custom-width-modala{{$value->id}}"><i class="glyphicon glyphicon-trash"></i></button>

           


             <a class="btn btn-success btn-sm" href='/proj_auto_ecole/public/admin/Facture/{{$value->id}}/{{$id1}}'>
              <i class="glyphicon glyphicon-file"></i></a>
               <a class="btn btn-warning btn-sm" href='/proj_auto_ecole/public/admin/Paiement/{{$value->id}}/{{$id1}}'>
              <i class="glyphicon glyphicon-list-alt"></i></a>
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

