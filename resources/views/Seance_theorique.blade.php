{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Prix', 'Prix:') }}
			{{ Form::text('Prix') }}
		</li>
		<li>
			{{ Form::label('id_formateur', 'Id_formateur:') }}
			{{ Form::text('id_formateur') }}
		</li>
		<li>
			{{ Form::label('id_candidat', 'Id_candidat:') }}
			{{ Form::text('id_candidat') }}
		</li>
		<li>
			{{ Form::label('id_Seance', 'Id_Seance:') }}
			{{ Form::text('id_Seance') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}