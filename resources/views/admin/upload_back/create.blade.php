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

{!! Form::open(array('files' => true, 'route' => config('quickadmin.route').'.upload.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('upload_type_id_fk', 'Type*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <!--{!! Form::text('upload_type_id_fk', old('upload_type_id_fk'), array('class'=>'form-control')) !!}-->
        <select required="required" class="form-control" name="upload_type_id_fk">
			<option value="">-- Select Publication Type --</option>
		@foreach($uploadtypename as $uploadtypenameval)
			<option value="{{$uploadtypenameval->id}}">{{ $uploadtypenameval->upload_type}}</option>
		@endforeach
		</select>
    </div>
</div>

<div class="form-group">
    {!! Form::label('title', 'Title*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('title', old('title'), array('class'=>'form-control')) !!}        
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Short Description*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description', old('description'), array('class'=>'form-control')) !!}        
    </div>
</div>

<div class="form-group">
    {!! Form::label('file_name', 'File Upload*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('file_name') !!}
        {!! Form::hidden('file_name_w', 4096) !!}
        {!! Form::hidden('file_name_h', 4096) !!}        
    </div>
</div>

<div class="form-group">
    {!! Form::label('flag', 'Status*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <!--{!! Form::text('flag', old('flag'), array('class'=>'form-control')) !!}--> 
		<select required="required" class="form-control" name="flag">
			<option value="">-- Select One --</option>
			<option value="1">Active</option>
			<option value="0">In-Active</option>
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