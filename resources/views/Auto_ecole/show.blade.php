@extends('layouts.app')
@section('content')
<center>
<table>
    <tr>
        <td>
            <h2> Auto école </h2> 
        </td>
    
    </tr>
     <tr>
    <td>
            <strong>Photo : </strong> <br><br>
    </td>
    <td>
            {{ $auto_ecole->Photo}}<br><br>
    </td>
    </tr>
   <tr>
    <td>
            <strong>Nom : </strong> <br><br>
    </td>
    <td>
            {{ $auto_ecole->Nom}}<br><br>
    </td>
    </tr>
    <tr>
    <td>
            <strong>Lieu : </strong> <br><br>
    </td>
    <td>
            {{ $auto_ecole->Lieu}}<br><br>
    </td>
    </tr>
     
    <tr>
    <td>
            <strong>Adresse : </strong> <br><br>
    </td>
    <td>
            {{ $auto_ecole->Adresse}}<br><br>
    </td>
    </tr>
    <tr>
    <td>
            <strong>Description</strong> <br><br>
    </td>
    <td>
            {{ $auto_ecole->Description}}<br><br>
    </td>
    </tr>       
    <tr>
    <td>
            <strong>Nombre max des candidats : </strong> <br><br>
    </td>
    <td>
            {{ $parametrage->Nbre_candidat}}<br><br>
    </td>
    </tr>
    <tr>
    <td>
            <strong>Nombre max des formateurs</strong> <br><br>
    </td>
    <td>
            {{ $parametrage->Nbre_formateur}}<br><br>
    </td>
    </tr>  
      <tr>
    <td>
            <strong>Nombre max des moniteurs</strong> <br><br>
    </td>
    <td>
            {{ $parametrage->Nbre_moniteur}}<br><br>
    </td>
    </tr>  
   
   
        <tr>
    <td>    
    
            <a class="btn btn-primary" href="{{url('/index_auto_ecole') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
        </td>
    </td>
    <td>
    
    </td>
    </tr>
</table>
</center>
@endsection