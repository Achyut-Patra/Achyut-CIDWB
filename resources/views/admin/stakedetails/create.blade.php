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

{!! Form::open(array('route' => config('quickadmin.route').'.stakedetails.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('stake_name', 'Stake Name*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('stake_name', old('stake_name'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('flag', 'Status', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
    <select required="required" class="form-control" name="flag">
        <option value="">-----Please Select Status----</option>
        <option value="1">Active</option>
        <option value="0">Inactive</option>        
    </select>
        
    </div>
</div><!-- <div class="form-group">
    {!! Form::label('sort_order', 'Sorting Order', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('sort_order', old('sort_order'), array('class'=>'form-control')) !!}
        
    </div>
</div> --><div class="form-group">
    {!! Form::label('abbreviation', 'Abbreviation', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('abbreviation', old('abbreviation'), array('class'=>'form-control')) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('logo', 'Logo', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('logo', old('logo'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('stake_level_id_fk', 'Stake Level', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
    <select required="required" class="form-control" name="stake_level_id_fk">
        <option value="">-----Please Select Stake Level----</option>
        @foreach($stakelevel as $stakelevelvalue)
        <option value="{{ $stakelevelvalue->id}}">{{ $stakelevelvalue->stake_name }}</option>
        @endforeach
    </select>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection