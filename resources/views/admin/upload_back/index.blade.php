@extends('admin.layouts.master')

@section('content')

<p>{!! link_to_route(config('quickadmin.route').'.upload.create', trans('quickadmin::templates.templates-view_index-add_new') , null, array('class' => 'btn btn-success')) !!}</p>

@if ($upload->count())
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">{{ trans('quickadmin::templates.templates-view_index-list') }}</div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-hover table-responsive datatable" id="datatable">
                <thead>
                    <tr>
                        <th>
                            {!! Form::checkbox('delete_all',1,false,['class' => 'mass']) !!}
                        </th>
                        <!-- <th>Type</th> -->
						<th>Title</th>
						<th>Details</th>
						<!--<th>File Upload</th>-->
						<th>Date</th>
						<th>Download</th>
						<th>Status</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($upload as $row)
                        <tr>
                            <td>
                                {!! Form::checkbox('del-'.$row->id,1,false,['class' => 'single','data-id'=> $row->id]) !!}
                            </td>
                            <!-- <td>{{ $row->tbluploadtypes['upload_type'] }}</td> -->
							<td>{{ $row->title }}</td>
							<td>{{ $row->description }}</td>
							<!--<td align="center">
							@if($row->file_name != '')<img src="{{ asset('uploads') . '/'.  $row->file_name }}">@endif
							</td>-->
							<td>{{ $row->created_at }}</td>
							<td align="center">
								<a href="{{ asset('uploads') . '/'.  $row->file_name }}" target="_blank"><i class="fa fa-download fa-lg"></i></a>
							</td>
							<td align="center">
							@if($row->flag==1)
                            <span id="span-{{ $row->id }}">
                              <a id='{{ $row->id }}' href="block/{{ md5($row->id) }}" data-target="#" class="btn btn-info2 btn-sm list-active" >
                              <!--<a id='{{ $row->id }}' href="http://localhost/cidwb/public/activeinactive/{{ $row->id }}/unblock" data-target="#" class="btn btn-info btn-sm list-active" >-->
                                <i class="fa fa-toggle-on"></i>Active
                              </a>
                            </span>
                        @else
                            <span id="span-{{ $row->id }}">
                              <a id='{{ $row->id }}' href="unblock/{{ md5($row->id) }}" data-target="#" class='btn btn-default btn-sm list-inactive' >
                                <i class="fa fa-toggle-off"></i>Inactive
                              </a>
                            </span>
                        @endif
							</td>
                            <td>
                                {!! link_to_route(config('quickadmin.route').'.upload.edit', trans('quickadmin::templates.templates-view_index-edit'), array($row->id), array('class' => 'btn btn-xs btn-info btnedit')) !!}
                                {!! Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => "return confirm('".trans("quickadmin::templates.templates-view_index-are_you_sure")."');",  'route' => array(config('quickadmin.route').'.upload.destroy', $row->id))) !!}
                                
								{!! Form::submit(trans('quickadmin::templates.templates-view_index-delete'), array('class' => 'btn btn-xs btn-danger btnedit')) !!}
                                {!! Form::close() !!}
								
						
								
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-xs-12">
                    <button class="btn btn-danger" id="delete">
                        {{ trans('quickadmin::templates.templates-view_index-delete_checked') }}
                    </button>
                </div>
            </div>
            {!! Form::open(['route' => config('quickadmin.route').'.upload.massDelete', 'method' => 'post', 'id' => 'massDelete']) !!}
                <input type="hidden" id="send" name="toDelete">
            {!! Form::close() !!}
        </div>
	</div>
@else
    {{ trans('quickadmin::templates.templates-view_index-no_entries_found') }}
@endif

@endsection

@section('javascript')
    <script>
        $(document).ready(function () {
            $('#delete').click(function () {
                if (window.confirm('{{ trans('quickadmin::templates.templates-view_index-are_you_sure') }}')) {
                    var send = $('#send');
                    var mass = $('.mass').is(":checked");
                    if (mass == true) {
                        send.val('mass');
                    } else {
                        var toDelete = [];
                        $('.single').each(function () {
                            if ($(this).is(":checked")) {
                                toDelete.push($(this).data('id'));
                            }
                        });
                        send.val(JSON.stringify(toDelete));
                    }
                    $('#massDelete').submit();
                }
            });
        });
    </script>
@stop