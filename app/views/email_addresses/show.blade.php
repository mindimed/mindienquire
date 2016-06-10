@extends('layouts.scaffold')

@section('main')

<h1>Show Email_address</h1>

<p>{{ link_to_route('email_addresses.index', 'Return to All email_addresses', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Hotel_id</th>
				<th>Toccbcc</th>
				<th>Email</th>
				<th>Full_name</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $email_address->hotel_id }}}</td>
					<td>{{{ $email_address->toccbcc }}}</td>
					<td>{{{ $email_address->email }}}</td>
					<td>{{{ $email_address->full_name }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('email_addresses.destroy', $email_address->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('email_addresses.edit', 'Edit', array($email_address->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
