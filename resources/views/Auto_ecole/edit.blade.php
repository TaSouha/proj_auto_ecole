@extends('layouts.app')
@section('content')

    
    	<form action="/proj_auto_ecole/public/update_auto_ecole/{{ $auto_ecole->id}}" method="POST" data-parsley-validate>
{{ csrf_field() }}
{{ method_field('PATCH') }}
<center>
	<h1>Modifier {{$auto_ecole->Nom}}</h1>
	
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
	<table> 

		<tr>

			<td>
				Nom
            </td>
            <td>
				  <input type="text" name="Nom" value="{{$auto_ecole->Nom}}"><br>
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
			<input type="text" name="Lieu" value="{{$auto_ecole->Lieu}}"><br>
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
			<input type="text" name="Adresse" value="{{$auto_ecole->Adresse}}"><br>
		    </td>
		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Adresse'))
                                   
                    <strong class="help-block">{{ $errors->first('Adresse') }}</strong><br>
                                   
                 @endif
               </td>
		<tr>

		<tr>
			<td>
				Description
    		</td>
			<td>
				<input type="text" name="Description" value="{{$auto_ecole->Description}}"><br>
		    </td>
			
		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Description'))
                                   
                    <strong class="help-block">{{ $errors->first('Description') }}</strong><br>
                                   
                 @endif
               </td>
		<tr>	
        <tr>
			<td>
				Nombre max des candidats
    		</td>
			<td>
			<input type="text" name="Nbre_candidat" value="{{$parametrage->Nbre_candidat}}"><br>
		    </td>

		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Nbre_candidat'))
                                   
                    <strong class="help-block">{{ $errors->first('Nbre_candidat') }}</strong><br>
                                   
                 @endif
               </td>
		<tr>
		<tr>
			<td>
	    	Nombre max des formateurs
    		</td>
			<td>
				<input type="test" name="Nbre_formateur" value="{{$parametrage->Nbre_formateur}}"><br>
		    </td>
			  
		</tr>	
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Nbre_formateur'))
                                   
                    <strong class="help-block">{{ $errors->first('Nbre_formateur') }}</strong><br>
                                   
                 @endif
               </td>
		<tr>
		<tr>
			<td>
					 Nombre max des moniteurs
    		</td>
			<td>
			  <input type="text" name="Nbre_moniteur" id="Nbre_moniteur" value="{{$parametrage->Nbre_moniteur}}"><br>
		    </td>			
		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Nbre_moniteur'))
                                   
                    <strong class="help-block">{{ $errors->first('Nbre_moniteur') }}</strong><br>
                                   
                 @endif
               </td>
		<tr>		
        <tr>
			<td>
			Photo
    		</td>
			<td>
				<input type="file" name="Photo"  value="{{$auto_ecole->Photo}}"><br>
		    </td>
			
		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Photo'))
                                   
                    <strong class="help-block">{{ $errors->first('Photo') }}</strong><br>
                                   
                 @endif
               </td>
		<tr>	
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