@extends('layouts.scaffold')

@section('main')

<h1>Show Offer</h1>

<p>{{ link_to_route('offers.index', 'Return to All offers', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Hotel_id</th>
				<th>Room_id</th>
				<th>Booking_engine_detail_id</th>
				<th>Name</th>
				<th>Description</th>
				<th>Active</th>
				<th>Is_booking_connected</th>
				<th>Is_broken</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $offer->hotel_id }}}</td>
					<td>{{{ $offer->room_id }}}</td>
					<td>{{{ $offer->booking_engine_detail_id }}}</td>
					<td>{{{ $offer->name }}}</td>
					<td>{{{ $offer->description }}}</td>
					<td>{{{ $offer->active }}}</td>
					<td>{{{ $offer->is_booking_connected }}}</td>
					<td>{{{ $offer->is_broken }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('offers.destroy', $offer->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('offers.edit', 'Edit', array($offer->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
