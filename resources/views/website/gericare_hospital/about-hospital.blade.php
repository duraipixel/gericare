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
<li>Geri Care Hospitals</li>  
<li>></li>     
<li class="active">About Hospital</li>    
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

<div class="col-lg-12 age-bars">

<div class="row">

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
<a  id="hospital-departments"></a>
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
  <span> Geriatric Oncology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-2.png') }}" alt="" class=""> 
  </div>
  <span> Radiation Oncology </span>    
</li>
</ul>

</div>

<div class="deptmnt gentric-systems">

<ul>
<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-3.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Urology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-4.png') }}" alt="" class=""> 
  </div>
  <span> Orthogeriatrics </span>    
</li>
</ul>

</div>

<div class="deptmnt gentric-systems">

<ul>
<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-5.png') }}" alt="" class=""> 
  </div>
  <span> Gasteroentrology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-6.png') }}" alt="" class=""> 
  </div>
  <span> Neurology </span>    
</li>
</ul>

</div>

<div class="deptmnt gentric-systems">

<ul>
<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> Surgery </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-2.png') }}" alt="" class=""> 
  </div>
  <span> Pulmonology </span>    
</li>
</ul>

</div>

<div class="deptmnt gentric-systems">

<ul>
<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Psychiatry </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> ICU </span>    
</li>
</ul>

</div>

<div class="deptmnt gentric-systems">

<ul>
<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> Dematology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> Vascular Surgery </span>    
</li>
</ul>

</div>

<div class="deptmnt gentric-systems">

<ul>
<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> Uro Gynaecology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> Lab Services </span>    
</li>
</ul>

</div>

<div class="deptmnt gentric-systems">

<ul>
<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> Physiotherapy </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> Surgical Oncology  </span>    
</li>
</ul>

</div>

<div class="deptmnt gentric-systems">

<ul>
<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> Nephrology and Dialysis 24x7 </span>    
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
<a href="{{ url('book-appointment') }}"> Book Appointment </a>
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
<a href="{{ url('book-appointment') }}"> Book Appointment </a>
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
<a href="{{ url('book-appointment') }}"> Book Appointment </a>
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
<a href="{{ url('book-appointment') }}"> Book Appointment </a>
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
<a href="{{ url('book-appointment') }}"> Book Appointment </a>
<a href=""> <i class="fa fa-eye" aria-hidden="true"></i> </a>
</div>
</div> 

</div>

<div class="cmn-brdrd-btn text-center">
<a href="{{ url('/gericare-hospital/hospital-doctors') }}"> View All Doctors </a>
</div>

</div>
<a  id="hospital-faclitiys"></a>
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

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="" class="">
<span>State of the art ICU</span>
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="" class="">
<span>State of the art ICU</span>
</div>

</div>

</div>

</div>
</div>
</section>


<section class="location-fixer">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-3">
<div class="common-heading text-start">
<h2>Our <br> Location</h2>
</div>
</div>

<div class="col-lg-9"> 

<div class="serveces-doctrs">

<div class="servce">
<img src="{{ asset('/public/website/assets/images/location-gericare-1.jpg') }}" alt="" class="w-100" />
<div class="servrse-contest">
<h4> Geri Care Hospital - T Nagar </h4>
<p> No.8, Dr. Nair Road, Behind Vani<br> Mahal, T.Nagar, Chennai - 600 017 </p>
<a href=""> View on maps <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/location-gericare-2.jpg') }}" alt="" class="w-100" />
<div class="servrse-contest">
<h4> Geri Care Hospital - Adambakkam </h4>
<p> 100 Feet Velachery, 100 Feet Rd, Ward F,<br> Block 17, Adambakkam, Chennai - 600 088 </p>
<a href="{{ url('contact-us') }}"> View on maps <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>
</div> 

</div>

</div>

</div>
</div>
</section> 

<section class="peace-of-mind">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
<div class="pseofmnd">
We Do Whatever It Takes To<br> 
Bring You Peace of Mind
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<div class="pseofmnd-lst text-end">
<ul>
<li>
<a href="">
<img src="{{ asset('/public/website/assets/images/wp-cta.png') }}" alt="" class="" />
<span>24*7 SERVICE AVAILABLE</span>  
+91 44 4061 4061
</a>
</li>
<li>
<a href="">
<img src="{{ asset('/public/website/assets/images/call-cta.png') }}" alt="" class="" /> 
Request Call Back
</a>
</li>
</ul>
</div>
</div>

</div>
</div>
</section>


@include('website.bottomform')

@include('website.mobilebottomform')

@endsection