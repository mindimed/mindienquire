@extends('layouts.scaffold')

@section('main')

<h1>Show Outbox</h1>

<p>{{ link_to_route('outboxes.index', 'Return to All outboxes', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Hotel_id</th>
				<th>Enquire_id</th>
				<th>Status</th>
				<th>Sent_to</th>
				<th>Sent_cc</th>
				<th>Sent_bcc</th>
				<th>Message</th>
				<th>Title</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $outbox->hotel_id }}}</td>
					<td>{{{ $outbox->enquire_id }}}</td>
					<td>{{{ $outbox->status }}}</td>
					<td>{{{ $outbox->sent_to }}}</td>
					<td>{{{ $outbox->sent_cc }}}</td>
					<td>{{{ $outbox->sent_bcc }}}</td>
					<td>{{{ $outbox->message }}}</td>
					<td>{{{ $outbox->title }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('outboxes.destroy', $outbox->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('outboxes.edit', 'Edit', array($outbox->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
