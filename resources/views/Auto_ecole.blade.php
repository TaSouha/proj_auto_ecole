{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Nom', 'Nom:') }}
			{{ Form::text('Nom') }}
		</li>
		<li>
			{{ Form::label('Lieu', 'Lieu:') }}
			{{ Form::text('Lieu') }}
		</li>
		<li>
			{{ Form::label('Adresse', 'Adresse:') }}
			{{ Form::text('Adresse') }}
		</li>
		<li>
			{{ Form::label('Photo', 'Photo:') }}
			{{ Form::text('Photo') }}
		</li>
		<li>
			{{ Form::label('Description', 'Description:') }}
			{{ Form::text('Description') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}