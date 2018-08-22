{{ Form::open(array('route' => 'personne.index', 'method' => 'POST')) }}
<form action="store" method="POST">
<center>
	<h1>Inscription</h1>

	<table> 
		<tr>
			<td>
				{{ Form::label('Nom', 'Nom') }}
            </td>
            <td>
			{{ Form::text('Nom') }}<br>
		    </td>
		</tr>
		<tr>
		    <td>
			{{ Form::label('Prenom', 'Prenom') }}
		    </td>
				
			<td>
			{{ Form::text('Prenom') }}<br>
		    </td>
		</tr>
	
		<tr>
			<td>	
  			{{ Form::label('Date_nais', 'Date naissance') }}
            </td>
            <td>    	
			{{ Form::text('Date_nais') }}<br>
		    </td>
		</tr>
		
		<!--<tr>
			<td>
				{{ Form::label('Sexe', 'Sexe') }}
			</td>
			<td>
				  <input type="radio" name="gender" value="Homme" checked> H <br>
			
				<input type="radio" name="gender" value="femme"> F <br>
			</td>
		</tr> -->
		<tr>
			<td>
				{{ Form::label('Sexe', 'Sexe') }}
    		</td>
			<td>
				{{ Form::text('Sexe') }}<br>
		    </td>
			
		</tr>
		<tr>
			<td>
				{{ Form::label('Adresse', 'Adresse') }}
    		</td>
			<td>
				{{ Form::text('Adresse') }}<br>
		    </td>
			
		</tr>
			
        <tr>
			<td>
					{{ Form::label('Email', 'Email') }}
    		</td>
			<td>
				{{ Form::text('Email') }}<br>
		    </td>
			
		</tr>
	
		<tr>
			<td>
					{{ Form::label('Mot_de_passe', 'Mot de passe') }}
    		</td>
			<td>
				{{ Form::text('Mot_de_passe') }}<br>
		    </td>
			
		</tr>	
		<tr>
			<td>
					 Confirm mot de passe
    		</td>
			<td>
			  <input type="text" name="Confirm_mot_de_passe" id="Confirm_mot_de_passe"><br>
		    </td>			
		</tr>		
        <tr>
			<td>
			{{ Form::label('Photo', 'Photo') }}
    		</td>
			<td>
				{{ Form::text('Photo') }}<br>
		    </td>
			
		</tr>	
	<!--	<tr>
			<td>
			Auto école
    		</td>
			<td>
				<FORM>
<SELECT name="Auto école" size="1">
<OPTION>lundi
<OPTION>mardi
<OPTION>mercredi
<OPTION>jeudi
<OPTION>vendredi
</SELECT>
</FORM><br>
		    </td>
			
		</tr> -->	
			
	<tr>
		<td></td>
		<td>{{ Form::submit() }}</td>
		</tr>
			
		

		
	</table>
	
	</center>
	</form>
{{ Form::close() }}