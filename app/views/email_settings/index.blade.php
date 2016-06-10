@extends('layouts.list')

@section('main')
			      <div class="page-title">
              <div class="title_left">
                <h3>All Email_settings <small></small></h3>
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
                    <h2>{{ link_to_route('email_settings.create', 'Add New Email_settings', null, array('class' => 'btn btn-lg btn-success')) }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					         @if ($email_settings->count())
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
            				<th>Hotel_id</th>
				<th>Template_id</th>
				<th>Title</th>
				<th>Body</th>
				<th>Status</th>
            				<th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($email_settings as $email_setting)
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
						            @endforeach
                      </tbody>
                    </table>
          					@else
          						There are no email_settings
          					@endif
                  </div>
                </div>
              </div>
            </div>
@stop

