@extends('layouts.app')
@section('content')

    
    	<form action="/proj_auto_ecole/public/update_candidat/{{ $candidat->id}}" method="POST" data-parsley-validate>
{{ csrf_field() }}
{{ method_field('PATCH') }}
<center>
	<h1>Modifier {{$candidat->Nom}} {{$candidat->Prenom}}</h1>
	
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
				  <input type="text" name="Nom" value="{{$candidat->Nom}}"><br>
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
			Prenom
		    </td>
				
			<td>
			<input type="text" name="Prenom" value="{{$candidat->Prenom}}"><br>
		    </td>
		</tr>
	    <tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Prenom'))
                                   
                    <strong class="help-block">{{ $errors->first('Prenom') }}</strong><br>
                                   
                @endif
               </td>
		    <tr>
		<tr>
			<td>	
  			Date naissance
            </td>
            <td>    	
			<input type="date" name="Date_nais" value="{{$candidat->Date_nais}}"><br>
		    </td>
		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Date_nais'))
                                   
                    <strong class="help-block">{{ $errors->first('Date_nais') }}</strong><br>
                                   
                 @endif
               </td>
		<tr>
		
		
		<tr>
			<td>
				Sexe
    		</td>
			<td>
				@if($candidat->Sexe=='Femme')
				  <input type="radio" name="Sexe" value="Homme" >H
				<input type="radio" name="Sexe" value="Femme" checked>F
				
				@else
					  <input type="radio" name="Sexe" value="Homme" checked>H
				<input type="radio" name="Sexe" value="Femme">F
			
@endif
  
  <br>
		    </td>
			
		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Sexe'))
                                   
                    <strong class="help-block">{{ $errors->first('Sexe') }}</strong><br>
                                   
                 @endif
               </td>
		<tr>
		<tr>
			<td>
				Adresse
    		</td>
			<td>
				<input type="text" name="Adresse" value="{{$candidat->Adresse}}"><br>
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
				Email
    		</td>
			<td>
			<input type="text" name="Email" value="{{$candidat->Email}}"><br>
		    </td>

		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Email'))
                                   
                    <strong class="help-block">{{ $errors->first('Email') }}</strong><br>
                                   
                 @endif
               </td>
		<tr>
		<tr>
			<td>
	    	Mot de passe
    		</td>
			<td>
				<input type="password" name="Mot_de_passe" value="{{$candidat->Mot_de_passe}}"><br>
		    </td>
			  
		</tr>	
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Mot_de_passe'))
                                   
                    <strong class="help-block">{{ $errors->first('Mot_de_passe') }}</strong><br>
                                   
                 @endif
               </td>
		<tr>
		<tr>
			<td>
					 Confirm mot de passe
    		</td>
			<td>
			  <input type="password" name="Confirm_mot_de_passe" id="Confirm_mot_de_passe" value="{{$candidat->Mot_de_passe}}"><br>
		    </td>			
		</tr>
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('Confirm_mot_de_passe'))
                                   
                    <strong class="help-block">{{ $errors->first('Confirm_mot_de_passe') }}</strong><br>
                                   
                 @endif
               </td>
		<tr>		
        <tr>
			<td>
			Photo
    		</td>
			<td>
				<input type="file" name="Photo"  value="{{$candidat->Photo}}"><br>
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
			<input type="submit" class="btn btn-primary" name="submit" value="Add">
		</td>
		</tr>
			
		

		
	</table>
	</center>
</form>	

@endsection