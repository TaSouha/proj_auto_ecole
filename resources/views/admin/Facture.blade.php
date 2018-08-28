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
          <li class="treeview active">
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Facture
        <small>#00{{$facture->id}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil </a></li>
        <li><a href="#">Candidats</a></li>
        <li class="active">Facture</li>
      </ol>
    </section>

  

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> 
            <small class="pull-right">Date: {{$newDate}}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          De
          <address>
            <strong>{{$auto_ecole->Nom}}</strong><br>
            {{$auto_ecole->Lieu}}<br>
            {{$auto_ecole->Adresse}}<br>
          
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          à
          <address>
            <strong>{{$personne->Nom}} {{$personne->Prenom}}</strong><br>
            {{$personne->Adresse}}<br>
            {{$personne->email}}
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Facture #00{{$facture->id}}</b><br>
          <br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
            <th>Date opération</th>
    <th>Montant</th>
    <th>Designation</th>

            </tr>
            </thead>
            <tbody>
              
    @foreach ($paiement as $key => $value)
      <tr>
        <td>{{$value->Date_ope}}</td>
        <td>{{ $value->Montant }}</td>
        <td>{{ $value->Designations }}</td>
       
       <td>
   
      </tr>
    @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
         
           <tr><a href="{{url('/index_paiement',$id)}} class="btn btn-success btn-sm"> ajouter des paiements</a></tr>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Facture {{$newDate}}</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Montant payé: </th>
                <td>{{$facture->Montant_paye}}</td>
              </tr>
              <tr>
                <th> Mentant restant: </th>
                <td>{{$facture->Montant_rest}}</td>
              </tr>
              <tr>
                <th>Montant totale:</th>
                <td>{{$facture->Montant}}</td>
              </tr>

            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimer </a>
        
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Générer PDF
          </button>
        </div>
      </div>

    </section>

    <a class="btn btn-primary btn-sm" href='/proj_auto_ecole/public/admin/Candidat/{{$id1}}'">
             <i class="glyphicon glyphicon-arrow-left"></i></a>

    <!-- /.content -->
    <div class="clearfix"> </div>
  </div>
 


@endsection

