{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Date', 'Date:') }}
			{{ Form::text('Date') }}
		</li>
		<li>
			{{ Form::label('Montant', 'Montant:') }}
			{{ Form::text('Montant') }}
		</li>
		<li>
			{{ Form::label('Mode_paiement', 'Mode_paiement:') }}
			{{ Form::text('Mode_paiement') }}
		</li>
		<li>
			{{ Form::label('Designations', 'Designations:') }}
			{{ Form::text('Designations') }}
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