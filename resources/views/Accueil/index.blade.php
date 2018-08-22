
@extends('layouts.moderateur')
@section('content')

  <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
       <li class="active">
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
        <li ><a href="/proj_auto_ecole/public/candidat"><i class="fa fa-user"></i> <span>Candidats</span></a></li>
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
              <h3>{{$auto_ecole}}</h3>

              <p>Auto école</p>
            </div>
            <div class="icon">
              <i class="ion ion-home"></i>
            </div>
            <a href="/proj_auto_ecole/public/auto_ecole" class="small-box-footer">Plus info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$administrateur}}<sup style="font-size: 20px"></sup></h3>

              <p>Employées</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="/proj_auto_ecole/public/administrateur" class="small-box-footer">Plus info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$candidat}}</h3>

              <p>Candidats</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="/proj_auto_ecole/public/candidat" class="small-box-footer">Plus info <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="/proj_auto_ecole/public/vehicule" class="small-box-footer">Plus info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
<div class="col-md-6">
          <!-- Info Boxes Style 2 -->

<!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Les nouvelles auto-écoles ajoutées</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                



                    @foreach ($ecole as $key => $value)


                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{$value->Nom}}
                      <span class="label label-warning pull-right">{{$value->Lieu}}</span></a>
                    <span class="product-description">
                          {{$value->Description}}
                        </span>
                  </div>
                </li>
                 @endforeach   
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="/proj_auto_ecole/public/auto_ecole" class="uppercase">Voir tous les auto-écoles</a>
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
                      <img src="dist/img/user1-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">{{$value->Nom}}{{$value->Prenom}}</a>
                      <span class="users-list-date">{{$value->Nom1}}</span>
                    </li>
                   @endforeach
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="/proj_auto_ecole/public/candidat" class="uppercase">Voir tous les candidats</a>
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