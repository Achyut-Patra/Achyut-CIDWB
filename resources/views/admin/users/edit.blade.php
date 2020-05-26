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
{!! Form::open(['route' => ['users.update', $user->id], 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}


<div class="form-group">
    {!! Form::label('locationkey', 'User ID*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('locationkey', old('locationkey',$user->locationkey), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('password', 'Password', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('password', old('password',''), array('class'=>'form-control')) !!}
        <p class="help-block">(Minimum 8 characters)</p>
    </div>
</div><div class="form-group">
    {!! Form::label('stake_cd', 'Stake CD', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('stake_cd', old('stake_cd',$user->stakedetails['stake_name']), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('description', 'Description', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('description', old('description',$user->district['district_name']), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('user_address', 'User Address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('user_address', old('user_address',$user->user_address), array('class'=>'form-control')) !!}
        
    </div>
</div><!-- <div class="form-group">
    {!! Form::label('stake_id_fk', 'Stake ID', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('stake_id_fk', old('stake_id_fk',$user->stake_id_fk), array('class'=>'form-control')) !!}
        
    </div>
</div> --><div class="form-group">
    {!! Form::label('super_password', 'Super Password', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('super_password', old('super_password',$user->super_password), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('flag', 'Status', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('flag', old('flag',$user->flag), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('email', 'Email Id', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::email('email', old('email',$user->email), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('last_login', 'Last Login', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('last_login', old('last_login',$user->last_login), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('last_login_ip', 'Last Login IP', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('last_login_ip', old('last_login_ip',$user->last_login_ip), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('user_contact_no', 'User Contact No', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('user_contact_no', old('user_contact_no',$user->user_contact_no), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('last_pw_update_time', 'Password Updated', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('last_pw_update_time', old('last_pw_update_time',$user->last_pw_update_time), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('locationkey_hash', 'Location Key', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('locationkey_hash', old('locationkey_hash',$user->locationkey_hash), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            {!! Form::submit(trans('quickadmin::admin.users-edit-btnupdate'), ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

{!! Form::close() !!}

@endsection