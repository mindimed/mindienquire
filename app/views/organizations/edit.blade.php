@extends('layouts.form')

@section('main')
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Organization <small></small></h3>
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
                    <h2>Edit Organization <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    {{ Form::model($organization, array('class' => 'form-horizontal form-label-left', 'method' => 'PATCH','data-parsley-validate', 'route' => array('organizations.update', $organization->id))) }}
                        
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

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          {{ Form::submit('Update', array('class' => 'btn btn-lg btn-primary')) }}
                          {{ link_to_route('organizations.show', 'Cancel', $organization->id, array('class' => 'btn btn-lg btn-default')) }}

                        </div>
                      </div>

                  {{ Form::close() }}
                  </div>
                </div>
              </div>

            </div>
@stop
