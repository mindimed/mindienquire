@extends('layouts.form')

@section('main')
            <div class="page-title">
              <div class="title_left">
                <h3>Create Booking_engine <small></small></h3>
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
                    <h2>Create Booking_engine <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    {{ Form::open(array('id' => 'demo-form2','route' => 'booking_engines.store','data-parsley-validate', 'class' => 'form-horizontal form-label-left')) }}

                            <div class="form-group">
            {{ Form::label('name', 'Name:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('name', Input::old('name'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('code', 'Code:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('code', Input::old('code'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Code')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('url', 'Url:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('url', Input::old('url'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Url')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('method', 'Method:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('method', Input::old('method'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Method')) }}
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


