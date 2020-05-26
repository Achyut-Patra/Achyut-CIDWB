@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_create-add_new') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::open(array('files' => true,'route' => config('quickadmin.route').'.banner.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('title', 'Title', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('title', old('title'), array('class'=>'form-control')) !!}
        
    </div>
</div>
<!--<div class="form-group">
    {!! Form::label('banner_name', 'Upload Banner', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('banner_name', old('banner_name'), array('class'=>'form-control')) !!}
        
    </div>
</div>-->
<div class="form-group">
    {!! Form::label('banner_name', 'Upload Banner', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('file_name') !!}
        {!! Form::hidden('file_name_w', 4096) !!}
        {!! Form::hidden('file_name_h', 4096) !!}        
    </div>
</div>
<div class="form-group">
    {!! Form::label('ordering', 'Sort Order', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('ordering', old('ordering'), array('class'=>'form-control')) !!}
        
    </div>
</div>
<!--<div class="form-group">
    {!! Form::label('flag', 'Status', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('flag', old('flag'), array('class'=>'form-control')) !!}
        
    </div>
</div>-->

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection