@extends('layouts.list')

@section('main')
			      <div class="page-title">
              <div class="title_left">
                <h3>All Outboxes <small></small></h3>
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
                    <h2>{{ link_to_route('outboxes.create', 'Add New Outboxes', null, array('class' => 'btn btn-lg btn-success')) }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					         @if ($outboxes->count())
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
            				<th>Hotel_id</th>
				<th>Enquire_id</th>
				<th>Status</th>
				<th>Sent_to</th>
				<th>Sent_cc</th>
				<th>Sent_bcc</th>
				<th>Message</th>
				<th>Title</th>
            				<th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($outboxes as $outbox)
          							<tr>
          								<td>{{{ $outbox->hotel_id }}}</td>
					<td>{{{ $outbox->enquire_id }}}</td>
					<td>{{{ $outbox->status }}}</td>
					<td>{{{ $outbox->sent_to }}}</td>
					<td>{{{ $outbox->sent_cc }}}</td>
					<td>{{{ $outbox->sent_bcc }}}</td>
					<td>{{{ $outbox->message }}}</td>
					<td>{{{ $outbox->title }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('outboxes.destroy', $outbox->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('outboxes.edit', 'Edit', array($outbox->id), array('class' => 'btn btn-info')) }}
                    </td>
          							</tr>
						            @endforeach
                      </tbody>
                    </table>
          					@else
          						There are no outboxes
          					@endif
                  </div>
                </div>
              </div>
            </div>
@stop

