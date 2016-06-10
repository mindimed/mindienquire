@extends('layouts.scaffold')

@section('main')

<h1>Show Room</h1>

<p>{{ link_to_route('rooms.index', 'Return to All rooms', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Hotel_id</th>
				<th>Name</th>
				<th>Code</th>
				<th>Description</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $room->hotel_id }}}</td>
					<td>{{{ $room->name }}}</td>
					<td>{{{ $room->code }}}</td>
					<td>{{{ $room->description }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('rooms.destroy', $room->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('rooms.edit', 'Edit', array($room->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
