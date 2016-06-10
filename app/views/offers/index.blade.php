@extends('layouts.list')

@section('main')
			      <div class="page-title">
              <div class="title_left">
                <h3>All Offers <small></small></h3>
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
                    <h2>{{ link_to_route('offers.create', 'Add New Offers', null, array('class' => 'btn btn-lg btn-success')) }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					         @if ($offers->count())
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
            				<th>Hotel_id</th>
				<th>Room_id</th>
				<th>Booking_engine_detail_id</th>
				<th>Name</th>
				<th>Description</th>
				<th>Active</th>
				<th>Is_booking_connected</th>
				<th>Is_broken</th>
            				<th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($offers as $offer)
          							<tr>
          								<td>{{{ $offer->hotel_id }}}</td>
					<td>{{{ $offer->room_id }}}</td>
					<td>{{{ $offer->booking_engine_detail_id }}}</td>
					<td>{{{ $offer->name }}}</td>
					<td>{{{ $offer->description }}}</td>
					<td>{{{ $offer->active }}}</td>
					<td>{{{ $offer->is_booking_connected }}}</td>
					<td>{{{ $offer->is_broken }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('offers.destroy', $offer->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('offers.edit', 'Edit', array($offer->id), array('class' => 'btn btn-info')) }}
                    </td>
          							</tr>
						            @endforeach
                      </tbody>
                    </table>
          					@else
          						There are no offers
          					@endif
                  </div>
                </div>
              </div>
            </div>
@stop

