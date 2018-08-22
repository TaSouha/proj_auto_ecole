{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Matricule', 'Matricule:') }}
			{{ Form::text('Matricule') }}
		</li>
		<li>
			{{ Form::label('Marque', 'Marque:') }}
			{{ Form::text('Marque') }}
		</li>
		<li>
			{{ Form::label('Type', 'Type:') }}
			{{ Form::text('Type') }}
		</li>
		<li>
			{{ Form::label('id_Auto_ecole', 'Id_Auto_ecole:') }}
			{{ Form::text('id_Auto_ecole') }}
		</li>
		<li>
			{{ Form::label('id_moniteur', 'Id_moniteur:') }}
			{{ Form::text('id_moniteur') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}