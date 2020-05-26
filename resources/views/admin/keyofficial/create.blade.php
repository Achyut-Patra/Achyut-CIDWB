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

{!! Form::open(array('route' => config('quickadmin.route').'.keyofficial.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('type', 'Type*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
    <select required="required" class="form-control" name="type">
        <option value="">------Please Select Officials Type-----</option>
    @foreach($officialtype as $officialtypeval)
        <option value="{{ $officialtypeval->id}}">{{ $officialtypeval->officialtype}}</option>
    @endforeach
    </select>
    </div>
</div><div class="form-group">
    {!! Form::label('name', 'Name & Qualification*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('name', old('name'), array('class'=>'form-control')) !!}
        
    </div>
</div>
<div class="form-group">
    {!! Form::label('rank', 'Rank*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
    <select required="required" class="form-control" name="rank">
        <option value="">----- Please Select Officials Rank-----</option>
    @foreach($officialrank as $officialrankval)
        <option value="{{ $officialrankval->id}}">{{ $officialrankval->rank}}</option>
    @endforeach
    </select>
    </div>
</div>

<!-- <div class="form-group">
    {!! Form::label('rank', 'Rank*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('rank', old('rank'), array('class'=>'form-control')) !!}
        
    </div>
</div> --><div class="form-group">
    {!! Form::label('phone', 'Phone No*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('phone', old('phone'), array('class'=>'form-control')) !!}
        
    </div>
</div>
<div class="form-group">
    {!! Form::label('supervising', 'Supervising*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('supervising', old('supervising'), array('class'=>'form-control')) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('order', 'Order', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('order', old('order'), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection