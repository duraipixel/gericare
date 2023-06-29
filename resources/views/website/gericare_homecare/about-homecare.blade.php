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
<li>Home Care</li>  
<li>></li>     
<li class="active">About Home Care</li>    
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

<!-- <div class="ambulance-runing text-end">
<h4>24x7 Emergency Ambulance Available <br> Call Us at: <span>+91 44 4061 4061</span></h4>

<div class="ambuloo">
<img src="{{ asset('/public/website/assets/images/ambulance-servie.gif') }}" alt="" class="" />
</div>

</div> -->

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
<img src="{{ asset('/public/website/assets/images/serv-1.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Call Center</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-2.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Care coordinator reaches out </h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Geriatric Physiotherapy at Home</h4>
<p>Geriatric physiotherapy involves specialized physical therapy techniques ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-2.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Psychiatrist Home Visit</h4>
<p>During these visits, we assess symptoms, prescribe appropriate medications ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-1.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Orthopedician Home Visit</h4>
<p>Our Orthopedic specialists visit patients at their homes to assess and manage ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Dentist Home Visit</h4>
<p>Our geriatric dentistry experts offer dental care at the patient's home, by performing ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>IV Fluids Monitoring</h4>
<p>In certain situations, such as dehydration or specific medical conditions, the administration ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Urinary Catheterization</h4>
<p>When appropriate, our professionals can perform urinary catheterization at home. ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Outpatient Antibiotic Administration </h4>
<p>In cases where patients require intravenous antibiotic therapy but do not need ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Wound Care and Dressing</h4>
<p>Skilled healthcare professionals can provide wound care and dressing services ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>ECG at Home</h4>
<p>Electrocardiogram (ECG) is a common diagnostic test for assessing heart function. ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Skilled Nursing Care</h4>
<p>Our skilled nurses can perform various medical tasks, including wound care, ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Home Sample Collection</h4>
<p>To avoid the inconvenience of visiting a laboratory or clinic, healthcare  ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Live-in Care</h4>
<p>For patients who require round-the-clock care, nursing attendants can ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Care for Bedridden Patients</h4>
<p> Our skilled nurses and nursing attendants can provide care for bedridden ...</p>
<a href="">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
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