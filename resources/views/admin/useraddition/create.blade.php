@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>Create New User</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::open(array('route' => config('quickadmin.route').'.useraddition.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('stake_cd', 'Select User Type', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <select id="Officials" required="required" class="form-control" name="stake_cd">
        <option value="0">------Please Select Officials Type-----</option>
        <option value="1">Criminal Investigation Department (CID)</option>
        <option value="2">Anti Human Trafficking Unit(AHTU)</option>
        <option value="3">Police Station (PS)</option>
        <option value="4">District Crime Records Bureau</option>
        <option value="5">Seniors Officials</option>
    </select>
                
    </div>
</div><div class="form-group" id="description" style="display:none;">
    {!! Form::label('description', 'Select District', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <select required="required" id="des" class="form-control" name="description">
        <option value="">------Please Select District-----</option>
        <option value="">Paschim Medinipur</option>
        <option value="">Purba Medinipur</option>
        <option value="">Malda</option>
        <option value="">Howrah</option>
        <option value="">Burdwan</option>
    </select>      
    </div>
</div>
<div class="form-group" id="pstncheck" style="display:none;">
    {!! Form::label('pstncheck', 'Select PS Type', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        User of Existing PS {{ Form::radio('pstncheck', '1', true, array('id'=>'ueps')) }} 
        Create New PS {{ Form::radio('pstncheck', '2', false, array('id'=>'cnp')) }}
    </div>
</div>

<div class="form-group" id="pstn" style="display:none;">
    {!! Form::label('pstn', 'Police station', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <select required="required" class="form-control" name="pstn">
        <option value="">------Please Select Police Station-----</option>
        <option value="">Debra</option>
        <option value="">Medinipur</option>
        <option value="">Tamluk</option>
        <option value="">Kharagpur</option>
        <option value="">Panchla</option>
    </select>        
    </div>
</div><div class="form-group" id="locationkey" style="display:none;">
    {!! Form::label('locationkey', 'User Name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('locationkey', old('locationkey'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group" id="password" style="display:none;">
    {!! Form::label('password', 'Password', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('password', old('password'), array('class'=>'form-control')) !!}
        <p class="help-block">(Use Minimum 8 Characters )</p>
    </div>
</div><div class="form-group" id="confirm" style="display:none;">
    {!! Form::label('confirm', 'Comfirm Password', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('confirm', old('confirm'), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
 $(document).ready(function() {
    $('#Officials').change(function(){
    if($(this).val() =="0"){
    $('#locationkey').hide();
    $('#description').hide();
    $('#pstn').hide();
    $('#password').hide();
    $('#confirm').hide();
  }
 if($(this).val() == "1" ){
 $('#locationkey').show();
 $('#description').hide();
 $('#pstn').hide();
    $('#password').show();
    $('#confirm').show();
  }
  if($(this).val() == "2" ){
    $('#description').show();
     $('select#des').change(function(){
    $(this).children("option:selected").val();
    $('#locationkey').show();
    $('#pstn').hide();
    $('#password').show();
    $('#confirm').show();
});
  }

  if($(this).val() == "3" ){
    $('#description').show();
    $('select#des').change(function(){
    $(this).children("option:selected").val();
    $('#locationkey').show();
    $('#pstn').show();
    $('#password').show();
    $('#confirm').show();
});
  }
 else {
 
 }
 });
    });
 
</script>
@endsection