@extends('layouts.scaffold')

@section('main')

<h1>Show Organization</h1>

<p>{{ link_to_route('organizations.index', 'Return to All organizations', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
				<th>Code</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $organization->name }}}</td>
					<td>{{{ $organization->code }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('organizations.destroy', $organization->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('organizations.edit', 'Edit', array($organization->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
