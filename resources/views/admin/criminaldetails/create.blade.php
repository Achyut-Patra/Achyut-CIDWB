@extends('admin.layouts.master')

@section('content')
<!-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/flatly/bootstrap.min.css"> -->
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

{!! Form::open(array('files' => true, 'route' => config('quickadmin.route').'.criminaldetails.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="naborder">
    <ul class="nav nav-tabs nacriminal">
        <!--<div id="tabs">Add Criminals Details</div>-->
        <li class="nav-item"><a class="nav-link active" href="#tabs-1" data-toggle="tab" aria-selected="true">Basic Details</a></li>
        <li class="nav-item"><a class="nav-link" href="#tabs-2" data-toggle="tab" aria-selected="false">Contact Details</a></li>
        <li class="nav-item"><a class="nav-link" href="#tabs-3" data-toggle="tab" aria-selected="false">Crime Details</a></li>
    </ul>
    <div class="tab-content">
    <div class="tab-pane show active">
        <div class="form-group">
            {!! Form::label('namfst', 'Criminal\'s First Name*', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('namfst', old('namfst'), array('class'=>'form-control','placeholder'=>'First Name')) !!}       
            </div>
            <div class="col-sm-3">
                {!! Form::text('nammddl', old('nammddl'), array('class'=>'form-control','placeholder'=>'Middle Name')) !!}         
            </div>
            <div class="col-sm-3">
                {!! Form::text('namlst', old('namlst'), array('class'=>'form-control','placeholder'=>'Last Name')) !!}         
            </div>
        </div>
        
        <div class="form-group">
            {!! Form::label('namalis', 'Alias Name*', array('class'=>'col-sm-2 control-label')) !!}
            
            <div class="col-sm-7">
                {!! Form::text('namalis', old('namalis'), array('class'=>'form-control','placeholder'=>'Alias Name')) !!}               
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('dbrth', 'Date Of Birth', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-3">
                {!! Form::text('dbrth', old('dbrth'), array('class'=>'form-control datepicker')) !!}
            </div>
            
            {!! Form::label('agee', 'Age', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-1">
                {!! Form::text('agee', old('agee'), array('class'=>'form-control','placeholder'=>'Age')) !!}              
            </div>
            
            {!! Form::label('gend', 'Gender*', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-2">       
                {!! Form::text('gend', old('gend'), array('class'=>'form-control')) !!}
            </div>
        </div>
        
        <div class="form-group">
            {!! Form::label('ffstname', 'Father\'s First Name', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('ffstname', old('ffstname'), array('class'=>'form-control','placeholder'=>'First Name')) !!}           
            </div>
            <div class="col-sm-3">
                {!! Form::text('fmstname', old('fmstname'), array('class'=>'form-control','placeholder'=>'Middle Name')) !!}       
            </div>
            <div class="col-sm-3">
                {!! Form::text('flstname', old('flstname'), array('class'=>'form-control','placeholder'=>'Last Name')) !!}      
            </div>
        </div>
        
        <div class="form-group">
            {!! Form::label('lsidefce', 'Criminal Photograph', array('class'=>'col-sm-2 control-label')) !!}
            
            <div class="col-sm-4">
            	<p class="help-block">Left Side Face</p>
            	<img src="{{ url('/img/criminal_left.png') }}">
                {!! Form::file('lsidefce') !!}
                            
            </div>
            <div class="col-sm-3">
            	<p class="help-block">Front Side Face</p>
                <img src="{{ url('/img/criminal_front.png') }}">
                {!! Form::file('fsidefce') !!}

            </div>
            <div class="col-sm-3">
            	<p class="help-block">Right Side Face</p> 
                <img src="{{ url('/img/criminal_right.png') }}">
                {!! Form::file('rsidefce') !!}

            </div>
        </div>
        
        
    </div>
    <div class="tab-pane">
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label"><strong>Permanent Address:</strong></label>
        </div>  
        <div class="form-group">
            {!! Form::label('peradd', 'Permanent Address', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-10">
                {!! Form::textarea('peradd', old('peradd'), array('class'=>'form-control','placeholder'=>'Permanent Address', 'rows' => 3, 'cols' => 50)) !!}             
            </div>          
        </div>      
        <div class="form-group">
            {!! Form::label('perstat', 'Select State', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('perstat', old('perstat'), array('class'=>'form-control')) !!}   
            </div>
            {!! Form::label('perpin', 'PIN code', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('perpin', old('perpin'), array('class'=>'form-control','placeholder'=>'Pin Code')) !!}         
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('perdis', 'Select District', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('perdis', old('perdis'), array('class'=>'form-control')) !!}
            </div>
            {!! Form::label('perpsta', 'Select Police Station', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('perpsta', old('perpsta'), array('class'=>'form-control','placeholder'=>'Police Station')) !!}
            </div>
        </div>
        
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label"><strong>Present Address:</strong></label>
        </div>  
        <div class="form-group">
            {!! Form::label('preadd', 'Present Address', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-10">
                {!! Form::textarea('preadd', old('preadd'), array('class'=>'form-control', 'rows' => 3, 'cols' => 50)) !!}          
            </div>          
        </div>      
        <div class="form-group">
            {!! Form::label('prestat', 'Select State', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('prestat', old('prestat'), array('class'=>'form-control')) !!}  
            </div>
            <label for="ffstname" class="col-sm-2 control-label">Pin Code</label>
            <div class="col-sm-4">
                <input class="form-control" name="prepin" type="text" id="prepin" placeholder="Pin Code">           
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('predis', 'Select District', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('predis', old('predis'), array('class'=>'form-control')) !!}
            </div>
             {!! Form::label('prepsta', 'Select Police Station', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('prepsta', old('prepsta'), array('class'=>'form-control')) !!}
            </div>
        </div>
        
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label"><strong>Contact Number:</strong></label>
        </div>  
                
        <div class="form-group">
            {!! Form::label('mobi', 'Mobile Number', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('mobi', old('mobi'), array('class'=>'form-control','placeholder'=>'Mobile Number')) !!}   
            </div>
            {!! Form::label('lndn', 'Landline Number', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('lndn', old('lndn'), array('class'=>'form-control','placeholder'=>'Landline Number')) !!}           
            </div>
        </div>
        
    </div>
    
    <div class="tab-pane">
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label"><strong>Crime Information:</strong></label>
        </div>  
        <div class="form-group">
            {!! Form::label('crmdet', 'Crime Details*', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-10">
                 {!! Form::textarea('crmdet', old('crmdet'), array('class'=>'form-control ckeditor', 'rows' => 10, 'cols' => 50)) !!}
            </div>          
        </div>      
        <div class="form-group">
            {!! Form::label('modoper', 'Modus Operandi', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('modoper', old('modoper'), array('class'=>'form-control','placeholder'=>'Modus Operandi')) !!}
            </div>
            {!! Form::label('dofcrm', 'Date Of Crime**', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
               {!! Form::text('dbrth', old('dbrth'), array('class'=>'form-control datepicker')) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('crmtyp', 'Crime Type', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('crmtyp', old('crmtyp'), array('class'=>'form-control')) !!}
            </div>
            {!! Form::label('opertare', 'Operation Area*', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('opertare', old('opertare'), array('class'=>'form-control','placeholder'=>'Operation Area')) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('ir', 'IR', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('ir', old('ir'), array('class'=>'form-control','placeholder'=>'IR')) !!}
            </div>
            {!! Form::label('remrk', 'Remarks', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('remrk', old('remrk'), array('class'=>'form-control','placeholder'=>'Remarks')) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('cseref', 'Case Reference**', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('cseref', old('cseref'), array('class'=>'form-control','placeholder'=>'Case Reference')) !!}
            </div>
            {!! Form::label('rewann', 'Announcement of Reward', array('class'=>'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                {!! Form::text('rewann', old('rewann'), array('class'=>'form-control','placeholder'=>'Announcement of Reward')) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    
    </div>
    
</div>

<button class="prevtab btn btn-primary">Prev</button>
<button class="nexttab btn btn-danger">Next</button>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
 <script type="text/javascript">
      /* -------------------------------------------------------------
            bootstrapTabControl
        ------------------------------------------------------------- */
        function bootstrapTabControl(){
            var i, items = $('.nav-link'), pane = $('.tab-pane');
            // next
            $('.nexttab').on('click', function(){
                for(i = 0; i < items.length; i++){
                    if($(items[i]).hasClass('active') == true){
                        break;
                    }
                }
                if(i < items.length - 1){
                    // for tab
                    $(items[i]).removeClass('active');
                    $(items[i+1]).addClass('active');
                    // for pane
                    $(pane[i]).removeClass('show active');
                    $(pane[i+1]).addClass('show active');
                }

            });
            // Prev
            $('.prevtab').on('click', function(){
                for(i = 0; i < items.length; i++){
                    if($(items[i]).hasClass('active') == true){
                        break;
                    }
                }
                if(i != 0){
                    // for tab
                    $(items[i]).removeClass('active');
                    $(items[i-1]).addClass('active');
                    // for pane
                    $(pane[i]).removeClass('show active');
                    $(pane[i-1]).addClass('show active');
                }
            });
        }
        bootstrapTabControl();
    </script>
    <style type="text/css">
    	.nacriminal{
    		background-color: #4f4e51;
    	}
    	.naborder{
    		border: solid;
    		border-color: #428bca;
    	}
    </style>
@endsection