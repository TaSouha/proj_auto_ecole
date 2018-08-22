{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Date', 'Date:') }}
			{{ Form::text('Date') }}
		</li>
		<li>
			{{ Form::label('Etat', 'Etat:') }}
			{{ Form::text('Etat') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}