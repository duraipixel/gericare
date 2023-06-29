@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/inner-banner-1.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>Welcome to India's First
<span>Multi-Speciality Hospital <br>
for Senior Citizens</span>
</h4>
<ul>
<li><a href="../">Home</a></li>   
<li>></li>  
<li>Assisted Living</li>  
<li>></li>     
<li class="active">Services we Offer</li>    
</ul>
</div>
</div>
</div>
</div>

</section> 


<section class="home-gericare">
<div class="container">
<div class="row">

<div class="col-lg-12">
<div class="seconday-paragraph text-center">
Come home to Geri Care, to be treated and cared for by internationally renowned Geriatricians who take a multidisciplinary and passionate approach to treatment and rehabilitation of seniors. At Geri Care, we believe in a rather personalised approach to caring for seniors and offer a range of specialities to keep them in the brink of their health.
</div>
</div>



<div class="col-lg-12">

<div class="serveces-doctrs">

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-1.png') }}" alt="" class="" />
<h4> Our Doctors </h4>
<p> Select a doctor and schedule an appointment. </p>
<a href=""> View All Doctors <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt="" class="" />
<h4> Our Location </h4>
<p> No.8, Dr. Nair Road, Behind Vani Mahal, T.Nagar, Chennai - 600 017 </p>
<a href="{{ url('contact-us') }}"> View on maps <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-3.png') }}" alt="" class="" />
<h4> Appointments </h4>
<p> Book your appointment with us for a smooth and hassle free experience </p>
<a href="{{ url('book-appointment') }}"> Book Your Appointment <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>

</div>

<div class="ambulance-runing text-end">
<h4>24x7 Emergency Ambulance Available <br> Call Us at: <span>+91 44 4061 4061</span></h4>

<div class="ambuloo">
<img src="{{ asset('/public/website/assets/images/ambulance-servie.gif') }}" alt="" class="" />
</div>

</div>

</div>

</div>
</div>
</section>


<section class="care-fromus p-0">
<div class="container">
<div class="row">

<div class="col-lg-12 row age-bars">

<div class="col-lg-6">

</div>

<div class="col-lg-6">
    
<div class="common-heading">
<h2>Why Choose <br>
Geri Care Hospital</h2>
</div>

<div class="age-stemp">

<div class="age-layer">
<h4>Experienced Doctors</h4>
<p>Our geriatric hospital is open 24x7 with round-the-clock staff to provide care and support for elderly patients.</p>
</div>

<div class="age-layer">
<h4>Experienced Doctors</h4>
<p>Our geriatric hospital is open 24x7 with round-the-clock staff to provide care and support for elderly patients.</p>
</div>

<div class="age-layer">
<h4>Experienced Doctors</h4>
<p>Our geriatric hospital is open 24x7 with round-the-clock staff to provide care and support for elderly patients.</p>
</div>

<div class="age-layer">
<h4>Experienced Doctors</h4>
<p>Our geriatric hospital is open 24x7 with round-the-clock staff to provide care and support for elderly patients.</p>
</div>

</div>

<div class="common-button drk">
<a href="">Know More</a>
</div>

</div>

</div>

</div>
</div>
</section>


<section class="gericare-services">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="common-heading text-center">
<h2>Our Services</h2>
</div>

<div class="servce-strture">

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-1.jpg') }}" alt="" class="" />
<h4>24x7 Emergency & Trauma</h4>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-2.jpg') }}" alt="" class="" />
<h4>On-Call Ambulance Services</h4>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<h4>Pharmacy</h4>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-2.jpg') }}" alt="" class="" />
<h4>On-Call Ambulance Services</h4>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-1.jpg') }}" alt="" class="" />
<h4>24x7 Emergency & Trauma</h4>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<h4>Pharmacy</h4>
</div>

</div>

</div>

</div>
</div>
</section>

<section class="gericare-deprtmnts">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="common-heading text-center">
<h2>Our Departments</h2>
</div>

<div class="gericare-lstsdeprtment">

<div class="deptmnt gentric-systems">

<ul>
<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Cardiology</span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-2.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Cardiology</span>    
</li>
</ul>

</div>

<div class="deptmnt gentric-systems">

<ul>
<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-3.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Cardiology</span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-4.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Cardiology</span>    
</li>
</ul>

</div>

<div class="deptmnt gentric-systems">

<ul>
<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-5.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Cardiology</span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-6.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Cardiology</span>    
</li>
</ul>

</div>

<div class="deptmnt gentric-systems">

<ul>
<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Cardiology</span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-2.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Cardiology</span>    
</li>
</ul>

</div>

<div class="deptmnt gentric-systems">

<ul>
<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Cardiology</span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Cardiology</span>    
</li>
</ul>

</div>

</div>

</div>

</div>
</div>
</section>

<section class="panel-of-experts">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="common-heading text-center">
<h2>Our Panel of Expert Doctors</h2>
</div>

<div class="panell-drts">

<div class="dr-panel">
<img src="{{ asset('/public/website/assets/images/gericare-doctor-1.jpg') }}" alt="" class="">
<div class="de-detl">
<h4>Dr. Srinivas</h4>
<span>Geriatrician</span>
</div> 
<div class="de-detl-btn">
<a href=""> Book Appointment </a>
<a href=""> <i class="fa fa-eye" aria-hidden="true"></i> </a>
</div>
</div>

<div class="dr-panel">
<img src="{{ asset('/public/website/assets/images/gericare-doctor-2.jpg') }}" alt="" class="">
<div class="de-detl">
<h4>Dr. Srinivas</h4>
<span>Geriatrician</span>
</div> 
<div class="de-detl-btn">
<a href=""> Book Appointment </a>
<a href=""> <i class="fa fa-eye" aria-hidden="true"></i> </a>
</div>
</div>

<div class="dr-panel">
<img src="{{ asset('/public/website/assets/images/gericare-doctor-3.jpg') }}" alt="" class="">
<div class="de-detl">
<h4>Dr. Srinivas</h4>
<span>Geriatrician</span>
</div> 
<div class="de-detl-btn">
<a href=""> Book Appointment </a>
<a href=""> <i class="fa fa-eye" aria-hidden="true"></i> </a>
</div>
</div>

<div class="dr-panel">
<img src="{{ asset('/public/website/assets/images/gericare-doctor-4.jpg') }}" alt="" class="">
<div class="de-detl">
<h4>Dr. Srinivas</h4>
<span>Geriatrician</span>
</div> 
<div class="de-detl-btn">
<a href=""> Book Appointment </a>
<a href=""> <i class="fa fa-eye" aria-hidden="true"></i> </a>
</div>
</div>

<div class="dr-panel">
<img src="{{ asset('/public/website/assets/images/gericare-doctor-5.jpg') }}" alt="" class="">
<div class="de-detl">
<h4>Dr. Srinivas</h4>
<span>Geriatrician</span>
</div>  
<div class="de-detl-btn">
<a href=""> Book Appointment </a>
<a href=""> <i class="fa fa-eye" aria-hidden="true"></i> </a>
</div>
</div> 

</div>

</div>

</div>
</div>
</section>

<section class="world-facilities">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-5">

<div class="common-heading text-start">
<h2>World Class Facilities<br>
chosen for you</h2>
</div>

<div class="common-para text-start">
<p class="mb-0">At Geri Care, we have invested in state of the<br> art facilities and world class amenities to<br> ensure quality, timely, accurate and reliable<br> services to the elders, who require a positive<br> mindset and emotional support.</p>
</div>

</div>

<div class="col-lg-7">

<div class="facilities-slider text-end">

<div cass="facity-img">
<img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="" class="">
</div>

<div cass="facity-img">
<img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="" class="">
</div>

</div>

</div>

</div>
</div>
</section>


<section class="from-pressroom">
<div class="container">
<div class="row">

<div class="col-lg-2">

<div class="grp-str-title">
<div class="common-heading text-start">
<h2>From Our <br>
Press Room</h2>
</div>

<div class="common-button drk">
<a href="">View All Posts</a>
</div>

</div>

</div>

<div class="col-lg-10">

<div class="grps-stemp">

<div class="grp-str">
<div class="grp-img">
<img src="{{ asset('/public/website/assets/images/grp-1.jpg') }}" alt="" class="w-100"> 
<div class="post-dte">
<h4>09<span>May</span></h4>
</div>
</div>
<div class="grp-cnt text-start">
<span>First-of-its-kind Assisted Living center lauched in RA Puram </span>
</div>
</div>

<div class="grp-str">
<div class="grp-img">
<img src="{{ asset('/public/website/assets/images/grp-2.jpg') }}" alt="" class="w-100"> 
<div class="post-dte">
<h4>08<span>May</span></h4>
</div>
</div>
<div class="grp-cnt text-start">
<span>Specialised hospital for geriatric care launched in Chennai</span>
</div>
</div>

<div class="grp-str">
<div class="grp-img">
<img src="{{ asset('/public/website/assets/images/grp-3.jpg') }}" alt="" class="w-100"> 
<div class="post-dte">
<h4>06<span>May</span></h4>
</div>
</div>
<div class="grp-cnt text-start">
<span>Inauguration Of Gericare Hospital Tnagar – Exclusively for senior citizens</span>
</div>
</div>

</div>
</div>

</div>
</div>
</section>


@include('website.bottomform')

@include('website.mobilebottomform')

@endsection