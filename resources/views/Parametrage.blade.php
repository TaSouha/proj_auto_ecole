{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Nbre_moniteur', 'Nbre_moniteur:') }}
			{{ Form::text('Nbre_moniteur') }}
		</li>
		<li>
			{{ Form::label('Nbre_candidat', 'Nbre_candidat:') }}
			{{ Form::text('Nbre_candidat') }}
		</li>
		<li>
			{{ Form::label('Nbre_formateur', 'Nbre_formateur:') }}
			{{ Form::text('Nbre_formateur') }}
		</li>
		<li>
			{{ Form::label('id_Auto_ecole', 'Id_Auto_ecole:') }}
			{{ Form::text('id_Auto_ecole') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}