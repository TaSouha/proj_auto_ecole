
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

        <li class="treeview active">
           <a href="#">
            <i class="fa fa-automobile"></i>
            <span>Véhicule</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
     
               <li  class="active"><a href="/proj_auto_ecole/public/moniteur/Vehicule/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Info</span></a></li>
               <li><a href="/proj_auto_ecole/public/moniteur/Alerte_Vidange/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Alerte de vidange</span></a></li>
               <li><a href="/proj_auto_ecole/public/moniteur/Alerte_V/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Alerte de visite</span></a></li>
               <li><a href="/proj_auto_ecole/public/moniteur/Alerte_A/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Alerte d'assurance </span></a></li>

 </ul>
        </li>
             <li class="treeview">

          <a href="#">
            <i class="fa fa-book"></i>
            <span>Séances pratiques</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
     
              <li><a href="/proj_auto_ecole/public/moniteur/Plan_Seance_Pratique/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Plan des séances</span></a></li>
              <li><a href="/proj_auto_ecole/public/moniteur/Active_Seance_Pratique/{{$id1}}"><i class=" fa fa-circle-o"></i> <span>Les séances validées</span></a></li>
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
Véhicule
        <small> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil </a></li>
        <li class="active">Véhicule</li>
     
      </ol>
    </section>

      

  <div class="row">
      <div class="col-md-6 col-md-offset-4">
        <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border"><center>
              <h3 class="box-title">Véhicule</h3></center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
    

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Matricule :     </label>
              {{$vehicule->Matricule}}"
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Marque :     </label>
                 {{$vehicule->Marque}}
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Type :     </label>
                  {{$vehicule->Type}}
                </div>
                


              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->

      


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
<script type="text/javascript">
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