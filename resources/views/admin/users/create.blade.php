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

{!! Form::open(['route' => 'users.store','id' => 'form-with-validation', 'class' => 'form-horizontal']) !!}
<div class="form-group">
    {!! Form::label('stake_cd', 'Select User Type', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <select id="Officials" class="form-control" name="stake_cd">
            
        <option value="0">------Please Select Officials Type-----</option>
        @foreach($stakedet as $stakedetval)
        <option value="{{ $stakedetval->id }}">{{ $stakedetval->stake_name }}</option>
        @endforeach
        </select>     
    </div>
</div><div class="form-group" id="description" style="display:none;">
    {!! Form::label('description', 'Select District', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <select id="des" class="form-control" name="description">
        <option value="">------Please Select District-----</option>
        @foreach($dist as $diastval)
        <option value="{{ $diastval->id }}">{{ $diastval->district_name }}</option>
        @endforeach
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
    {!! Form::label('pstnn', 'Police station', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10" id="pss">
                
    </div>
</div>
<div class="form-group npsc" id="" style="display:none;">
    {!! Form::label('ntps', 'New Police Station', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('ntps', old('ntps'), array('class'=>'form-control')) !!}
    </div>
</div>
<div class="form-group npsc" id="" style="display:none;">
    {!! Form::label('ntpscode', 'New PS Code', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('ntpscode', old('ntpscode'), array('class'=>'form-control')) !!}
    </div>
</div>
<div class="form-group" id="locationkey" style="display:none;">
    {!! Form::label('locationkey', 'Email', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::email('locationkey', old('locationkey'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group" id="password" style="display:none;">
    {!! Form::label('password', 'Password', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::password('password', ['class'=>'form-control']) !!}
        <p class="help-block">(Use Minimum 8 Characters )</p>
    </div>
</div><div class="form-group" id="confirm" style="display:none;">
    {!! Form::label('confirm', 'Comfirm Password', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::password('password_confirmation', array('class'=>'form-control')) !!}
        
    </div>
</div>
<div class="form-group" id="rolei" style="display:none;">
        {!! Form::label('role_id', trans('quickadmin::admin.users-create-role'), ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('role_id', $roles, old('role_id'), ['class'=>'form-control']) !!}
        </div>
    </div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
    </div>
</div>
<input type="hidden" id="url" value="{!! url('/'); !!}">

{!! Form::close() !!}
<script src="../js/jquery_two.min.js"></script>
<script>
 $(document).ready(function() {
    $('#Officials').change(function(){
    if($(this).val() =="0"){
    $('#locationkey').hide();
    $('#description').hide();
    $('#pstn').hide();
    $('#password').hide();
    $('#confirm').hide();
    $('#pstncheck').hide();
    $('.npsc').hide();
    $('#rolei').hide();
  }
 if($(this).val() == "1" ){
 $('#locationkey').show();
 $('#description').hide();
 $('#pstn').hide();
 $('.npsc').hide();
 $('#pstncheck').hide();
    $('#password').show();
    $('#confirm').show();
    $('#rolei').show();
  }
  if($(this).val() == "2" ){
    $('#description').show();
     $('select#des').change(function(){
    $(this).children("option:selected").val();
    $('#locationkey').show();
    $('#pstncheck').show();
    $('#pstn').show();
    if($('#cnp').click(function(){
        $('.npsc').show();
        $('#pstn').hide();
    }));
        if($('#ueps').click(function(){
        $('.npsc').hide();
        $('#pstn').show();
    }));
    $('#password').show();
    $('#confirm').show();
    $('#rolei').show();
});
  }

  if($(this).val() == "3" ){
    $('#description').show();
    $('select#des').change(function(){
    $(this).children("option:selected").val();
    $('#locationkey').show();
    $('#pstn').hide();
    $('#password').show();
    $('#confirm').show();
    $('#rolei').show();
});
  }
 });
    });
 
</script>
 <script type="text/javascript">
$(document).ready(function(){
$('#des').change(function() {
        var selectedVal = $('#des option:selected').val();
        var dynaurl = $("#url").val();
$.ajax({    
        type: "GET",
        url: dynaurl+"/useraddition/"+selectedVal,
        success: function(data){                    
          document.getElementById("pss").innerHTML = data;
        }

    });
    });
});
</script>
@endsection