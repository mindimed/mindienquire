@extends('layouts.scaffold')

@section('main')

<h1>Show Email_setting</h1>

<p>{{ link_to_route('email_settings.index', 'Return to All email_settings', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Hotel_id</th>
				<th>Template_id</th>
				<th>Title</th>
				<th>Body</th>
				<th>Status</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $email_setting->hotel_id }}}</td>
					<td>{{{ $email_setting->template_id }}}</td>
					<td>{{{ $email_setting->title }}}</td>
					<td>{{{ $email_setting->body }}}</td>
					<td>{{{ $email_setting->status }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('email_settings.destroy', $email_setting->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('email_settings.edit', 'Edit', array($email_setting->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
