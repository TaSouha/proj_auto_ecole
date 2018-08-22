@extends('layouts.app')
@section('content')
<form action="/proj_auto_ecole/public/store_candidat" method="POST">
<center>
	<h1>Ajouter un candidat</h1>
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
	<table> 

		<tr>
			{{ csrf_field() }}
			<td>
				Nom
            </td>
            <td>
				  <input type="text" name="Nom" value="{{old('Nom')}}"><br>
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
			<input type="text" name="Prenom"><br>
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
			<input type="date" name="Date_nais"><br>
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
				  <input type="radio" name="Sexe" value="Homme" checked>H
				

  <input type="radio" name="Sexe" value="Femme">F
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
		<tr>	
        <tr>
			<td>
				Email
    		</td>
			<td>
			<input type="text" name="Email"><br>
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
				<input type="password" name="Mot_de_passe"><br>
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
			  <input type="password" name="Confirm_mot_de_passe" id="Confirm_mot_de_passe"><br>
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
		<tr>	
	<tr>
			<td>
			Auto école
    		</td>
			<td>
				<FORM>
<SELECT name="auto_ecole" size="1">

@foreach($list as $l)
<OPTION value="{{$l->Nom}}">{{$l->Nom}}</option>
@endforeach
</SELECT>
</FORM><br>
		    </td>
			
		</tr> 
		<tr>
			  <td></td>
		      <td>
		        @if ($errors->has('auto_ecole'))
                                   
                    <strong>{{ $errors->first('auto_ecole') }}</strong><br>
                                   
                 @endif
               </td>
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