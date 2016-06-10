@extends('layouts.scaffold')

@section('main')

<h1>Show Enquire</h1>

<p>{{ link_to_route('enquiries.index', 'Return to All enquiries', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Hotel_id</th>
				<th>Offer_id</th>
				<th>Room_id</th>
				<th>Offer_code</th>
				<th>Room_code</th>
				<th>Quotation_number</th>
				<th>Full_name</th>
				<th>Email</th>
				<th>Phone_number</th>
				<th>Mobile_number</th>
				<th>Address</th>
				<th>City</th>
				<th>Postal_code</th>
				<th>Country</th>
				<th>State</th>
				<th>Region</th>
				<th>Day_in</th>
				<th>Day_out</th>
				<th>Checkin_date</th>
				<th>Quantity</th>
				<th>Adult</th>
				<th>Children</th>
				<th>Infant</th>
				<th>Airport_name</th>
				<th>Airport_location</th>
				<th>Flight_number</th>
				<th>Arrival_time</th>
				<th>Other_transport</th>
				<th>Comment</th>
				<th>Info_special_check</th>
				<th>Info_special</th>
				<th>How_did_enquire</th>
				<th>Status</th>
				<th>Price</th>
				<th>Currency</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $enquire->hotel_id }}}</td>
					<td>{{{ $enquire->offer_id }}}</td>
					<td>{{{ $enquire->room_id }}}</td>
					<td>{{{ $enquire->offer_code }}}</td>
					<td>{{{ $enquire->room_code }}}</td>
					<td>{{{ $enquire->quotation_number }}}</td>
					<td>{{{ $enquire->full_name }}}</td>
					<td>{{{ $enquire->email }}}</td>
					<td>{{{ $enquire->phone_number }}}</td>
					<td>{{{ $enquire->mobile_number }}}</td>
					<td>{{{ $enquire->address }}}</td>
					<td>{{{ $enquire->city }}}</td>
					<td>{{{ $enquire->postal_code }}}</td>
					<td>{{{ $enquire->country }}}</td>
					<td>{{{ $enquire->state }}}</td>
					<td>{{{ $enquire->region }}}</td>
					<td>{{{ $enquire->day_in }}}</td>
					<td>{{{ $enquire->day_out }}}</td>
					<td>{{{ $enquire->checkin_date }}}</td>
					<td>{{{ $enquire->quantity }}}</td>
					<td>{{{ $enquire->adult }}}</td>
					<td>{{{ $enquire->children }}}</td>
					<td>{{{ $enquire->infant }}}</td>
					<td>{{{ $enquire->airport_name }}}</td>
					<td>{{{ $enquire->airport_location }}}</td>
					<td>{{{ $enquire->flight_number }}}</td>
					<td>{{{ $enquire->arrival_time }}}</td>
					<td>{{{ $enquire->other_transport }}}</td>
					<td>{{{ $enquire->comment }}}</td>
					<td>{{{ $enquire->info_special_check }}}</td>
					<td>{{{ $enquire->info_special }}}</td>
					<td>{{{ $enquire->how_did_enquire }}}</td>
					<td>{{{ $enquire->status }}}</td>
					<td>{{{ $enquire->price }}}</td>
					<td>{{{ $enquire->currency }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('enquiries.destroy', $enquire->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('enquiries.edit', 'Edit', array($enquire->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
