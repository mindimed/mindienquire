@extends('layouts.scaffold')

@section('main')

<h1>Show Email_template</h1>

<p>{{ link_to_route('email_templates.index', 'Return to All email_templates', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Hotel_id</th>
				<th>Template</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $email_template->hotel_id }}}</td>
					<td>{{{ $email_template->template }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('email_templates.destroy', $email_template->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('email_templates.edit', 'Edit', array($email_template->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
