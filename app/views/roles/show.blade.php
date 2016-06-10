@extends('layouts.scaffold')

@section('main')

<h1>Show Role</h1>

<p>{{ link_to_route('roles.index', 'Return to All roles', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
				<th>Code</th>
				<th>Permissions</th>
				<th>Is_super_user</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $role->name }}}</td>
					<td>{{{ $role->code }}}</td>
					<td>{{{ $role->permissions }}}</td>
					<td>{{{ $role->is_super_user }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('roles.destroy', $role->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('roles.edit', 'Edit', array($role->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
