{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Kilometrage_actuel', 'Kilometrage_actuel:') }}
			{{ Form::text('Kilometrage_actuel') }}
		</li>
		<li>
			{{ Form::label('Kilometrage', 'Kilometrage:') }}
			{{ Form::text('Kilometrage') }}
		</li>
		<li>
			{{ Form::label('Type_d_huile', 'Type_d_huile:') }}
			{{ Form::text('Type_d_huile') }}
		</li>
		<li>
			{{ Form::label('Type_d_filtre', 'Type_d_filtre:') }}
			{{ Form::text('Type_d_filtre') }}
		</li>
		<li>
			{{ Form::label('Date_operation', 'Date_operation:') }}
			{{ Form::text('Date_operation') }}
		</li>
		<li>
			{{ Form::label('id_Vehicule', 'Id_Vehicule:') }}
			{{ Form::text('id_Vehicule') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}