@extends('layouts.app')
@section('content')

    
    	<form action="/proj_auto_ecole/public/update_facture/{{ $candidat->id}}" method="POST" data-parsley-validate>
{{ csrf_field() }}
{{ method_field('PATCH') }}
<center>
	<h1>Facture {{ $candidat->Nom}} {{ $candidat->Prenom}}</h1>
	
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
				  <input type="text" name="Montant" value="{{$facture->Montant}}"><br>
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
			Montant payée :
		    </td>
				
			<td>
			<input type="text" name="Montant_paye" value="{{$facture->Montant_paye}}"><br>
		    </td>
		</tr>
	    <tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Montant_paye'))
                                   
                    <strong class="help-block">{{ $errors->first('Montant_paye') }}</strong><br>
                                   
                @endif
               </td>
		    <tr>
		<tr>
			<td>	
  			Montant restant :
            </td>
            <td>    	
			<input type="text" name="Montant_rest" value="{{$facture->Montant_rest}}"><br>
		    </td>
		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Montant_rest'))
                                   
                    <strong class="help-block">{{ $errors->first('Montant_rest') }}</strong><br>
                                   
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