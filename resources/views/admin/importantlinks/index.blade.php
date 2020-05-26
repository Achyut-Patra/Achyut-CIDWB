@extends('admin.layouts.master')

@section('content')

<p>{!! link_to_route(config('quickadmin.route').'.importantlinks.create', trans('quickadmin::templates.templates-view_index-add_new') , null, array('class' => 'btn btn-success')) !!}</p>

<div class="alert_box"></div>

@if ($importantlinks->count())
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
                        <th>Link Title</th>
<th>Link Url</th>
<th>Sort Order</th>
<th>Status</th>

                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($importantlinks as $row)
                        <tr>
                            <td>
                                {!! Form::checkbox('del-'.$row->id,1,false,['class' => 'single','data-id'=> $row->id]) !!}
                            </td>
                            <td>{{ $row->link_title }}</td>
							<td>{{ $row->link_url }}</td>
							<td>
							<!--{{ $row->sort_order }}-->
							<input type="text" value="{{ $row->sort_order }}" name="sort_order" id="order_{{ $row->id }}" class="form-control input-sm" maxlength="3" />
							<span class="input-group-btn" >
							   <a class="btn btn-sm order_set btmord" href="{{ $row->id }}"><i class="fa fa-floppy-o"></i> Save</a>
							</span>
							</td>
							<td>
							<!--{{ $row->flag }}-->							
						@if($row->flag==1)
							<span id="span-{{ $row->id }}">
							  <a id='{{ $row->id }}' href="block/{{ md5($row->id) }}" data-target="#" class="btn btn-info btn-sm list-active" >
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
                                {!! link_to_route(config('quickadmin.route').'.importantlinks.edit', trans('quickadmin::templates.templates-view_index-edit'), array($row->id), array('class' => 'btn btn-xs btn-info btnedit')) !!}
                                {!! Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => "return confirm('".trans("quickadmin::templates.templates-view_index-are_you_sure")."');",  'route' => array(config('quickadmin.route').'.importantlinks.destroy', $row->id))) !!}
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
            {!! Form::open(['route' => config('quickadmin.route').'.importantlinks.massDelete', 'method' => 'post', 'id' => 'massDelete']) !!}
                <input type="hidden" id="send" name="toDelete">
            {!! Form::close() !!}
        </div>
	</div>
	<input type="hidden" id="url" value="{{ url('/') }}">
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
		
		
//	=====================Start Active/In-Active Coding==================
		
$(document).on("click",".order_set", function(e){
	 e.preventDefault(); 
	 var attr = $(this).attr('href');
	 var orderval = $("#order_"+attr).val();
	 var base_url = $("#url").val();
	 //alert(base_url);
		$.ajax({
			//url: 'http://localhost/cidwb/public/saveorder/'+ attr+'/'+orderval,
			url: base_url+'/saveorder/'+ attr+'/'+orderval,
			success: function(result){			   
				$(".alert_box").html("<div class='alert alert-success' role='alert'><i class='fa fa-check'></i>Ordering Updated Successfully </div>")
		   } 
		});
	});
			
$(document).ready(function(){
    $(document).on("click", ".list-inactive", function(e){  //alert("Hii");
     e.preventDefault();  
     //alert('at inactive'); 
     var attr = $(this).attr('href');
     var idval= $(this).attr('id');
	 var base_url = $("#url").val();
     //var url = 'upload/activeinactivelink/'+ attr;
	 //var url = 'activeinactiveofficial';
     //alert(url);
     var innertext="<a class='btn btn-info btn-sm list-active'  href='block/"+idval+"' id='"+idval+"' data-target='#'><i class='fa fa-toggle-on'></i>Active</a>";
     //alert(innertext);
        $.ajax({
        	//url: url,
			//url: 'http://localhost/cidwb/public/activeinactivelink/'+idval+'/block',
			url: base_url+'/activeinactivelink/'+idval+'/block',
        	success: function(result){
				//alert(result);
				if(result=='done'){
               		$('#span-'+idval).html(innertext);
				}
	       } 
        });
    }); 

    $(document).on("click",".list-active", function(e){  //alert("Naba Hii99");
     e.preventDefault(); 
     //alert('at active');   
     var attr = $(this).attr('href');
     var idval= $(this).attr('id'); //alert(attr); 
	 var base_url = $("#url").val();
     //var url = 'admin/upload/edit/active_inactive/'+ attr;
     var url = 'activeinactiveofficial';
     //alert(url);
     var innertext="<a class='btn btn-default btn-sm list-inactive'  href='unblock/"+idval+"' id='"+idval+"' data-target='#'><i class='fa fa-toggle-off'></i>Inactive</a>";

        $.ajax({
            //url: 'http://localhost/cidwb/public/activeinactivelink/'+idval+'/unblock',
            url: base_url+'/activeinactivelink/'+idval+'/unblock',
            success: function(result){
				//alert(result);
				if(result=='done'){
                	$('#span-'+idval).html(innertext);
				}
           } 
        });
    });   

    $(".delete_report").on("click", function(){
        $("#delete_report").modal();
        var attr = $(this).attr('href');
        $("#reason_submit").click(function(){
            var url = 'admin/upload/edit/ajax_list_delete/'+ attr;

                $.ajax({
                    url: url,
                    success: function(result){
                        $("#delete_report").modal('hide');
                        //window.location.reload(true);
                        
                        $('#tr_'+attr).hide();
                    }
                });//end of ajax
        });
    });

    
});		
		
//	=====================Start Active/In-Active Coding==================	
		
    </script>
@stop