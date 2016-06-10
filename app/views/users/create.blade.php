@extends('layouts.form')

@section('main')
            <div class="page-title">
              <div class="title_left">
                <h3>Create User <small></small></h3>
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
                    <h2>Create User <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    {{ Form::open(array('id' => 'demo-form2','route' => 'users.store','data-parsley-validate', 'class' => 'form-horizontal form-label-left')) }}

                            <div class="form-group">
            {{ Form::label('role_id', 'Role_id:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'role_id', Input::old('role_id'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('organization_id', 'Organization_id:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'organization_id', Input::old('organization_id'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('email', Input::old('email'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Email')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('first_name', 'First_name:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('first_name', Input::old('first_name'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'First_name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('last_name', 'Last_name:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('last_name', Input::old('last_name'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Last_name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('password', Input::old('password'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Password')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('active', 'Active:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::input('number', 'active', Input::old('active'), array('class'=>'form-control col-md-7 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('remember_token', 'Remember_token:', array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::text('remember_token', Input::old('remember_token'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Remember_token')) }}
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


