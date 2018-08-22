{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Date_present', 'Date_present:') }}
			{{ Form::text('Date_present') }}
		</li>
		<li>
			{{ Form::label('Date_prochain', 'Date_prochain:') }}
			{{ Form::text('Date_prochain') }}
		</li>
		<li>
			{{ Form::label('Description', 'Description:') }}
			{{ Form::text('Description') }}
		</li>
		<li>
			{{ Form::label('Type', 'Type:') }}
			{{ Form::text('Type') }}
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