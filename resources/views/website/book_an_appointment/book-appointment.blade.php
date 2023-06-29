@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/inner-banner-4.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>Make an appointment
<span>We will send you a confirmation <br>
within 24 hours.</span>
</h4>
<ul>
<li><a href="./">Home</a></li>   
<li> > </li>  
<li>Book an Appointment</li>   
</ul>
</div>
</div>
</div>
</div>

</section> 

<section class="book-apptmnt">
<div class="container">
<div class="row">

<div class="col-lg-5">
<div class="common-heading">
<h2>One of a Kind Geriatric Care</h2>
</div> 

<div class="gentric-systems">

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
  <span> Geriatric Oncology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-3.png') }}" alt="" class=""> 
  </div>
  <span> Radiation Oncology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-4.png') }}" alt="" class=""> 
  </div>
  <span> Orthogeriatrics </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-5.png') }}" alt="" class=""> 
  </div>
  <span> Gastroenterology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-6.png') }}" alt="" class=""> 
  </div>
  <span> Neurology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="" class=""> 
  </div>
  <span> Surgery </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-8.png') }}" alt="" class=""> 
  </div>
  <span> Pulmonology </span>    
</li>

</ul> 

</div>

<div class="common-button drk mt-40">
<a href="">Explore Gericare Hospitals</a>
</div>
</div>

<div class="col-lg-7">

<div class="book-appontmnt">

<div class="common-heading tetx-light">
<h2>Book your Appointment</h2>
</div> 

<div class="">
								<form class="appointment-form" name="AppointmentForm" method="post" onSubmit="return valid_chk4()" action="#" id="AppointmentForm">
								<input type="hidden" name="form_name" value="book_an_appointment" >
  							<div class="row">
								<div class="col-sm-12 col-md-6 col-lg-6">
									<label class="text-light">Appointment For (required)<span class="text-danger">*</span></label>
									<select class="form-control jsrequired" id="services" name="services">
                    <option value="">Select your Service</option>
                    <option value="Doctor Visit">Geri Care Hospital</option>
										<option value="Nursing Care">Geri Care Assisted Living</option>
										<option value="Physio Care">Geri Care Consultation</option>	
										<optgroup label="Geri Homecare">
										<option value="Doctor Visit">Doctor Visit</option>
										<option value="Nursing Care">Nursing Care</option>
										<option value="Physio Care">Physio Care</option>		
										<option value="Attender Assistance">Attender Assistance</option>
										<option value="Geriatric Counselling">Geriatric Counselling</option>
										<option value="Home Blood Collection">Home Blood Collection</option>
										<option value="Lab Test">Lab Test</option>
										<option value="Vaccination">Vaccination</option>
										<option value="Dental Services">Dental Services</option>
										<option value="Medicine Delivery">Medicine Delivery</option>
										<option value="Non-Emergency Ambulance">Non-Emergency Ambulance</option>
										 </optgroup>
										</select>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<div class="datepicker date">
										<label class="text-light">Appointment Date (required)<span class="text-danger">*</span></label>	
										<input type="text" placeholder="Select Date" name="appointment_date" class="form-control" id="fecha1">
										<div class="input-group-append">
										<span class="input-group-text"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<label class="text-light">Appointment Time (required)<span class="text-danger">*</span></label>	
									<input type="text" class="form-control" name="appointment_time"  id="timepicker"/>
								</div> 
								<div class="col-sm-12 col-md-6 col-lg-6">
									<label class="text-light">Name (required)<span class="text-danger">*</span></label>
									<input type="text" name="name" id="aname" class="form-control" />
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<label class="text-light">Email (required)<span class="text-danger">*</span></label>
									<input type="email" name="email" id="aemail" class="form-control" />
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<label class="text-light">Phone Number (required)<span class="text-danger">*</span></label>
									<input type="tel" id="aphone" name="phone" value="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10">
								</div> 
								<div class="col-sm-12 col-md-12 col-lg-12">
									<label class="text-light">Details</label>
									<textarea class="form-control" name="details"></textarea>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-data cnt text-start clearfix"><input type="submit" name="submit" value="Submit"> </div>
										</div>
							</div>
						</form>
								</div>

</div>

</div>

</div>
</div>
</section>

@endsection