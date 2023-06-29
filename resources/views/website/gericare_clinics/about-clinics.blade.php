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
<li class="active">Clinics</li>    
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
At Geri Care clinics, our approach to treatment is guided by senior Geriatricians who take a multidisciplinary approach. Our staff is specifically trained in medical, psychosocial, and preventive care that is tailored to the unique needs of older adults. <br><br>
By taking a holistic approach, we aim to improve the quality of life and overall wellness of not just our patients but also their families and caregivers. <br>

In addition to general medical care, we conduct comprehensive assessments and treatments for conditions that primarily affect older adults - such as memory loss, falls, urinary problems, vision and hearing loss, advance care planning, caregiver support, and medication safety. 
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

</div>

</div>
</div>
</section> 


<section class="abt-the-clinic text-center pt-0">
<div class="container">
<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="common-heading text-center">
<h2>Our Clinics</h2>
</div>

<div class="clinics-lsts">

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="" class="w-100" />
<h4>Falls prevention (Osteoporosis) clinic</h4>
<div class="clnc-dtt">
<h5>Falls prevention (Osteoporosis) clinic</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget egestas mattis eu quis amet. Justo volutpat malesuad</p>
</div>
</div>

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="" class="w-100" />
<h4>Memory clinic</h4>
<div class="clnc-dtt">
<h5>Falls prevention (Osteoporosis) clinic</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget egestas mattis eu quis amet. Justo volutpat malesuad</p>
</div>
</div>

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="" class="w-100" />
<h4>Incontinence clinic (Urinary)</h4>
<div class="clnc-dtt">
<h5>Falls prevention (Osteoporosis) clinic</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget egestas mattis eu quis amet. Justo volutpat malesuad</p>
</div>
</div>

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="" class="w-100" />
<h4>Preventive Geriatric health check</h4>
<div class="clnc-dtt">
<h5>Falls prevention (Osteoporosis) clinic</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget egestas mattis eu quis amet. Justo volutpat malesuad</p>
</div>
</div>

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="" class="w-100" />
<h4>Adult vaccination clinic</h4>
<div class="clnc-dtt">
<h5>Falls prevention (Osteoporosis) clinic</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget egestas mattis eu quis amet. Justo volutpat malesuad</p>
</div>
</div>

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="" class="w-100" />
<h4>Dementia care </h4>
<div class="clnc-dtt">
<h5>Falls prevention (Osteoporosis) clinic</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget egestas mattis eu quis amet. Justo volutpat malesuad</p>
</div>
</div>

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="" class="w-100" />
<h4>Seniors Diabetic clinic </h4>
<div class="clnc-dtt">
<h5>Falls prevention (Osteoporosis) clinic</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget egestas mattis eu quis amet. Justo volutpat malesuad</p>
</div>
</div>

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="" class="w-100" />
<h4>Hypertension clinic</h4>
<div class="clnc-dtt">
<h5>Falls prevention (Osteoporosis) clinic</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget egestas mattis eu quis amet. Justo volutpat malesuad</p>
</div>
</div>

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="" class="w-100" />
<h4>Sleep disorder Clinic</h4>
<div class="clnc-dtt">
<h5>Falls prevention (Osteoporosis) clinic</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget egestas mattis eu quis amet. Justo volutpat malesuad</p>
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