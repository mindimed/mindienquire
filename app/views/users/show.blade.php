@extends('layouts.scaffold')

@section('main')

<h1>Show User</h1>

<p>{{ link_to_route('users.index', 'Return to All users', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Role_id</th>
				<th>Organization_id</th>
				<th>Email</th>
				<th>First_name</th>
				<th>Last_name</th>
				<th>Password</th>
				<th>Active</th>
				<th>Remember_token</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $user->role_id }}}</td>
					<td>{{{ $user->organization_id }}}</td>
					<td>{{{ $user->email }}}</td>
					<td>{{{ $user->first_name }}}</td>
					<td>{{{ $user->last_name }}}</td>
					<td>{{{ $user->password }}}</td>
					<td>{{{ $user->active }}}</td>
					<td>{{{ $user->remember_token }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
