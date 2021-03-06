@extends('layouts.list')

@section('main')
			      <div class="page-title">
              <div class="title_left">
                <h3>All Booking_engine_settings <small></small></h3>
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
                    <h2>{{ link_to_route('booking_engine_settings.create', 'Add New Booking_engine_settings', null, array('class' => 'btn btn-lg btn-success')) }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					         @if ($booking_engine_settings->count())
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
            				<th>Hotel_id</th>
				<th>Engine_id</th>
				<th>Prefix</th>
            				<th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($booking_engine_settings as $booking_engine_setting)
          							<tr>
          								<td>{{{ $booking_engine_setting->hotel_id }}}</td>
					<td>{{{ $booking_engine_setting->engine_id }}}</td>
					<td>{{{ $booking_engine_setting->prefix }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('booking_engine_settings.destroy', $booking_engine_setting->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('booking_engine_settings.edit', 'Edit', array($booking_engine_setting->id), array('class' => 'btn btn-info')) }}
                    </td>
          							</tr>
						            @endforeach
                      </tbody>
                    </table>
          					@else
          						There are no booking_engine_settings
          					@endif
                  </div>
                </div>
              </div>
            </div>
@stop

