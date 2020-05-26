@extends('frontend.layouts.master')
@section('content')
<div class="row tops">
    
    <div class="col-sm-7">
      
      <!-- Start Slider -->

      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"><level class="slide-box">1</level></li>
          <li data-target="#demo" data-slide-to="1"><level class="slide-box">2</level></li>
          <li data-target="#demo" data-slide-to="2"><level class="slide-box">3</level></li>
          <li data-target="#demo" data-slide-to="3"><level class="slide-box">4</level></li>
        </ul> 

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/banner.jpeg" alt="Los Angeles" >
          </div>
          <div class="carousel-item">
            <img src="img/slider1.jpg" alt="Los Angeles" >
          </div>
          <div class="carousel-item">
            <img src="img/slider2.jpg" alt="Chicago">
          </div>
          <div class="carousel-item">
            <img src="img/slider3.jpg" alt="New York">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

      </div>

      <!-- End Slider -->
      <!-- Indicators -->
    </div>
    
    <div class="col-sm-5" style="text-align: justify;">
      <p class="welcome-text"><b>Welcome to CID West Bengal</b></p>
      <p class="marg">The Indian Police Commission in 1902-03 recommended constituting Criminal Investigation Department (CID) in every province and on 21 March 1905 the Government of India accepted the proposal of the Commission. The Government issued instructions to start the department in every province by 1907. </b></p>
    </div>

  </div>

   <!-- Start Lower Bannner  -->
  <div class="row tops">
    
    <!-- Start Left Side Bar  -->
    <div class="col-sm-3 citizen">
        <div class="corner">
           <div class="leftbar">
              <p class="head-text">CITIZEN CORNER</p>
           </div>
           </br>
           <ul type="none" class="cornerli">
             <li><i class='fa fa-angle-double-right'></i> Daily Arrests <hr class="hrcss"></li>
             <li><i class='fa fa-angle-double-right'></i> Most Wanted Criminals <hr class="hrcss"></li>
             <li><i class='fa fa-angle-double-right'></i> Submit a Tips <hr class="hrcss"></li>
             <li><i class='fa fa-angle-double-right'></i> Report an Incident <hr class="hrcss"></li>
             <li><i class='fa fa-angle-double-right'></i> Report for Stolen Mobile <hr class="hrcss"></li>
             <li><i class='fa fa-angle-double-right'></i> Safety Tips <hr class="hrcss"></li>
             <li><i class='fa fa-angle-double-right'></i> FIR Search <hr class="hrcss"></li>
             <li><i class='fa fa-angle-double-right'></i> Vehicle Search <hr class="hrcss"></li>
             <li><i class='fa fa-angle-double-right'></i> Assist the Police <hr class="hrcss"></li>
             <li><i class='fa fa-angle-double-right'></i> Police Station Map <hr class="hrcss"></li>
           </ul>
        </div>


        <div class="divisions">
           <div class="leftbar">
            <p class="head-text">DIVISIONS & UNITS</p>
          </div>
           </br>
           <ul type="none" class="cornerli">
             <li><i class='fa fa-angle-double-right'></i> Investigation Units <hr class="hrcss"></li>
             <li><i class='fa fa-angle-double-right'></i> DD Units <hr class="hrcss"></li>
             <li><i class='fa fa-angle-double-right'></i> Spetialized Units <hr class="hrcss"></li>
             <li><i class='fa fa-angle-double-right'></i> Forensic Units <hr class="hrcss"></li>
             <li><i class='fa fa-angle-double-right'></i> Administrative Offices <hr class="hrcss"></li>
           </ul>
        </div>

    </div>
    <!-- End Left Side Bar  -->

    <!-- Start Middle Bar  -->
    <div class="col-sm-6 citizen">
      
      <div class="criminals">
        <h4>Criminal Investigation Department, West Bengal</h4>        
        <p><strong>Message from Our ADG CID</strong></p>
        <div class="row">
          <div class="col-sm-3 citizen">
            <img class="adgpic" src="img/Shri_Siddh_Nath_Gupta.jpg" alt="Rajeev Kumar" >
          </div>
          <div class="col-sm-9 citizen textt">
            <p>The Indian Police Commission in 1902-03 recommended constituting Criminal Investigation Department (CID) in every province and on 21 March 1905 the Government of India accepted the proposal of the Commission. The Government issued instructions to start the department in every province by 1907. In Bengal, Criminal Investigation Department (CID) came into existence on 1st April 1906 under Mr. C.W.C. Plowden.</p>
            <p><b>...Shri Sidh Nath Gupta</b></p>
          </div>
        </div>
      </div>
      <div class="criminals tops">
           <div class="leftbar">
            <p class="head-achive">OUR ACHIEVEMENTS</p>
           </div>       
      </div>
      <!-- Start Accordian Section-->
       <div class="tops divisions" style="border: solid 0px;">

        <div class="accordion_container">
          <div class="accordion_head"><i class="fa fa-trophy" style="font-size:20px;"></i>  CID Officers recovered Explosive detanators and gelatin stic..<span class="plusminus">-</span></div>
          <div class="accordion_body" style="display: block;">
            <p>Beliatore PS Case No. 23/2019 dated 17.03.2019 u/s 467/468/471/120B IPC r/s sec. 4/5/6 ES Act. On 16.03.2019 officer and force of CID, WB held raid and intercepted one truck having No. JH 10BJ 845 loaded with explosive and arrested one driver cum owner namely Nishant Kumar s/o Mahadeo Mahato of House No. 123 village Urro, PO. Sabalpur, PS Sariya, District Giridh, Jharkhan and also seized 65 carton. <a href="#">Read More..</a></p>
          </div>
          <div class="accordion_head"><i class="fa fa-trophy" style="font-size:20px;"></i>  CID Officers recovered Explosive detanators and gelatin stic..<span class="plusminus">+</span></div>
          <div class="accordion_body" style="display: none;">
            <p>Saltora PS Case No. 15/2019 dated 14.03.2019 u/s 4/5/6 of Explosive Substance Act, 1908 r/w Section 120B IPC : On the night of 13/14.3.2019 acting on a source information officer and force of CID, WB held raid at village Kastora under PS Saltora, Bankura and arrested one person namely Saimuddin Khan @ Sima s/o Late Badal Khan of village Kastora, Sadhan Rangamati, PS Saltora, District Bankura and<a href="#">Read More..</a></p>
          </div>
          <div class="accordion_head"><i class="fa fa-trophy" style="font-size:20px;"></i>  CID Officers recovered Explosive detanators and gelatin stic..<span class="plusminus">+</span></div>
          <div class="accordion_body" style="display: none;">
            <p>Hogolberia PS Case No. 38/2019 dated 09.03.2019 u/s 21C/25/29 and 20(b)(ii)(C) NDPS Act. On 09.03.19 Officer and force of CID, WB held raid at Hogolberia PS area and arrested two accused persons namely (i) Sahidul Khan @ Sayeed (34) s/o Sukuruddin Khan of Village Kuchaidanga Madhyapara, Jamsherpur, PS Hogolberia, District Nadia (ii) Ganesh Biswas (40) s/o Late Rampada Biswas of Village Kuchaidanga.<a href="#">Read More..</a></p>
          </div>
          <div class="accordion_head"><i class="fa fa-trophy" style="font-size:20px;"></i>  First Accordian Head<span class="plusminus">+</span></div>
          <div class="accordion_body" style="display: none;">
            <p>Alipurduar PS Case No. 43/2019 dated 08.02.2019 u/s 120B/167/217/218/ 409/168/471 IPC r/s sec. 25/26 Indian Telegraph Act, R/S 66/72/72(A) of Information Technology Act, 2000. On 13.02.2019 officer and force of CID, WB held raid and arrested one person namely Dilip Kumar Das s/o Late Krishna Kanta Das of 13/ 11Deshbandhu Road, PS Patuli, Kolkata- 86..<a href="#">Read More..</a></p>
          </div>
          <div class="accordion_head"><i class="fa fa-trophy" style="font-size:20px;"></i>  CID Officers recovered Explosive detanators and gelatin stic..<span class="plusminus">+</span></div>
          <div class="accordion_body" style="display: none;">
            <p>Diamond Harbour PS Case No. 35/19 dated 14.02.2019 u/s 419/420/467/468/471/ 120B IPC. On 15.02.19 Officer and force of CID, WB held raid and arrested seven accused persons namely (i) Paritosh Nandi (34) @ Ripan s/o Subhas Chandra Nandi of Flat No. 204 Swapan Apartment, Satgachi Nagendra Nath Road, PS Dum Dum, District North 24 Parganas, (ii) Rajesh Sahoo (38) s/o Jagannath Sahoo of 169, 2 No. Bach.<a href="#">Read More..</a></p>
          </div>
          <div class="accordion_head"><i class="fa fa-trophy" style="font-size:20px;"></i>  CID Officers recovered Explosive detanators and gelatin stic..<span class="plusminus">+</span></div>
          <div class="accordion_body" style="display: none;">
            <p>Jibantala PS Case No. 401/2018 dated 07.09.2018 u/s 21C/24/29 NDPS Act. On 08.02.19 Officer and force of CID, WB held raid at Karimpur PS area and arrested one accused person namely (i) Rintu Khan (32) s/o Sukuruddin Khan of Village Gurbhanga, PS Thanarpara, District Nadia and seized 52 kgs (approx) of Ganja from his possession. <a href="#">Read More..</a></p>
          </div>
          <div class="accordion_head"><i class="fa fa-trophy" style="font-size:20px;"></i>  First Accordian Head<span class="plusminus">+</span></div>
          <div class="accordion_body" style="display: none;">
            <p>Kharagpur (T) PS Case No. 11/19 dated 10.01.19 u/s 21/27 NDPS Act. On 10.01.2019 at 00.05 hrs acting on a source information officer and force of Kharagpur (T) PS held raid in a open filed at Nalipara near Jawara Mandir, PS Kharagpur (T) and found two persons were selling Heroin. Seeing Police party the accused persons tried to flee but after chase Police party managed to apprehend them. During se.<a href="#">Read More..</a></p>
          </div>
          <div class="accordion_head"><i class="fa fa-trophy" style="font-size:20px;"></i>  CID Officers recovered Explosive detanators and gelatin stic..<span class="plusminus">+</span></div>
          <div class="accordion_body" style="display: none;">
            <p>Patashpur PS Case No. 06/19 dated 03.01.2019 u/s 419/420/120B IPC & section 8/12 of Prevention of Corruption Act. On 03.01.19 officer and force of CID, WB held raid and arrested seven accused persons namely (i) Jayanta Kr. Ghorai (42) s/o Benoy Krishna of PS Patashpur, District Purba Medinipur, (ii) Jaynarayan Mondal (40) s/o Late Gunadhar Mondal of Mritunjoynagar, PS Sagar, District South 24 Parg.<a href="#">Read More..</a></p>
          </div>
          <div class="accordion_head"><i class="fa fa-trophy" style="font-size:20px;"></i>  CID Officers recovered Explosive detanators and gelatin stic..<span class="plusminus">+</span></div>
          <div class="accordion_body" style="display: none;">
            <p>Phansidewa PS Case No. 01/19 dated 01.01.2019 u/s 20(b)(ii)(C) of NDPS Act. On 01.01.19 officer and force of CID, WB held raid near Panchabati Hotel, Mahananda Barrage, Fulbari Road under PS Phansidewa and arrested two accused persons namely (i) Md. Mijamuddin Sayyed (37) s/o Ash Mahmmad of Village Haraiya, PS Dudhare, District Basti,Uttar Pradesh and (ii) Junait Ahamed Chowdhury (19) s/o Ahamed C. <a href="#">Read More..</a></p>
          </div>
        </div>

        

       </div>


      <!-- End Accordian Section-->
        <div style="text-align: center;font-size: 12px;"><a href="">VIEW ALL ACHIEVEMENTS</a></div>
    </div>
    <!-- End Middle Bar  -->

    <!-- Start Right Bar  -->
    <div class="col-sm-3 citizen">
      <div class="office-notice">
         <div class="leftbar"><p class="head-text">OFFICIAL NOTICE</p></div>
         </br>
         <div  id="autoscroll" class="container">
         <ul type="none" class="cornerli">
           <li><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i> Security related equipments under MPF Schem.... <strong><a href="#">Read More</a></strong><label>______________________________</label></li>
           
           <li><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i>e-NIT for hiring of junior consultancy service....<strong><a href="#">Read More</a></strong><label>______________________________</label></li>
           
           <li><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i>Advertisement for Engagement Of Senior Soft...<strong><a href="#">Read More</a></strong><label>______________________________</label></li>

            <!--<li><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i>Procurement of security related items under MPF Scheme 2019-20...<strong><a href="#">Read More</a></strong><label>______________________________</label></li>

           <li><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i>Advertisement No. 11/CID/GL-I Dated 17/12/2019- application<strong><a href="#">Read More</a></strong><label>______________________________</label></li>

           <li><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i>Procurement of security related items under MPF Scheme 2019-20... <strong><a href="#">Read More</a></strong><label>______________________________</label></li> -->

         </ul>
       </div>
         <div class="noticetxt"><a href="#">VIEW ALL NOTICE</a></div>
      </div>
      <!-- safe drive image -->
      <div>
        <img src="img/safe_drive_safe_life.jpg" class="safe-drive">
      </div>
    </div>
    <!-- End Right Bar  --> 
  </div>
  <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/jQuery.scrollText.js"></script>
  <script type="text/javascript">
    $(function(){ 
      $("#autoscroll").scrollText({
        'duration': 3000
      });
    });
  </script>
  @endsection