@extends('layouts.app')
@section('content')

    
    	<form action="/proj_auto_ecole/public/update_paiement/{{ $paiement->id}}" method="POST" data-parsley-validate>
{{ csrf_field() }}
{{ method_field('PATCH') }}
<center>
	<h1>Paiement {{ $candidat->Nom}} {{ $candidat->Prenom}}</h1>
	
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
	<table> 

		<tr>

			<td>
				Montant :
            </td>
            <td>
				  <input type="text" name="Montant" value="{{$paiement->Montant}}"><br>
		    </td>
		</tr>
			<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Montant'))
                                   
                    <strong class="help-block">{{ $errors->first('Montant') }}</strong><br>
                                   
                 @endif
               </td>
		    <tr>
		    <td>
			Désignations :
		    </td>
				
			<td>
			<input type="text" name="Designations" value="{{$paiement->Designations}}"><br>
		    </td>
		</tr>
	    <tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Designations'))
                                   
                    <strong class="help-block">{{ $errors->first('Designations') }}</strong><br>
                                   
                @endif
               </td>
		    <tr>			
	<tr>
		<td></td>
		<td>
			<input type="submit" class="btn btn-primary" name="submit" value="Modifier">
		</td>
		</tr>
			
		

		
	</table>
	</center>
</form>	

@endsection