@extends('layouts.form')

@section('main')
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Offer <small></small></h3>
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
                    <h2>Edit Offer <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    {{ Form::model($offer, array('class' => 'form-horizontal form-label-left', 'method' => 'PATCH','data-parsley-validate', 'route' => array('offers.update', $offer->id))) }}
                        
                            <div class="form-group">
            {{ Form::label('hotel_id', 'Hotel_id:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'hotel_id', Input::old('hotel_id'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('room_id', 'Room_id:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'room_id', Input::old('room_id'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('booking_engine_detail_id', 'Booking_engine_detail_id:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'booking_engine_detail_id', Input::old('booking_engine_detail_id'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('name', 'Name:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('name', Input::old('name'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('description', Input::old('description'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Description')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('active', 'Active:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'active', Input::old('active'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('is_booking_connected', 'Is_booking_connected:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'is_booking_connected', Input::old('is_booking_connected'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('is_broken', 'Is_broken:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'is_broken', Input::old('is_broken'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          {{ Form::submit('Update', array('class' => 'btn btn-lg btn-primary')) }}
                          {{ link_to_route('offers.show', 'Cancel', $offer->id, array('class' => 'btn btn-lg btn-default')) }}

                        </div>
                      </div>

                  {{ Form::close() }}
                  </div>
                </div>
              </div>

            </div>
@stop
