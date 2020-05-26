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

{!! Form::model($banner, array('files' => true,'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.banner.update', $banner->id))) !!}

<div class="form-group">
    {!! Form::label('title', 'Title', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('title', old('title',$banner->title), array('class'=>'form-control')) !!}
        
    </div>
</div>
<!--<div class="form-group">
    {!! Form::label('banner_name', 'Upload Banner', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('banner_name', old('banner_name',$banner->banner_name), array('class'=>'form-control')) !!}
        
    </div>
</div>-->

<div class="form-group">
    {!! Form::label('banner_name', 'Upload Banner', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-5">
        {!! Form::file('file_name') !!}
        {!! Form::hidden('file_name_w', 4096) !!}
        {!! Form::hidden('file_name_h', 4096) !!}        
	</div>
	<div class="col-sm-5">
	@if($banner->banner_name <> '')
		<i class="fa fa-file-image-o"></i> <a href="{{ $banner->banner_name }}" title="Click to Large View" data-target="#" class="zoomin">View Uploaded File</a>
	@endif
	</div>
	<input type="hidden" name="upload_file" value="{{$banner->banner_name}}" />
</div>

<div class="form-group">
    {!! Form::label('ordering', 'Sort Order', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('ordering', old('ordering',$banner->ordering), array('class'=>'form-control')) !!}
        
    </div>
</div>

<!--<div class="form-group">
    {!! Form::label('flag', 'Status', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('flag', old('flag',$banner->flag), array('class'=>'form-control')) !!}
        
    </div>
</div>-->

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.banner.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

<input type="hidden" id="url" value="{{ url('/') }}">

@endsection

<!-- Zoom section start-->
  <div class="modal fade" id="zoom_banner" tabindex="-1" role="dialog" aria-labelledby="zoom_banner" aria-hidden="true">
    <div class="modal-dialog modal-sm banner-zoom" style="width:900px;">
    <div class="modal-content">
      <div><span class="om-bar om-red-bar"></span><span class="om-bar om-green-bar"></span><span class="om-bar om-orange-bar"></span><span class="om-bar om-blue-bar"></span></div>
      <a class="modalCloseImg" data-dismiss="modal" title="Close"></a>
      
      <div class="modal-body large-banner" style="text-align: center;">
         
      </div>
      
    </div>
    </div>
   </div>
<!-- Zoom section end-->

@section('javascript')
    <script>
		
	$(document).on("click",".zoomin", function(e){
     e.preventDefault();
     $("#zoom_banner").modal();
     var attr = $(this).attr('href');
	 var base_url = $("#url").val();
     //alert("<img src='upload/banner/"+attr+"' alt='CID'>");
     $('.large-banner').html("<img src='"+base_url+"/uploads/banner/"+attr+"' alt='CID Banner'>");    

   }); 
		
//	=====================Start Active/In-Active Coding==================		
		
		
    </script>
@stop
