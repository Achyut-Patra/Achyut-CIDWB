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

{!! Form::model($criminaldetails, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.criminaldetails.update', $criminaldetails->id))) !!}

<div class="form-group">
    {!! Form::label('namfst', 'Criminal\'s First Name*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('namfst', old('namfst',$criminaldetails->namfst), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('nammddl', 'Middle Name*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('nammddl', old('nammddl',$criminaldetails->nammddl), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('namlst', 'Last Name*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('namlst', old('namlst',$criminaldetails->namlst), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('namalis', 'Alias Name*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('namalis', old('namalis',$criminaldetails->namalis), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('dbrth', 'Date Of Birth', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('dbrth', old('dbrth',$criminaldetails->dbrth), array('class'=>'form-control datepicker')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('agee', 'Age', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('agee', old('agee',$criminaldetails->agee), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('ffstname', 'Father\'s First Name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('ffstname', old('ffstname',$criminaldetails->ffstname), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('fmstname', 'Father\'s Middle Name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('fmstname', old('fmstname',$criminaldetails->fmstname), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('flstname', 'Father\'s Last Name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('flstname', old('flstname',$criminaldetails->flstname), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('lsidefce', 'Criminal Photograph', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('lsidefce') !!}
        <p class="help-block">Left Side Face</p>
    </div>
</div><div class="form-group">
    {!! Form::label('fsidefce', 'Criminal Photograph', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('fsidefce') !!}
        <p class="help-block">Front Face</p>
    </div>
</div><div class="form-group">
    {!! Form::label('rsidefce', 'Right Side Face', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('rsidefce') !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('peradd', 'Permanent Address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('peradd', old('peradd',$criminaldetails->peradd), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('perstat', 'Select State', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('perstat', old('perstat',$criminaldetails->perstat), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('perdis', 'Select District', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('perdis', old('perdis',$criminaldetails->perdis), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('perpsta', 'Select Police Station', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('perpsta', old('perpsta',$criminaldetails->perpsta), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('perpin', 'PIN code', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('perpin', old('perpin',$criminaldetails->perpin), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('preadd', 'Present Address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('preadd', old('preadd',$criminaldetails->preadd), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('prestat', 'Select State', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('prestat', old('prestat',$criminaldetails->prestat), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('predis', 'Select District', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('predis', old('predis',$criminaldetails->predis), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('prepsta', 'Select Police Station', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('prepsta', old('prepsta',$criminaldetails->prepsta), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('mobi', 'Mobile Number', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('mobi', old('mobi',$criminaldetails->mobi), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('lndn', 'Landline Number', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('lndn', old('lndn',$criminaldetails->lndn), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('crmdet', 'Crime Details*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('crmdet', old('crmdet',$criminaldetails->crmdet), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('modoper', 'Modus Operandi', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('modoper', old('modoper',$criminaldetails->modoper), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('dofcrm', 'Date Of Crime**', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('dofcrm', old('dofcrm',$criminaldetails->dofcrm), array('class'=>'form-control datepicker')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('crmtyp', 'Crime Type', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('crmtyp', old('crmtyp',$criminaldetails->crmtyp), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('opertare', 'Operation Area*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('opertare', old('opertare',$criminaldetails->opertare), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('ir', 'IR', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('ir', old('ir',$criminaldetails->ir), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('remrk', 'Remarks', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('remrk', old('remrk',$criminaldetails->remrk), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('cseref', 'Case Reference**', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('cseref', old('cseref',$criminaldetails->cseref), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('rewann', 'Announcement of Reward', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('rewann', old('rewann',$criminaldetails->rewann), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('gend', 'Gender*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('gend', old('gend',$criminaldetails->gend), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.criminaldetails.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection