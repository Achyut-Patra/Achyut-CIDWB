@extends('frontend.layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="css/data_table.css"> 
<link rel="stylesheet" type="text/css" href="css/inrpage_style.css">
<div class="row" style="border:solid 0px;">
	<div class="container-fluid"><!-- Content -->
	<h2 class="page-title">Functions</h2>
	   <div class="margin_top">
			<div class="table-responsive">               	
	
					  <table border="0" id="section_func" class="table">
									<thead>
										<tr>
											<th>Sl.No</th>
											<th width="100">Section Name</th>
											<th>Function</th>
											<th width="200">Officer-in-Charges</th>
											<th width="190">Telephone</th>
										</tr>
									</thead>
									<tbody>
																		 <tr>
											@foreach($functions as $key=>$valfunc)
											<td>{{ $key+1 }}</td>
											<td>{{ $valfunc->section_name }}</td>
											<td>{{ $valfunc->function }}</td>
											<td>{{ $valfunc->officer_incharge }}</td>
											<td>{{ $valfunc->telephone }}<br/></td>
										</tr>
											@endforeach				
									</tbody> 
								</table>
	
		   </div>
	   </div>
	</div>
 </div>
 
<script src="js/data_table.js"></script>
<script src="js/plugin.js"></script>
 @endsection