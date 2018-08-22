@extends('layouts.app')
@section('content')
<center>
<table>
    <tr>
        <td>
            <h2> Dépense </h2> 
        </td>
    
    </tr>
    <tr>
    <td>
            <strong>Auto école: </strong> <br><br>
    </td>
    <td>
         {{ $auto_ecole->Nom}} <br><br>
    </td>
    </tr>
    <tr>
    <td>
            <strong>Date opération : </strong> <br><br>
    </td>
    <td>
            {{ $depense->Date}}<br><br>
    </td>
    </tr>
   <tr>
    <td>
            <strong>Montant : </strong> <br><br>
    </td>
    <td>
            {{ $depense->Montant}}<br><br>
    </td>
    </tr>
    <tr>
    <td>
            <strong>Mode de paiement : </strong> <br><br>
    </td>
    <td>
            {{ $depense->Mode_paiement}}<br><br>
    </td>
    </tr>
     
    <tr>
    <td>
            <strong>Désignations : </strong> <br><br>
    </td>
    <td>
            {{ $depense->Designations }}<br><br>
    </td>
    </tr>

    
        <tr>
    <td>    

                
             <a class="btn btn-primary btn-sm" href="{{url('/index_depense', $auto_ecole->id)}}">
             <i class="glyphicon glyphicon-arrow-left"></i></a>
</td>

    <td>

    </td>
    </tr>
</table>
</center>
@endsection