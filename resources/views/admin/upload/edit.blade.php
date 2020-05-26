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

{!! Form::model($upload, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.upload.update', $upload->id))) !!}

<div class="form-group">
    {!! Form::label('upload_type_id_fk', 'Type*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <!--{!! Form::text('upload_type_id_fk', old('upload_type_id_fk',$upload->upload_type_id_fk), array('class'=>'form-control')) !!}-->
        <select required="required" class="form-control" name="upload_type_id_fk">
			<option value="">-- Select Publication Type --</option>
			@foreach($uploadtypename as $uploadtypenameval)
				<?php /*?><option value="{{$uploadtypenameval->id}}" <?php if($upload->upload_type_id_fk==$uploadtypenameval->id){ echo 'selected'; }?>>{{ $uploadtypenameval->upload_type}}</option><?php */?>
				<option value="{{$uploadtypenameval->id}}" @if($upload->upload_type_id_fk==$uploadtypenameval->id) selected @endif>{{ $uploadtypenameval->upload_type}}</option>
			@endforeach
		</select>
    </div>
</div><div class="form-group">
    {!! Form::label('title', 'Title*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('title', old('title',$upload->title), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('description', 'Short Description*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description', old('description',$upload->description), array('class'=>'form-control')) !!}
        
    </div>
</div>
<div class="form-group">
    {!! Form::label('file_name', 'File Upload', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-5">
        {!! Form::file('file_name') !!}
        {!! Form::hidden('file_name_w', 4096) !!}
        {!! Form::hidden('file_name_h', 4096) !!}        
	</div>
	<div class="col-sm-5">
	<a href="{{ asset('uploads') . '/'.  $upload->file_name }}" target="_blank"><i class="fa fa-file-pdf-o"></i> View Previous file</a>
	</div>
	<input type="hidden" name="upload_file" value="{{$upload->file_name}}" />
</div>
<div class="form-group">
    {!! Form::label('flag', 'Status*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <!--{!! Form::text('flag', old('flag',$upload->flag), array('class'=>'form-control')) !!}-->
        <select required="required" class="form-control" name="flag">
			<option value="">-- Select One --</option>
			<option value="1" @if($upload->flag==1) selected @endif >Active</option> 
			<option value="0" @if($upload->flag==0) selected @endif >In-Active</option>
		</select>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.upload.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection