{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Montant', 'Montant:') }}
			{{ Form::text('Montant') }}
		</li>
		<li>
			{{ Form::label('Montant_paye', 'Montant_paye:') }}
			{{ Form::text('Montant_paye') }}
		</li>
		<li>
			{{ Form::label('Montant_rest', 'Montant_rest:') }}
			{{ Form::text('Montant_rest') }}
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