{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Titre', 'Titre:') }}
			{{ Form::text('Titre') }}
		</li>
		<li>
			{{ Form::label('Lien', 'Lien:') }}
			{{ Form::text('Lien') }}
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