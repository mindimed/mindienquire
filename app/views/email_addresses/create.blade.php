@extends('layouts.form')

@section('main')
            <div class="page-title">
              <div class="title_left">
                <h3>Create Email_address <small></small></h3>
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
                    <h2>Create Email_address <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    {{ Form::open(array('id' => 'demo-form2','route' => 'email_addresses.store','data-parsley-validate', 'class' => 'form-horizontal form-label-left')) }}

                            <div class="form-group">
            {{ Form::label('hotel_id', 'Hotel_id:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'hotel_id', Input::old('hotel_id'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('toccbcc', 'Toccbcc:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('toccbcc', Input::old('toccbcc'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Toccbcc')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('email', Input::old('email'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Email')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('full_name', 'Full_name:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('full_name', Input::old('full_name'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Full_name')) }}
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


