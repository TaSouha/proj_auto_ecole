@extends('layouts.app')
@section('content')

    
    	<form action="/proj_auto_ecole/public/update_depense/{{ $depense->id}}" method="POST" data-parsley-validate>
{{ csrf_field() }}
{{ method_field('PATCH') }}
<center>
	<h1>Dépense de {{ $auto_ecole->Nom}} </h1>
	
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
				  <input type="text" name="Montant" value="{{$depense->Montant}}"><br>
		    </td>
		</tr>
			<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Montant'))
                                   
                    <strong class="help-block">{{ $errors->first('Montant') }}</strong><br>
                                   
                 @endif
               </td>
		    </tr>
		    <tr>

			<td>
				Mode de paiement :
            </td>
            <td>
				  <input type="text" name="Mode_paiement" value="{{$depense->Mode_paiement}}"><br>
		    </td>
		</tr>
			<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Mode_paiement'))
                                   
                    <strong class="help-block">{{ $errors->first('Mode_paiement') }}</strong><br>
                                   
                 @endif
               </td>
		    </tr>
		    <tr>
		    <td>
			Désignations :
		    </td>
				
			<td>
			<input type="text" name="Designations" value="{{$depense->Designations}}"><br>
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