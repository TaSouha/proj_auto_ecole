@extends('layouts.app')
@section('content')
<form action="/proj_auto_ecole/public/store_auto_ecole" method="POST">
<center>
	<h1>Ajouter un candidat</h1>
 
	<table> 

		<tr>
			{{ csrf_field() }}
			<td>
				Nom
            </td>
            <td>
				  <input type="text" name="Nom"><br>
		    </td>
		</tr>
			<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Nom'))
                                   
                    <strong class="help-block">{{ $errors->first('Nom') }}</strong><br>
                                   
                 @endif
               </td>
		    <tr>
		    <td>
			Lieu
		    </td>
				
			<td>
			<input type="text" name="Lieu"><br>
		    </td>
		</tr>
	    <tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Lieu'))
                                   
                    <strong class="help-block">{{ $errors->first('Lieu') }}</strong><br>
                                   
                @endif
               </td>
		    <tr>
		<tr>
			<td>	
  			Adresse
            </td>
            <td>    	
			<input type="text" name="Adresse"><br>
		    </td>
		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Adresse'))
                                   
                    <strong class="help-block">{{ $errors->first('Adresse') }}</strong><br>
                                   
                 @endif
               </td>
		</tr>
		
		
		<tr>
			<td>
				Description
    		</td>
			<td>
				<input type="text" name="Description"><br>
		    </td>
			
		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Description'))
                                   
                    <strong class="help-block">{{ $errors->first('Description') }}</strong><br>
                                   
                 @endif
               </td>
		</tr>	
       
        <tr>
			<td>
			Photo
    		</td>
			<td>
				<input type="file" name="Photo"><br>
		    </td>
			
		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Photo'))
                                   
                    <strong class="help-block">{{ $errors->first('Photo') }}</strong><br>
                                   
                 @endif
               </td>
		</tr>

        <tr>
			<td>
				Nombre max des candidats
    		</td>
			<td>
				<input type="text" name="Nbre_candidat"><br>
		    </td>
			
		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Nbre_candidat'))
                                   
                    <strong class="help-block">{{ $errors->first('Nbre_candidat') }}</strong><br>
                                   
                 @endif
               </td>
		</tr>	
        <tr>
			<td>
				Nombre max des formateurs
    		</td>
			<td>
				<input type="text" name="Nbre_formateur"><br>
		    </td>
			
		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Nbre_formateur'))
                                   
                    <strong class="help-block">{{ $errors->first('Nbre_formateur') }}</strong><br>
                                   
                 @endif
               </td>
		</tr>	
        <tr>
			<td>
				Nombre max des moniteurs
    		</td>
			<td>
				<input type="text" name="Nbre_moniteur"><br>
		    </td>
			
		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Nbre_moniteur'))
                                   
                    <strong class="help-block">{{ $errors->first('Nbre_moniteur') }}</strong><br>
                                   
                 @endif
               </td>
		</tr>	
                   
			
	<tr>
		<td></td>
		<td>
			<input type="submit" class="btn btn-primary" name="submit" value="Add">
		</td>
		</tr>
			
		

		
	</table>
	
	</center>
	</form>
@endsection