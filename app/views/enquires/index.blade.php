@extends('layouts.list')

@section('main')
			      <div class="page-title">
              <div class="title_left">
                <h3>All Enquires <small></small></h3>
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
                    <h2>{{ link_to_route('enquires.create', 'Add New Enquires', null, array('class' => 'btn btn-lg btn-success')) }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					         @if ($enquires->count())
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
            				<th>Hotel_id</th>
				<th>Offer_id</th>
				<th>Room_id</th>
				<th>Offer_code</th>
				<th>Room_code</th>
				<th>Quotation_number</th>
				<th>Full_name</th>
				<th>Email</th>
				<th>Phone_number</th>
				<th>Mobile_number</th>
				<th>Address</th>
				<th>City</th>
				<th>Postal_code</th>
				<th>Country</th>
				<th>State</th>
				<th>Region</th>
            				<th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($enquires as $enquire)
          							<tr>
          								<td>{{{ $enquire->hotel_id }}}</td>
					<td>{{{ $enquire->offer_id }}}</td>
					<td>{{{ $enquire->room_id }}}</td>
					<td>{{{ $enquire->offer_code }}}</td>
					<td>{{{ $enquire->room_code }}}</td>
					<td>{{{ $enquire->quotation_number }}}</td>
					<td>{{{ $enquire->full_name }}}</td>
					<td>{{{ $enquire->email }}}</td>
					<td>{{{ $enquire->phone_number }}}</td>
					<td>{{{ $enquire->mobile_number }}}</td>
					<td>{{{ $enquire->address }}}</td>
					<td>{{{ $enquire->city }}}</td>
					<td>{{{ $enquire->postal_code }}}</td>
					<td>{{{ $enquire->country }}}</td>
					<td>{{{ $enquire->state }}}</td>
					<td>{{{ $enquire->region }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('enquires.destroy', $enquire->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('enquires.edit', 'Edit', array($enquire->id), array('class' => 'btn btn-info')) }}
                    </td>
          							</tr>
						            @endforeach
                      </tbody>
                    </table>
          					@else
          						There are no enquires
          					@endif
                  </div>
                </div>
              </div>
            </div>
@stop

