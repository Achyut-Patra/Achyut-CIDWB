@extends('frontend.layouts.master')
@section('content')
  <div class="row tops">
 
    <div class="col-sm-12">
      
      <!-- Inner Page Header -->

     <div class="inrHead">
     <h1> CONTACT US</h1>
       <p>Criminal Investigation Department West Bengal</p>
       
     </div>

     <!-- End Inner Page Header --> 
    </div>
  </div>
  
  <div class="row">
  <div class="container-fluid">
  <div class="col-md-12 aboutCont">
  <h2>Contact With Us</h2>
  <p>Nodal Officer of West Bengal Police [under rule 3 of Information Technology (Procedure and Safeguards for Blocking for Access of Information by Public) Rules, 2009 ]</p>

<p>Shri Surajit Kumar Dey, WBPS, SS(CID WB), holding addl. charge of SS(South), SS(West) && SS(Cyber) CID, West Bengal.</p>
  </div>
 <div>
 

  </div>
 <div class="row">  
  <div class="container-fluid light_bg">
 <div class="col-md-12">
 <h4>Office Location and Address</h4>
 
 <div class="row shut">
 
 <div class="col-md-6">
 
 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14741.417174721631!2d88.3369494!3d22.5283972!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9ca59ef57e9e9867!2sCriminal%20Investigation%20Department%20(CID)!5e0!3m2!1sen!2sin!4v1585232436654!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:#fff 4px solid; -webkit-box-shadow: 1px 0px 4px 4px rgba(204,204,204,.90);
-moz-box-shadow: 1px 0px 4px 4px rgba(204,204,204,.90);
box-shadow: 1px 0px 4px 4px rgba(204,204,204,.90);" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 
 </div>
  <div class="col-md-4">
  <h4>Office Address</h4>
  <ul style="list-style-type:none; margin:0; padding:0;">
  <li> <i class="fa fa-map-marker"></i> <strong>Address :</strong> Bhabani Bhaban, 31 Belvedere Road, Alipore,
Kolkata -700 027</li>
  <li><i class="fa fa-phone"></i> <strong>Phone :</strong> (033) 24506100 / 24506174 </li>
  <li><i class="fa fa-fax"></i> <strong>Fax :</strong>(033) 24506174 </li>
  <li><i class="fa fa-envelope"></i> <strong>Email :</strong>cid-wb@gmail.com</li>
  
  </ul>
  </div>
 
 </div>
 </div>
 </div> 
 </div>
 
 <div>
 
  </div>

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
  <script type="text/javascript">
    $(function(){ 
      $("#autoscroll").scrollText({
        'duration': 2000
      });
    });
  </script>
  <!-- endPayal -->
  @endsection