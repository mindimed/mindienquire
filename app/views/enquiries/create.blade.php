@extends('layouts.form')

@section('main')
            <div class="page-title">
              <div class="title_left">
                <h3>Create Enquire <small></small></h3>
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
                    <h2>Create Enquire <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    {{ Form::open(array('id' => 'demo-form2','route' => 'enquiries.store','data-parsley-validate', 'class' => 'form-horizontal form-label-left')) }}

                            <div class="form-group">
            {{ Form::label('hotel_id', 'Hotel_id:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'hotel_id', Input::old('hotel_id'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('offer_id', 'Offer_id:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'offer_id', Input::old('offer_id'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('room_id', 'Room_id:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'room_id', Input::old('room_id'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('offer_code', 'Offer_code:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('offer_code', Input::old('offer_code'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Offer_code')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('room_code', 'Room_code:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('room_code', Input::old('room_code'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Room_code')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('quotation_number', 'Quotation_number:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('quotation_number', Input::old('quotation_number'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Quotation_number')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('full_name', 'Full_name:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('full_name', Input::old('full_name'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Full_name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('email', Input::old('email'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Email')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('phone_number', 'Phone_number:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('phone_number', Input::old('phone_number'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Phone_number')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('mobile_number', 'Mobile_number:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('mobile_number', Input::old('mobile_number'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Mobile_number')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('address', 'Address:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('address', Input::old('address'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Address')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('city', 'City:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('city', Input::old('city'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'City')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('postal_code', 'Postal_code:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('postal_code', Input::old('postal_code'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Postal_code')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('country', 'Country:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('country', Input::old('country'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Country')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('state', 'State:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('state', Input::old('state'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'State')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('region', 'Region:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('region', Input::old('region'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Region')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('day_in', 'Day_in:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('day_in', Input::old('day_in'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Day_in')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('day_out', 'Day_out:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('day_out', Input::old('day_out'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Day_out')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('checkin_date', 'Checkin_date:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('checkin_date', Input::old('checkin_date'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Checkin_date')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('quantity', 'Quantity:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'quantity', Input::old('quantity'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('adult', 'Adult:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'adult', Input::old('adult'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('children', 'Children:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'children', Input::old('children'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('infant', 'Infant:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'infant', Input::old('infant'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('airport_name', 'Airport_name:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('airport_name', Input::old('airport_name'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Airport_name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('airport_location', 'Airport_location:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('airport_location', Input::old('airport_location'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Airport_location')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('flight_number', 'Flight_number:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('flight_number', Input::old('flight_number'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Flight_number')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('arrival_time', 'Arrival_time:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('arrival_time', Input::old('arrival_time'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Arrival_time')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('other_transport', 'Other_transport:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('other_transport', Input::old('other_transport'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Other_transport')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('comment', 'Comment:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::textarea('comment', Input::old('comment'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Comment')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('info_special_check', 'Info_special_check:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'info_special_check', Input::old('info_special_check'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('info_special', 'Info_special:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::textarea('info_special', Input::old('info_special'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Info_special')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('how_did_enquire', 'How_did_enquire:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('how_did_enquire', Input::old('how_did_enquire'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'How_did_enquire')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('status', 'Status:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('status', Input::old('status'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Status')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('price', 'Price:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('price', Input::old('price'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Price')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('currency', 'Currency:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('currency', Input::old('currency'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Currency')) }}
            </div>
        </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          {{ Form::submit('Create', array('class' => 'btn btn-lg btn-primary')) }}
                        </div>
                      </div>
                  {{ Form::close() }}
                  </div>
                </div>
              </div>

            </div>
@stop


