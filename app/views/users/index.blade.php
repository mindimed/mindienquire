@extends('layouts.list')

@section('main')
			      <div class="page-title">
              <div class="title_left">
                <h3>All Users <small></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            
            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{ link_to_route('users.create', 'Add New Users', null, array('class' => 'btn btn-lg btn-success')) }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					         @if ($users->count())
                    <table id="datatable-buttons" class="table table-striped table-bordered">
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
            				<th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
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
						            @endforeach
                      </tbody>
                    </table>
          					@else
          						There are no users
          					@endif
                  </div>
                </div>
              </div>
            </div>
@stop

