@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">

<div class="col-lg-12">
<h1>Our Doctors</h1>
<ul>
<li><a href=""> Home </a></li>
<li> > </li>
<li> Geri Care Hospitals </li>
<li> > </li>
<li><a href=""> Doctors </a></li>
<li> > </li>
<li class="active"> Dr. Lakshmipathy Ramesh </li>
</ul>
</div>

</div>
</div>
</section>

<section class="doctor-details-contest">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="row">
<div class="col-lg-7">

<div class="row dctr-detilsbox">

<div class="col-lg-4">
<div class="doc-tor-img">
<img src="{{ asset('/public/website/assets/images/det-dcotor-1.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. Lakshmipathy Ramesh<span>Geriatrician, Founder & Director</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Experience <span> 30+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span> M.D (Geriatrics)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Languages <span> Tamil, English, Hindi</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Profile</h4>
<p>Dr. V. Srinivas is a leading Geriatrician with over three decades of clinical practice in India and the UK. He is the Founder Director of Geri Care organization. He obtained MRCP degree (1992) and diploma in Geriatric medicine (1991) from the Royal College of physicians, UK. He already had MD in General Medicine (1988) and MBBS (1984) from Kilpauk Medical College Chennai.</p>
</div>

<div class="main-contdvshon">
<h4>Detailed Experience</h4>
<ul>
<li>Consultant Psychiatrist, Department of Psychiatry at Gericare Hospital, Chennai (06/2022 – Present)</li>
<li>Consultant Psychiatrist, Department of Psychiatry at Kauvery Hospital, Chennai (12/2021 - 05/2022)</li>
<li>Consultant Psychiatrist,Psychiatry and Deaddiction Services at Malout Deaddiction Centre, Punjab (12/2020 - 11/2021)</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Professional Memberships</h4>
<ul>
<li>Indian Psychiatric Society</li>
<li>Indian Psychiatric Society – North Zone</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Awards & Accolades</h4>
<ul>
<li>Murugappan award by Indian Psychiatric Society for best thesis work. - ANCIPS 2019</li>
<li>Prefrontal Cortical Activity In Children With ADHD: A Functional Near Infrared Spectroscopy
 (fNIRS) Study</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Work and Presentations</h4>
<ul>
<li>Conducted one among the initial studies in the country on to assess prefrontal cortical activity using fNIRS in children with ADHD as a part of MD Thesis.</li>
<li>Speaker on Childhood Dissociation in Trauma Conclave in AIIMS, New Delhi</li>
<li>Speaker on fNIRS : Scope and Limitations in IIT-AIIMS Joint Workshop conducted at NBRC, Gurgaon</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Research and Publications</h4>
<ul>
<li>Rajkumar S, Balhara YP, Sarkar S. Cannabis-induced psychosis or Cannabis-associated psychosis: Diagnostically no clear winner. J Mental Health Hum Behav 2016;21:55-7</li>
<li>Kumar S, Singh S, Singh K, Rajkumar S, Balhara YPS. Prevalence and pattern of problematic internet use among engineering students from different colleges in India. Indian J Psychiatry. 2019 Nov-Dec;61(6):578-583</li>
<li>Balhara YPS, Kumar S, Singh S, Singh K, Rajkumar S. Challenges with use of internet use duration criteria as a marker of problematic internet use: Observations based on the receiver-operator curve-based analysis of data from the students. Asian J Psychiatr. 2021 Oct;64:102770. doi:10.1016/j.ajp.2021.102770. Epub 2021 Jul 14. PMID: 34274816.</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Additional information</h4>
<ul>
<li>Was part of team as Research Officer, developing Online Course module on Methadone Maintenance Treatment by NDDTC, New Delhi</li>
<li>Organized multiple conferences/CMEs/national symposium including World Congress of Social Psychiatry, 2016 , Neuromodulation Workshop and Certificate Course - 2018 , 2019 under guidance of Department of Psychiatry and NDDTC, AIIMS.</li>
<li>Elected General Secretary of RDA AIIMS, 2020</li>
</ul>
</div>

</div>

<div class="col-lg-5">
    
<div class="form-detilsbox text-center">
<h4>Book Your Appointment</h4>
<form class="appointment-form" name="AppointmentForm" method="post" onSubmit="return valid_chk4()" action="#" id="AppointmentForm">
								<input type="hidden" name="form_name" value="book_an_appointment" >
  							<div class="row"> 
                                
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="text" name="name" id="aname" class="form-control" placeholder="Dr.Srinivas" readonly/>
								</div>
                                
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="text" name="name" id="aname" class="form-control" placeholder="Name *" />
								</div> 
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="email" name="email" id="aemail" class="form-control" placeholder="Email *" />
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="tel" id="aphone" name="phone" value="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" placeholder="Phone *">
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<div class="datepicker date"> 
										<input type="text" placeholder="Select Date" name="appointment_date" class="form-control" id="fecha1 " placeholder="Date *">
										<div class="input-group-append">
										<span class="input-group-text"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6"> 
									<input type="text" class="form-control" name="appointment_time"  id="timepicker"/ placeholder="Select Time *">
								</div> 
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<textarea class="form-control" name="details" placeholder="Message"></textarea>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-data cnt text-center clearfix"><input type="submit" name="submit" value="Submit"> </div>
										</div>
							</div>
						</form>
</div>

</div>

</div>
</div>

</div>
</div>
</section>
 

@endsection