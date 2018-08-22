{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Date_ope', 'Date_ope:') }}
			{{ Form::text('Date_ope') }}
		</li>
		<li>
			{{ Form::label('Montant', 'Montant:') }}
			{{ Form::text('Montant') }}
		</li>
		<li>
			{{ Form::label('id_Candidat', 'Id_Candidat:') }}
			{{ Form::text('id_Candidat') }}
		</li>
		<li>
			{{ Form::label('Designations', 'Designations:') }}
			{{ Form::text('Designations') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}