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

{!! Form::model($useraddition, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.useraddition.update', $useraddition->id))) !!}

<div class="form-group">
    {!! Form::label('locationkey', 'User ID*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('locationkey', old('locationkey',$useraddition->locationkey), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('password', 'Password', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('password', old('password',$useraddition->password), array('class'=>'form-control')) !!}
        <p class="help-block">(Minumum 8 characters )</p>
    </div>
</div><div class="form-group">
    {!! Form::label('stake_cd', 'Stake CD', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('stake_cd', old('stake_cd',$useraddition->stake_cd), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('description', 'Description', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('description', old('description',$useraddition->description), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('user_address', 'User Address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('user_address', old('user_address',$useraddition->user_address), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('stake_id_fk', 'Stake ID', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('stake_id_fk', old('stake_id_fk',$useraddition->stake_id_fk), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('super_password', 'Super Password', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('super_password', old('super_password',$useraddition->super_password), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('flag', 'Status', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('flag', old('flag',$useraddition->flag), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('email', 'Email Id', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::email('email', old('email',$useraddition->email), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('last_login', 'Last Login', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('last_login', old('last_login',$useraddition->last_login), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('last_login_ip', 'Last Login IP', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('last_login_ip', old('last_login_ip',$useraddition->last_login_ip), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('user_contact_no', 'User Contact No', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('user_contact_no', old('user_contact_no',$useraddition->user_contact_no), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('last_pw_update_time', 'Password Updated', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('last_pw_update_time', old('last_pw_update_time',$useraddition->last_pw_update_time), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('locationkey_hash', 'Location Key', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('locationkey_hash', old('locationkey_hash',$useraddition->locationkey_hash), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.useraddition.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection