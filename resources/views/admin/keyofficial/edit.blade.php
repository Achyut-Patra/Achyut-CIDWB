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

{!! Form::model($keyofficial, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.keyofficial.update', $keyofficial->id))) !!}

<div class="form-group">
    {!! Form::label('type', 'Type*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <!--{!! Form::text('type', old('type',$keyofficial->type), array('class'=>'form-control')) !!}-->
        <select required="required" class="form-control" name="type">
			<option value="">------Please Select Officials Type-----</option>
			@foreach($officialtype as $officialtypeval)
				<option value="{{ $officialtypeval->id}}" @if($keyofficial->type==$officialtypeval->id) selected @endif >{{ $officialtypeval->officialtype}}</option>
			@endforeach
		</select>
    </div>
</div><div class="form-group">
    {!! Form::label('name', 'Name*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('name', old('name',$keyofficial->name), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('rank', 'Rank*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <!--{!! Form::text('rank', old('rank',$keyofficial->rank), array('class'=>'form-control')) !!}-->
        <select required="required" class="form-control" name="rank">
			<option value="">----- Please Select Officials Rank-----</option>
		@foreach($officialrank as $officialrankval)
			<option value="{{ $officialrankval->id}}" @if($keyofficial->rank==$officialrankval->id) selected @endif >{{ $officialrankval->rank}}</option>
		@endforeach
		</select>
    </div>
</div><div class="form-group">
    {!! Form::label('phone', 'Phone No*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('phone', old('phone',$keyofficial->phone), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('order', 'Order', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('order', old('order',$keyofficial->order), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.keyofficial.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection