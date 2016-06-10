@extends('layouts.form')

@section('main')
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Booking_engine_detail <small></small></h3>
              </div>
            </div>

            <div class="clearfix"></div>            
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
            </div>
        @endif
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Booking_engine_detail <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    {{ Form::model($booking_engine_detail, array('class' => 'form-horizontal form-label-left', 'method' => 'PATCH','data-parsley-validate', 'route' => array('booking_engine_details.update', $booking_engine_detail->id))) }}
                        
                            <div class="form-group">
            {{ Form::label('hotel_id', 'Hotel_id:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'hotel_id', Input::old('hotel_id'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('setting_id', 'Setting_id:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'setting_id', Input::old('setting_id'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('param_name', 'Param_name:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('param_name', Input::old('param_name'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Param_name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('param_value', 'Param_value:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('param_value', Input::old('param_value'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Param_value')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('is_static', 'Is_static:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'is_static', Input::old('is_static'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          {{ Form::submit('Update', array('class' => 'btn btn-lg btn-primary')) }}
                          {{ link_to_route('booking_engine_details.show', 'Cancel', $booking_engine_detail->id, array('class' => 'btn btn-lg btn-default')) }}

                        </div>
                      </div>

                  {{ Form::close() }}
                  </div>
                </div>
              </div>

            </div>
@stop
