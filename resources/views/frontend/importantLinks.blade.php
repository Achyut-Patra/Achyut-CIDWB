@extends('frontend.layouts.master')
@section('content')
 <div class="row" style="border:solid 0px;">
	<div class="container-fluid"><!-- Content -->
	<div class="org_struct">
		<h2 class="page-title">Important Links</h2>
			<div class="col-sm-6 bodylinkcontent" style="border:solid 0px;">
				<div class="bodylink">
					<ol class="circles-list">
						<li><a class="link_ext" data-toggle="modal" data-target="#ext_link" href="http://india.gov.in" target="_new">National Portal of India</a></li>
						<li><a class="link_ext" data-toggle="modal" data-target="#ext_link" href="http://wb.gov.in" target="_new">Banglar Mukh</a></li>
						<li><a class="link_ext" data-toggle="modal" data-target="#ext_link" href="http://wbpolice.gov.in" target="_new">West Bengal Police</a></li>
						<li><a class="link_ext" data-toggle="modal" data-target="#ext_link" href="http://kolkatapolice.gov.in"  target="_new">Kolkata Police</a></li>
						<li><a class="link_ext" data-toggle="modal" data-target="#ext_link" href="http://www.wbfin.gov.in" target="_new">Finance Department, Government of West Bengal</a></li>
						<li><a class="link_ext" data-toggle="modal" data-target="#ext_link" href="http://www.calcuttatelephones.com" target="_new">Calcutta Telephones</a></li>
						<li><a class="link_ext" data-toggle="modal" data-target="#ext_link" href="http://www.wbacb.gov.in" target="_new">Anti Corruption Branch, Government of West Bengal</a></li>
						<li><a class="link_ext" data-toggle="modal" data-target="#ext_link" href="http://www.wbpcrime.info" target="_new">Crime Criminal Search</a></li>
						<li><a class="link_ext" data-toggle="modal" data-target="#ext_link" href="https://www.police.gov.in/" target="_new">Indian Police in Service of Nation</a></li>
						<li><a class="link_ext" data-toggle="modal" data-target="#ext_link" href="http://www.calcuttatelephones.com" target="_new">Calcutta Telephones</a></li>
						<li><a class="link_ext" data-toggle="modal" data-target="#ext_link" href="http://www.wbacb.gov.in" target="_new">Anti Corruption Branch, Government of West Bengal</a></li>
						<li><a class="link_ext" data-toggle="modal" data-target="#ext_link" href="http://www.wbpcrime.info" target="_new">Crime Criminal Search</a></li>
						<li><a class="link_ext" data-toggle="modal" data-target="#ext_link" href="https://www.police.gov.in/" target="_new">Indian Police in Service of Nation</a></li>
					</ol>
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

<script type="text/javascript"> 
$(document).ready(function() {
  //toggle the component with class accordion_body
  $(".accordion_head").click(function() {
    if ($('.accordion_body').is(':visible')) {
      $(".accordion_body").slideUp(300);
      $(".plusminus").text('+');
    }
    if ($(this).next(".accordion_body").is(':visible')) {
      $(this).next(".accordion_body").slideUp(300);
      $(this).children(".plusminus").text('+');
    } else {
      $(this).next(".accordion_body").slideDown(300);
      $(this).children(".plusminus").text('-');
    }
  });
});
</script>
<!-- Payal -->
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/jQuery.scrollText.js"></script>
<script src="js/ext_link.js"></script>
<script type="text/javascript">
$(function(){ 
  $("#autoscroll").scrollText({
	'duration': 2000
  });
});
</script>
<!-- endPayal -->
@endsection