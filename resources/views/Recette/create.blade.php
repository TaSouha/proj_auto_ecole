@extends('layouts.app')
@section('content')
<form action="/proj_auto_ecole/public/store_recette/{{$id}}" method="POST">
<center>
	<h1>Ajouter une dépense</h1>
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
	<table> 

		<tr>
			{{ csrf_field() }}
			<td>
				Montant
            </td>
            <td>
				  <input type="text" name="Montant"><br><br>
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
			Mode de paiement
		    </td>
				
			<td>
			<input type="text" name="Mode_paiement"><br><br>
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
			Désignations
		    </td>
				
			<td>
			<input type="text" name="Designations"><br><br>
		    </td>
		</tr>
	    <tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Designations'))
                                   
                    <strong class="help-block">{{ $errors->first('Designations') }}</strong><br>
                                   
                @endif
               </td>
		    </tr>
	
                   
			
	<tr>
		<td></td>
		<td>
			<input type="submit" class="btn btn-primary" name="submit" value="Ajouter">
		</td>
		</tr>
			
		

		
	</table>
	
	</center>
	</form>
@endsection