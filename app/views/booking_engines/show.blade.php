@extends('layouts.scaffold')

@section('main')

<h1>Show Booking_engine</h1>

<p>{{ link_to_route('booking_engines.index', 'Return to All booking_engines', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
				<th>Code</th>
				<th>Url</th>
				<th>Method</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $booking_engine->name }}}</td>
					<td>{{{ $booking_engine->code }}}</td>
					<td>{{{ $booking_engine->url }}}</td>
					<td>{{{ $booking_engine->method }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('booking_engines.destroy', $booking_engine->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('booking_engines.edit', 'Edit', array($booking_engine->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
