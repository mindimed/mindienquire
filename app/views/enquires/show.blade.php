@extends('layouts.scaffold')

@section('main')

<h1>Show Enquire</h1>

<p>{{ link_to_route('enquires.index', 'Return to All enquires', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

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
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('enquires.destroy', $enquire->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('enquires.edit', 'Edit', array($enquire->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
