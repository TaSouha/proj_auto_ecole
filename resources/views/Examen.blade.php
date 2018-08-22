{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Date_dec', 'Date_dec:') }}
			{{ Form::text('Date_dec') }}
		</li>
		<li>
			{{ Form::label('Date_exa', 'Date_exa:') }}
			{{ Form::text('Date_exa') }}
		</li>
		<li>
			{{ Form::label('Resultat', 'Resultat:') }}
			{{ Form::text('Resultat') }}
		</li>
		<li>
			{{ Form::label('Type_Exa', 'Type_Exa:') }}
			{{ Form::text('Type_Exa') }}
		</li>
		<li>
			{{ Form::label('id_Candidat', 'Id_Candidat:') }}
			{{ Form::text('id_Candidat') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}