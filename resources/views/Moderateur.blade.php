{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Nom', 'Nom:') }}
			{{ Form::text('Nom') }}
		</li>
		<li>
			{{ Form::label('Prenom', 'Prenom:') }}
			{{ Form::text('Prenom') }}
		</li>
		<li>
			{{ Form::label('Email', 'Email:') }}
			{{ Form::text('Email') }}
		</li>
		<li>
			{{ Form::label('Mot_de_passe', 'Mot_de_passe:') }}
			{{ Form::text('Mot_de_passe') }}
		</li>
		<li>
			{{ Form::label('Photo', 'Photo:') }}
			{{ Form::text('Photo') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}