@extends('frontend.layouts.master')
@section('content')
<div class="row" style="border:solid 0px;">
 	<div class="container-fluid"><!-- Content -->
	 <div class="col-md-12">
	 <h2 class="page-title">Organisational Structure CID</h2>
	  <table class="table org_tb">    
    <tbody>
    	@foreach($keyofficial as $valkeyoff)
    	
      <tr>
        <td>
        	@foreach($valkeyoff as $kval)
            <div class="org_elem btn btn-default org_elem_details" id="206" data-toggle="modal" data-target="#myModal">{{ $kval->name }}<br/><span class="rank_span">{{ $kval->officialrank['rank'] }}</span></div>
            @endforeach
        </td>
      </tr>
      @endforeach
      <tr>
      	<td style="padding:50px 10px">
      		<a href="{{ url('organizational_stucture/dsp') }}" class="btn btn-warning">Dy. Superintendents of Police CID</a>&nbsp;&nbsp;
			<a href="{{ url('organizational_stucture/inspector') }}" class="btn btn-success">Inspectors  of Police CID</a>
         </td>
      </tr>
    </tbody>
  </table>
	 </div>


	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
	  
	  <!-- Modal content-->
	  <div class="modal-content">
		<div class="modal-header">
			<div class="modal-title"><h5>Profile of CID Senior Officer</h5></div>
			<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>          
	  </div>
	  <div class="modal-body ajax_load">
	  <!--Start Content-->
	  <table class="table table-bordered officer_details">
		<tbody>
		 <tr>
			<td colspan="2" style="text-align:center;">
			
			<img src="Shri_Siddh_Nath_Gupta,_IPS_1578917723.jpg" height="200px">

			</td>
		 </tr>
		 <tr>
			<td width="200"><b>Name:</b></td>
			<td> Shri Siddh Nath Gupta, IPS</td>
		 </tr>
		 <tr>
			<td><b>Date of Birth: </b></td>
			<td> NA</td>
		 </tr>
		 <tr>
			<td><b>Date of Joining in CID WB:</b></td>
			<td> NA</td>
		 </tr>	
		 <tr>
			<td><b>Rank:</b></td>
			<td> ADGP CID West Bengal</td>
		 </tr>
		 <tr>
			<td><b>Phone No (Office):</b></td>
			<td> 

				+91-03324791330<br>			</td>
		 </tr>	
		 <tr>
			<td><b>Supervising the works of <br>following Sections/DD Units:</b></td>
			<td> NA</td>
		 </tr>
		 <tr>
			<td><b>Remarks:</b></td>
			<td> NA</td>
		 </tr>
				     	      
	 </tbody>
</table>
	  <!--End Content-->	  
	  </div>
	 
	</div>
	
	</div>
	</div>
	
 </div>
</div>
 
 <div class="margin_top"></div>
 <!-- Modal Start -->
<div id="ext_link" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	    <div class="modal-title"><h5>This is an External Link</h5></div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>        
      </div>
      <div class="modal-body">
        <p>This link will moving to an external domain. </p>
      </div>
      <div class="modal-footer">
        <a href="#" target="_new" class="btn btn-success ext_link_go" >Go to the Link</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal End -->
<script src="js/ext_link.js"></script>
@endsection