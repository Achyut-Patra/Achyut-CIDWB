@extends('admin.layouts.master')

@section('content')
 <p>{!! link_to_route('users.create', trans('quickadmin::admin.users-index-add_new'), [], ['class' => 'btn btn-success']) !!}</p> 
 

@if ($des->count())
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
                        <th>User ID</th>
<!-- <th>Password</th> -->
<th>Department Type</th>
<th>District</th>
<th>Police Station</th>
<!-- <th>Stake ID</th>
<th>Super Password</th> -->
<th>Status</th>
<!-- <th>Email Id</th> -->
<!-- <th>Last Login</th>
<th>Last Login IP</th> -->
<!-- <th>User Contact No</th> -->
<!-- <th>Password Updated</th> -->
<!-- <th>Location Key</th> -->

                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($des as $row)
                        <tr>
                            <td>
                                {!! Form::checkbox('del-'.$row->id,1,false,['class' => 'single','data-id'=> $row->id]) !!}
                            </td>
                            <td>{{ $row->locationkey }}</td>
<!-- <td>{{ $row->password }}</td> -->
<td>{{ $row->stakedetails['stake_name'] }}</td>
<td>{{ $row->district['district_name'] }}</td>
<td>{{ $row->ps['ps_name'] }}</td>
<!-- <td>{{ $row->stake_id_fk }}</td> -->
<!-- <td>{{ $row->super_password }}</td> -->
@if($row->flag==1)
<td>Active</td>
@else
<td>Inactive</td>
@endif
<!-- <td>{{ $row->last_login }}</td> -->
<!-- <td>{{ $row->last_login_ip }}</td> -->
<!-- <td>{{ $row->user_contact_no }}</td> -->
<!-- <td>{{ $row->last_pw_update_time }}</td> -->
<!-- <td>{{ $row->locationkey_hash }}</td> -->

                            <td>
                                {!! link_to_route('users.edit', trans('quickadmin::admin.users-index-edit'), [$row->id], ['class' => 'btn btn-xs btn-info']) !!}
                                {!! Form::open(['style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => 'return confirm(\'' . trans('quickadmin::admin.users-index-are_you_sure') . '\');',  'route' => array('users.destroy', $row->id)]) !!}
                                {!! Form::submit(trans('quickadmin::admin.users-index-delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                
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
            
        </div>
	</div>
@else
    {{ trans('quickadmin::templates.templates-view_index-no_entries_found') }}
@endif

@endsection

