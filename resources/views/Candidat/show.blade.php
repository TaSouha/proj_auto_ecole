@extends('layouts.app')
@section('content')
<center>
<table>
    <tr>
        <td>
            <h2> Candidat</h2> 
        </td>
    
    </tr>
   <tr>
    <td>
            <strong>Nom : </strong> <br><br>
    </td>
    <td>
            {{ $candidat->Nom}}<br><br>
    </td>
    </tr>
    <tr>
    <td>
            <strong>Prenom : </strong> <br><br>
    </td>
    <td>
            {{ $candidat->Prenom}}<br><br>
    </td>
    </tr>
     
    <tr>
    <td>
            <strong>Date naissance : </strong> <br><br>
    </td>
    <td>
            {{ $candidat->Date_nais}}<br><br>
    </td>
    </tr>
    <tr>
    <td>
            <strong>Sexe</strong> <br><br>
    </td>
    <td>
            {{ $candidat->Sexe}}<br><br>
    </td>
    </tr>       
    <tr>
    <td>
            <strong>Adresse : </strong> <br><br>
    </td>
    <td>
            {{ $candidat->Adresse}}<br><br>
    </td>
    </tr>
    <tr>
    <td>
            <strong>Email : </strong><br><br>
    </td>
    <td>
            {{ $candidat->Email}}<br><br>
    </td>
    </tr>
    <tr>
    <td>    
            <strong>Mot de passe : </strong><br><br>
    </td>
    <td>
            {{ $candidat->Mot_de_passe}}<br><br>
    </td>
    </tr>
    <tr>
    <td>    
            <strong>Auto école : </strong><br><br>
    </td>
    <td>
            {{ $Nom_Auto }}<br><br>
    </td>
    </tr>
        <tr>
    <td>    
    
            <a class="btn btn-primary" href="{{url('/candidat') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
        </td>
    </td>
    <td>
    
    </td>
    </tr>
</table>
</center>
@endsection