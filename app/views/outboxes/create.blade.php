@extends('layouts.form')

@section('main')
            <div class="page-title">
              <div class="title_left">
                <h3>Create Outbox <small></small></h3>
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
                    <h2>Create Outbox <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    {{ Form::open(array('id' => 'demo-form2','route' => 'outboxes.store','data-parsley-validate', 'class' => 'form-horizontal form-label-left')) }}

                            <div class="form-group">
            {{ Form::label('hotel_id', 'Hotel_id:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'hotel_id', Input::old('hotel_id'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('enquire_id', 'Enquire_id:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'enquire_id', Input::old('enquire_id'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('status', 'Status:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('status', Input::old('status'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Status')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('sent_to', 'Sent_to:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::textarea('sent_to', Input::old('sent_to'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Sent_to')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('sent_cc', 'Sent_cc:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::textarea('sent_cc', Input::old('sent_cc'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Sent_cc')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('sent_bcc', 'Sent_bcc:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::textarea('sent_bcc', Input::old('sent_bcc'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Sent_bcc')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('message', 'Message:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::textarea('message', Input::old('message'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Message')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('title', 'Title:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('title', Input::old('title'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Title')) }}
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


