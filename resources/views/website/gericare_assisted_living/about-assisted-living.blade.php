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
<li class="active">About Assisted Living</li>    
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
<a id="servce-cre"></a>
</div>
</div>
</section> 

<section class="server-ces text-center p-0">
<div class="container">

<div class="row align-items-center">

<div class="common-heading">
<h2>Our Services</h2>
</div>

</div>
</div>

</section>

<section class="event-layer bg-layer-1">
<div class="container">

<div class="row align-items-center">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="spotlght-lists">

<img class="resp-onsive" src="{{ asset('/public/website/assets/images/bg-2.jpg') }}" alt="" >

<div class="common-heads aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
<h2> Respite Care </h2>
</div>

<div class="common-parra aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
<p>Established by a team of qualified and compassionate Geriatricians, with more than three decades of experience, Geri Care brings distinct and dedicated senior care services of global standards within the confines of your own home. We serve the elders in your family with utmost respect and compassion and give them the same kind of warmth and care that you would.</p>
</div> 
			  
</div>
</div>

</div>
</div>
</section>  

<section class="event-layer bg-layer-2 cont-right">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="spotlght-lists text-end">
<img class="resp-onsive" src="{{ asset('/public/website/assets/images/bg-2.jpg') }}" alt="" >
<div class="common-heads text-drk aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
<h2> Rehabilitative & Restorative care </h2>
</div>

<div class="common-parra text-drk aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
<p>Established by a team of qualified and compassionate Geriatricians, with more than three decades of experience, Geri Care brings distinct and dedicated senior care services of global standards within the confines of your own home. We serve the elders in your family with utmost respect and compassion and give them the same kind of warmth and care that you would.</p>
</div>
			  
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

</div>

</div>
</div>
</section> 

<section class="event-layer bg-layer-1">
<div class="container">

<div class="row align-items-center">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="spotlght-lists">

<img class="resp-onsive" src="{{ asset('/public/website/assets/images/bg-2.jpg') }}" alt="" >

<div class="common-heads aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
<h2> Dementia care </h2>
</div>

<div class="common-parra aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
<p>Established by a team of qualified and compassionate Geriatricians, with more than three decades of experience, Geri Care brings distinct and dedicated senior care services of global standards within the confines of your own home. We serve the elders in your family with utmost respect and compassion and give them the same kind of warmth and care that you would.</p>
</div> 
			  
</div>
</div>

</div>
</div>
</section>  

<section class="event-layer bg-layer-2 cont-right">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="spotlght-lists text-end">
<img class="resp-onsive" src="{{ asset('/public/website/assets/images/bg-2.jpg') }}" alt="" >
<div class="common-heads text-drk aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
<h2> Transitional Care </h2>
</div>

<div class="common-parra text-drk aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
<p>Established by a team of qualified and compassionate Geriatricians, with more than three decades of experience, Geri Care brings distinct and dedicated senior care services of global standards within the confines of your own home. We serve the elders in your family with utmost respect and compassion and give them the same kind of warmth and care that you would.</p>
</div>
			  
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

</div>

</div>
</div>
</section> 

<section class="event-layer bg-layer-1">
<div class="container">

<div class="row align-items-center">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="spotlght-lists">

<img class="resp-onsive" src="{{ asset('/public/website/assets/images/bg-2.jpg') }}" alt="" >

<div class="common-heads aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
<h2> Post hospitalization </h2>
</div>

<div class="common-parra aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
<p>Established by a team of qualified and compassionate Geriatricians, with more than three decades of experience, Geri Care brings distinct and dedicated senior care services of global standards within the confines of your own home. We serve the elders in your family with utmost respect and compassion and give them the same kind of warmth and care that you would.</p>
</div> 
			  
</div>
</div>

</div>
</div>
</section>   

<section class="event-layer bg-layer-2 cont-right">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="spotlght-lists text-end">
<img class="resp-onsive" src="{{ asset('/public/website/assets/images/bg-2.jpg') }}" alt="" >
<div class="common-heads text-drk aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
<h2> Palliative Care </h2>
</div>

<div class="common-parra text-drk aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
<p>Established by a team of qualified and compassionate Geriatricians, with more than three decades of experience, Geri Care brings distinct and dedicated senior care services of global standards within the confines of your own home. We serve the elders in your family with utmost respect and compassion and give them the same kind of warmth and care that you would.</p>
</div>
			  
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

</div>

</div>
</div>
</section>  

<section class="event-layer bg-layer-1">
<div class="container">

<div class="row align-items-center">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="spotlght-lists">

<img class="resp-onsive" src="{{ asset('/public/website/assets/images/bg-2.jpg') }}" alt="" >

<div class="common-heads aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
<h2> Post-Surgery Care </h2>
</div>

<div class="common-parra aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
<p>Established by a team of qualified and compassionate Geriatricians, with more than three decades of experience, Geri Care brings distinct and dedicated senior care services of global standards within the confines of your own home. We serve the elders in your family with utmost respect and compassion and give them the same kind of warmth and care that you would.</p>
</div> 
			  
</div>
</div>
<a id="ass-faci"></a>
</div>
</div>
</section> 

<section class="our-faacilities text-center">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    

<div class="common-heading">
<h2>Our Facilities</h2>
</div>
<div class="gentric-systems">

<ul>

<li>
<div class="geric-img">
<img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
</div>
<span> Initial Comprehensive Geriatric Assessment (CGA) of the client </span>    
</li>

<li>
<div class="geric-img">
<img src="{{ asset('/public/website/assets/images/icn-2.png') }}" alt="" class=""> 
</div>
<span> Daily Doctor visit </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-3.png') }}" alt="" class=""> 
  </div>
  <span> Weekly Geriatrician Doctor visit and medical review </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-4.png') }}" alt="" class=""> 
  </div>
  <span> Medication management </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-5.png') }}" alt="" class=""> 
  </div>
  <span> 24 x 7 skilled nursing availability </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-6.png') }}" alt="" class=""> 
  </div>
  <span> Nutritious Dietitian Curated Food menu </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="" class=""> 
  </div>
  <span> Indoor and outdoor recreational activities </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-8.png') }}" alt="" class=""> 
  </div>
  <span> Group Yoga and Group Physiotherapy </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-8.png') }}" alt="" class=""> 
  </div>
  <span> Periodic communication to family members on Whatsapp. </span>    
</li>

</ul> 

</div>

</div>

</div>
</div>
</section>

<section class="gallery-tabulars text-center">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-12 col-md-12 col-sm-12">

<div class="common-heading">
<h2>Gallery</h2>
</div>

<div class="galerry-lsts">

<ul class="nav nav-pills mb-3 text-center" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">RA Puram</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Thoraipakkam</button>
  </li> 
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

<div class="galleruie-slider-rapuram text-end">

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gall-1.jpg') }}" alt="" class="">
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gall-2.jpg') }}" alt="" class="">
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gall-1.jpg') }}" alt="" class="">
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gall-2.jpg') }}" alt="" class="">
</div> 

</div>
  
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">



  <div class="galleruie-slider-royapuram text-end">

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gall-3.jpg') }}" alt="" class="">
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gall-4.jpg') }}" alt="" class="">
</div>

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gall-3.jpg') }}" alt="" class="">
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gall-4.jpg') }}" alt="" class="">
</div>  

</div>
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