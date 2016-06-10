@extends('layouts.list')

@section('main')
			      <div class="page-title">
              <div class="title_left">
                <h3>All Booking_engine_details <small></small></h3>
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
                    <h2>{{ link_to_route('booking_engine_details.create', 'Add New Booking_engine_details', null, array('class' => 'btn btn-lg btn-success')) }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					         @if ($booking_engine_details->count())
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
            				<th>Hotel_id</th>
				<th>Setting_id</th>
				<th>Param_name</th>
				<th>Param_value</th>
				<th>Is_static</th>
            				<th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($booking_engine_details as $booking_engine_detail)
          							<tr>
          								<td>{{{ $booking_engine_detail->hotel_id }}}</td>
					<td>{{{ $booking_engine_detail->setting_id }}}</td>
					<td>{{{ $booking_engine_detail->param_name }}}</td>
					<td>{{{ $booking_engine_detail->param_value }}}</td>
					<td>{{{ $booking_engine_detail->is_static }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('booking_engine_details.destroy', $booking_engine_detail->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('booking_engine_details.edit', 'Edit', array($booking_engine_detail->id), array('class' => 'btn btn-info')) }}
                    </td>
          							</tr>
						            @endforeach
                      </tbody>
                    </table>
          					@else
          						There are no booking_engine_details
          					@endif
                  </div>
                </div>
              </div>
            </div>
@stop

