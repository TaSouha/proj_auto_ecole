
@extends('layouts.moderateur')
@section('profile')
 <div class="pull-left">
                  <a href="/proj_auto_ecole/public/admin/Profile/{{$id}}"class="btn btn-default btn-flat">Profile</a>
                </div>
@endsection


@section('content')

  <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
       <li class="active">
          <a href="/proj_auto_ecole/public/moniteur/Accueil/{{$id}}">
            <i class="fa fa-dashboard"></i> <span>Accueil</span>
         
          </a>
         
        </li>
  
           <li ><a href="/proj_auto_ecole/public/moniteur/Auto_ecole/{{$id}}"><i class="fa fa-home"></i> Auto-école </a></li>

      
   
        <li ><a href="/proj_auto_ecole/public/moniteur/Candidat/{{$id}}"><i class="fa fa-user"></i> <span>Candidats</span></a></li>

        <li class="treeview">
           <a href="#">
            <i class="fa fa-automobile"></i>
            <span>Véhicule</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
     
               <li><a href="/proj_auto_ecole/public/moniteur/Vehicule/{{$id}}"><i class=" fa fa-circle-o"></i> <span>Info</span></a></li>
               <li><a href="/proj_auto_ecole/public/moniteur/Alerte_Vidange/{{$id}}"><i class=" fa fa-circle-o"></i> <span>Alerte de vidange</span></a></li>
               <li><a href="/proj_auto_ecole/public/moniteur/Alerte_V/{{$id}}"><i class=" fa fa-circle-o"></i> <span>Alerte de visite</span></a></li>
               <li><a href="/proj_auto_ecole/public/moniteur/Alerte_A/{{$id}}"><i class=" fa fa-circle-o"></i> <span>Alerte d'assurance </span></a></li>

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
     
              <li><a href="/proj_auto_ecole/public/moniteur/Plan_Seance_Pratique/{{$id}}"><i class=" fa fa-circle-o"></i> <span>Plan des séances</span></a></li>
              <li><a href="/proj_auto_ecole/public/moniteur/Active_Seance_Pratique/{{$id}}"><i class=" fa fa-circle-o"></i> <span>Les séances validées</span></a></li>
              <li><a href="/proj_auto_ecole/public/moniteur/Non_active_Seance_Pratique/{{$id}}"><i class=" fa fa-circle-o"></i> <span>Les séances en attente</span></a></li>
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
Accueil
        <small> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
     
      </ol>
    </section>

      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$active}}</h3>

              <p>Séances Pratique actives</p>
            </div>
            <div class="icon">
             <i class="fa fa-book"></i>
            </div>
            <a href="/proj_auto_ecole/public/moniteur/Active_Seance_Pratique/{{$id}}" class="small-box-footer">Plus info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$attente}}<sup style="font-size: 20px"></sup></h3>

              <p>Séances Pratique en attentes</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="/proj_auto_ecole/public/moniteur/Non_active_Seance_Pratique/{{$id}}" class="small-box-footer">Plus info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$candidat}}</h3>

              <p>Séances Pratiques non actives</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="/proj_auto_ecole/public/moniteur/Plan_Seance_Pratique/{{$id}} " class="small-box-footer">Plus info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$vehicule}}</h3>

              <p>Vehicules</p>
            </div>
            <div class="icon">
              <i class="fa  fa-automobile"></i>
            </div>
            <a href="/proj_auto_ecole/public/moniteur/Vehicule/{{$id}} " class="small-box-footer">Plus info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
<div class="col-md-6">
          <!-- Info Boxes Style 2 -->

<!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Les nouvelles séances pratiques en attentes</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                



                    @foreach ($veh as $key => $value)


                <li class="item">
                  <div class="product-img">
                    <img src="{{URL::asset('dist/img/default-50x50.gif')}}" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{$value->Date}}
                      <span class="label label-warning pull-right">{{$value->Etat}}</span></a>
                    <span class="product-description">
                         
                       De  {{$value->Debut}} à {{$value->Fin}}
                        </span>
                      
                  </div>
                </li>
                 @endforeach   
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="/proj_auto_ecole/public/moniteur/Non_active_Seance_Pratique/{{$id}}" class="uppercase">Voir tous les séances en attentes</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
     </div>


            <div class="col-md-6">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Derniers candidats</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">nouveaux candidats</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    
                  
                    @foreach ($cand as $key => $value)


                    <li>
                      <img src="{{URL::asset('dist/img/user1-128x128.jpg')}}" alt="User Image">
                      <a class="users-list-name" href="#">{{$value->Nom}}{{$value->Prenom}}</a>
                      <span class="users-list-date">{{$ecole}}</span>
                    </li>
                   @endforeach
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="/proj_auto_ecole/public/moniteur/Candidat/{{$id}} " class="uppercase">Voir tous les candidats</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
      

           </div>
         </div>


      


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