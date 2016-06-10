@extends('layouts.scaffold')

@section('main')

<h1>Show Booking_engine_setting</h1>

<p>{{ link_to_route('booking_engine_settings.index', 'Return to All booking_engine_settings', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Hotel_id</th>
				<th>Engine_id</th>
				<th>Prefix</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $booking_engine_setting->hotel_id }}}</td>
					<td>{{{ $booking_engine_setting->engine_id }}}</td>
					<td>{{{ $booking_engine_setting->prefix }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('booking_engine_settings.destroy', $booking_engine_setting->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('booking_engine_settings.edit', 'Edit', array($booking_engine_setting->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
