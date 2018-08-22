@extends('layouts.app')
@section('content')
<center>
<table>
    <tr>
        <td>
            <h2> Paiement {{ $candidat->Nom}} {{ $candidat->Prenom}}</h2> 
        </td>
    
    </tr>
    <tr>
    <td>
            <strong>Auto école: </strong> <br><br>
    </td>
    <td>
         {{ $auto_ecole->Nom}} 
    </td>
    </tr>
   <tr>
    <td>
            <strong>Montant : </strong> <br><br>
    </td>
    <td>
            {{ $paiement->Montant}}<br><br>
    </td>
    </tr>
    <tr>
    <td>
            <strong>Date opération : </strong> <br><br>
    </td>
    <td>
            {{ $paiement->Date_ope}}<br><br>
    </td>
    </tr>
     
    <tr>
    <td>
            <strong>Désignations : </strong> <br><br>
    </td>
    <td>
            {{ $paiement->Designations }}<br><br>
    </td>
    </tr>
    
        <tr>
    <td>    

                
             <a class="btn btn-primary btn-sm" href="{{url('/index_paiement', $candidat->id)}}">
             <i class="glyphicon glyphicon-arrow-left"></i></a>
</td>

    <td>

    </td>
    </tr>
</table>
</center>
@endsection