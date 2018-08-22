{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Type', 'Type:') }}
			{{ Form::text('Type') }}
		</li>
		<li>
			{{ Form::label('id_Auto_ecole', 'Id_Auto_ecole:') }}
			{{ Form::text('id_Auto_ecole') }}
		</li>
		<li>
			{{ Form::label('id_Personne', 'Id_Personne:') }}
			{{ Form::text('id_Personne') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}