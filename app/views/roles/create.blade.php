@extends('layouts.form')

@section('main')
            <div class="page-title">
              <div class="title_left">
                <h3>Create Role <small></small></h3>
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
                    <h2>Create Role <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    {{ Form::open(array('id' => 'demo-form2','route' => 'roles.store','data-parsley-validate', 'class' => 'form-horizontal form-label-left')) }}
                        <div class="form-group">
                            {{ Form::label('name', 'Name:', array( 'for'=>'name','class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              {{ Form::text('name', Input::old('name'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Name')) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('code', 'Code:', array( 'for'=>'code','class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              {{ Form::text('code', Input::old('code'), array('class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Code')) }}
                            </div>
                        </div>
                      <div class="form-group">
                        {{ Form::label('is_super_user', 'Super User:', array( 'for'=>'is_super_user','class'=>'control-label col-md-3 col-sm-3 col-xs-12')) }}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="">
                            <label>
                            {{ Form::checkbox('is_super_user', 1, null, ['class' => 'js-switch']) }}
                            </label>
                          </div>
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
