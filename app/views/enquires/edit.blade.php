@extends('layouts.form')

@section('main')
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Enquire <small></small></h3>
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
                    <h2>Edit Enquire <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    {{ Form::model($enquire, array('class' => 'form-horizontal form-label-left', 'method' => 'PATCH','data-parsley-validate', 'route' => array('enquires.update', $enquire->id))) }}
                        
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

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          {{ Form::submit('Update', array('class' => 'btn btn-lg btn-primary')) }}
                          {{ link_to_route('enquires.show', 'Cancel', $enquire->id, array('class' => 'btn btn-lg btn-default')) }}

                        </div>
                      </div>

                  {{ Form::close() }}
                  </div>
                </div>
              </div>

            </div>
@stop
