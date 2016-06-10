@extends('layouts.scaffold')

@section('main')

<h1>Show Booking_engine_detail</h1>

<p>{{ link_to_route('booking_engine_details.index', 'Return to All booking_engine_details', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Hotel_id</th>
				<th>Setting_id</th>
				<th>Param_name</th>
				<th>Param_value</th>
				<th>Is_static</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $booking_engine_detail->hotel_id }}}</td>
					<td>{{{ $booking_engine_detail->setting_id }}}</td>
					<td>{{{ $booking_engine_detail->param_name }}}</td>
					<td>{{{ $booking_engine_detail->param_value }}}</td>
					<td>{{{ $booking_engine_detail->is_static }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('booking_engine_details.destroy', $booking_engine_detail->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('booking_engine_details.edit', 'Edit', array($booking_engine_detail->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
