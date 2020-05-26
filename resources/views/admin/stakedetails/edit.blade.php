@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($stakedetails, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.stakedetails.update', $stakedetails->id))) !!}

<div class="form-group">
    {!! Form::label('stake_name', 'Stake Name*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('stake_name', old('stake_name',$stakedetails->stake_name), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('flag', 'Status', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <select required="required" class="form-control" name="flag">
        <option value="{{ $stakedetails->flag }}">Active</option>
        <option value="{{ $stakedetails->flag }}">Inactive</option>        
    </select>
        <!-- {!! Form::text('flag', old('flag',$stakedetails->flag), array('class'=>'form-control')) !!} -->
        
    </div>
</div><div class="form-group">
    {!! Form::label('sort_order', 'Sorting Order', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('sort_order', old('sort_order',$stakedetails->sort_order), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('abbreviation', 'Abbreviation', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('abbreviation', old('abbreviation',$stakedetails->abbreviation), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('logo', 'Logo', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('logo', old('logo',$stakedetails->logo), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('stake_level_id_fk', 'Stake Level ID', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <select required="required" class="form-control" name="stake_level_id_fk">
        <option value="{{ $foreignk->id }}">{{ $foreignk->stake_name }}</option>
        </select>        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.stakedetails.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection