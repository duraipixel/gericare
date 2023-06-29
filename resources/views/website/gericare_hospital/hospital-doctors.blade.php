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
<li class="active"> Our Doctor's </li>    
</ul>
</div>
</div>
</div>
</div>

</section> 

<section class="doctors-page">
<div class="container">
<div class="row justify-content-center">

<div class="col-lg-10"> 

<div class="vertical-tabdetails">

<div class="d-flex align-items-start">

  <div class="nav flex-column nav-pills me-3 sticky-top" id="v-pills-tab" role="tablist" aria-orientation="1">
    <h4> Select Department </h4>
    <div class="doctors-filters-btns mCustomScrollbar">
    <button class="nav-link active" id="v-pills-1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1" type="button" role="tab" aria-controls="v-pills-1" aria-selected="true">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
    </div>    
    Geriatrics
    </button>
    <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2" type="button" role="tab" aria-controls="v-pills-2" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-5.png') }}" alt="" class=""> 
    </div>     
    Geriatric Cardiology
    </button>
    <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3" type="button" role="tab" aria-controls="v-pills-3" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-3.png') }}" alt="" class=""> 
    </div>     
    Geriatric Oncology
    </button>
    <button class="nav-link" id="v-pills-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-4" type="button" role="tab" aria-controls="v-pills-4" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-4.png') }}" alt="" class=""> 
    </div>     
    Geriatric Urology
    </button>
    <button class="nav-link" id="v-pills-5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-5" type="button" role="tab" aria-controls="v-pills-5" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="" class=""> 
    </div>     
    Orthogeriatrics
    </button>
    <button class="nav-link" id="v-pills-6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-6" type="button" role="tab" aria-controls="v-pills-6" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="" class=""> 
    </div>     
    Gastroenterology
    </button>
    <button class="nav-link" id="v-pills-7-tab" data-bs-toggle="pill" data-bs-target="#v-pills-7" type="button" role="tab" aria-controls="v-pills-7" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="" class=""> 
    </div>     
    Neurology
    </button>
    <button class="nav-link" id="v-pills-8-tab" data-bs-toggle="pill" data-bs-target="#v-pills-8" type="button" role="tab" aria-controls="v-pills-8" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="" class=""> 
    </div>     
    Surgery
    </button> 
    <button class="nav-link" id="v-pills-9-tab" data-bs-toggle="pill" data-bs-target="#v-pills-9" type="button" role="tab" aria-controls="v-pills-9" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="" class=""> 
    </div>     
    Pulmonology
    </button> 
    <button class="nav-link" id="v-pills-10-tab" data-bs-toggle="pill" data-bs-target="#v-pills-10" type="button" role="tab" aria-controls="v-pills-10" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="" class=""> 
    </div>     
    Psychiatry
    </button> 
</div>     
  </div>

  <div class="tab-content" id="v-pills-tabContent">
    
    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">

    <h4>Geriatrics</h4>
    <div class="dctrs-detls">
    <div class="dctrm-img">
    <img src="{{ asset('/public/website/assets/images/doctor-img-1.jpg') }}" alt="" class="">
    </div>
    <div class="dctrm-deitals">
    <h3> Dr. Srinivas </h3>
    <h4> Geriatrician, Founder & Director </h4>
    <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> MD, MRCP (UK), DIP.Geriatric Medicine (UK) </h5>
    <a href="{{ url('book-appointment') }}">Book Appointment</a>
    <a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
    </div>
    </div>
     
    <div class="dctrs-detls">
    <div class="dctrm-img">
    <img src="{{ asset('/public/website/assets/images/doctor-img-2.jpg') }}" alt="" class="">
    </div>
    <div class="dctrm-deitals">
    <h3> Dr. Lakshmipathy Ramesh  </h3>
    <h4> Geriatrician </h4>
    <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> M.D (Geriatrics) </h5>
    <a href="{{ url('book-appointment') }}">Book Appointment</a>
    <a href="{{ url('/gericare-hospital/hospital-doctors/dr-lakshmipathy') }}">View Profile</a>
    </div>
    </div>
     
     <div class="dctrs-detls">
     <div class="dctrm-img">
     <img src="{{ asset('/public/website/assets/images/doctor-img-3.jpg') }}" alt="" class="">
     </div>
     <div class="dctrm-deitals">
     <h3> Dr Ashwin </h3>
     <h4> Physician & Diabetologist  </h4>
     <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> </h5>
     <a href="{{ url('book-appointment') }}">Book Appointment</a>
     <a href="">View Profile</a>
     </div>
     </div>
     
     <div class="dctrs-detls">
     <div class="dctrm-img">
     <img src="{{ asset('/public/website/assets/images/doctor-img-4.jpg') }}" alt="" class="">
     </div>
     <div class="dctrm-deitals">
     <h3> Dr K. Vasanth </h3>
     <h4> Geriatrician  </h4>
     <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> MD (Geriatrics) </h5>
     <a href="{{ url('book-appointment') }}">Book Appointment</a>
     <a href="">View Profile</a>
     </div>
     </div>
     
     <div class="dctrs-detls">
     <div class="dctrm-img">
     <img src="{{ asset('/public/website/assets/images/doctor-img-5.jpg') }}" alt="" class="">
     </div>
     <div class="dctrm-deitals">
     <h3> Dr K. Anupuma </h3>
     <h4> Geriatrician  </h4>
     <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class="">  MBBS, MD </h5>
     <a href="{{ url('book-appointment') }}">Book Appointment</a>
     <a href="">View Profile</a>
     </div>
     </div>

    </div>

    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
        
    <h4>Geriatric Cardiology</h4>
    <div class="dctrs-detls">
    <div class="dctrm-img">
    <img src="{{ asset('/public/website/assets/images/doctor-img-6.jpg') }}" alt="" class="">
    </div>
    <div class="dctrm-deitals">
    <h3> Dr. Muthuswamy  </h3>
    <h4> Cardiologist  </h4>
    <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> MB MRCP(UK) MRCP(Ire) FRCP(Lon) MRCP(Edin) FACC </h5>
    <a href="{{ url('book-appointment') }}">Book Appointment</a>
    <a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
    </div>
    </div>
     
    <div class="dctrs-detls">
    <div class="dctrm-img">
    <img src="{{ asset('/public/website/assets/images/doctor-img-7.jpg') }}" alt="" class="">
    </div>
    <div class="dctrm-deitals">
    <h3> Dr. Surendar </h3>
    <h4> Cardiologist  </h4>
    <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> M.D (Geriatrics) </h5>
    <a href="{{ url('book-appointment') }}">Book Appointment</a>
    <a href="">View Profile</a>
    </div>
    </div> 

    </div>

    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
        
    <h4>Geriatric Urology</h4>

    <div class="dctrs-detls">
    <div class="dctrm-img">
    <img src="{{ asset('/public/website/assets/images/doctor-img-8.jpg') }}" alt="" class="">
    </div>
    <div class="dctrm-deitals">
    <h3> Dr. Rejiv Rajendranath  </h3>
    <h4> Medical Oncologist   </h4>
    <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> </h5>
    <a href="{{ url('book-appointment') }}">Book Appointment</a>
    <a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
    </div>
    </div>
     
    <div class="dctrs-detls">
    <div class="dctrm-img">
    <img src="{{ asset('/public/website/assets/images/doctor-img-9.jpg') }}" alt="" class="">
    </div>
    <div class="dctrm-deitals">
    <h3> Dr. Kathiresan </h3>
    <h4> Surgical Oncologist   </h4>
    <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> </h5>
    <a href="{{ url('book-appointment') }}">Book Appointment</a>
    <a href="">View Profile</a>
    </div>
    </div>

<div class="dctrs-detls">
<div class="dctrm-img">
<img src="{{ asset('/public/website/assets/images/doctor-img-10.jpg') }}" alt="" class="">
</div>
<div class="dctrm-deitals">
<h3> Dr. Rajkumar  </h3>
<h4> Surgical Oncologist   </h4>
<h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> </h5>
<a href="{{ url('book-appointment') }}">Book Appointment</a>
<a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
</div>
</div>
 
<div class="dctrs-detls">
<div class="dctrm-img">
<img src="{{ asset('/public/website/assets/images/doctor-img-11.jpg') }}" alt="" class="">
</div>
<div class="dctrm-deitals">
<h3> Dr. Arathi Surendranath </h3>
<h4> Radiation Oncology   </h4>
<h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> DMRT MD</h5>
<a href="{{ url('book-appointment') }}">Book Appointment</a>
<a href="">View Profile</a>
</div>
</div> 

    </div>   
    <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
        
        <h4>Geriatric Urology</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-12.jpg') }}" alt="" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr. Guru Balaji </h3>
        <h4> Urologist   </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> </h5>
        <a href="{{ url('book-appointment') }}">Book Appointment</a>
        <a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
        </div>
        </div>
        </div>
     <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
        
        <h4>Orthogeriatrics</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-13.jpg') }}" alt="" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr. Banu Prakash </h3>
        <h4> Orthogeriatrician    </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""></h5>
        <a href="{{ url('book-appointment') }}">Book Appointment</a>
        <a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
        </div>
        </div>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-14.jpg') }}" alt="" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr. Thiruvengitaprasad </h3>
        <h4> Orthogeriatrician   </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> </h5>
        <a href="{{ url('book-appointment') }}">Book Appointment</a>
        <a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
        </div>
        </div>
      </div> 
      <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
        
        <h4>Gastroenterology</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-15.jpg') }}" alt="" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr. Vikram</h3>
        <h4> Surgical Gastroenterologist   </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""></h5>
        <a href="{{ url('book-appointment') }}">Book Appointment</a>
        <a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
        </div>
        </div>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-16.jpg') }}" alt="" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. U.P.Srinivas </h3>
        <h4> Surgical Gastroenterologist  </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> </h5>
        <a href="{{ url('book-appointment') }}">Book Appointment</a>
        <a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
        </div>
        </div>
      </div>        
      <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
        
        <h4>Neurology</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-17.jpg') }}" alt="" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. Balamurugan</h3>
        <h4> Neurosurgeon   </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""></h5>
        <a href="{{ url('book-appointment') }}">Book Appointment</a>
        <a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
        </div>
        </div>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-18.jpg') }}" alt="" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. Asir Julin</h3>
        <h4> Neurologist   </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> </h5>
        <a href="{{ url('book-appointment') }}">Book Appointment</a>
        <a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
        </div>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
        
        <h4>Surgery</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-19.jpg') }}" alt="" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr. Mohan Rao </h3>
        <h4>General Surgeon  </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> </h5>
        <a href="{{ url('book-appointment') }}">Book Appointment</a>
        <a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
        </div>
        </div>
      </div>  
      <div class="tab-pane fade" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">
        
        <h4>Pulmonology</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-20.jpg') }}" alt="" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. Jayaraman</h3>
        <h4> Pulmonologist    </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""></h5>
        <a href="{{ url('book-appointment') }}">Book Appointment</a>
        <a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
        </div>
        </div>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-21.jpg') }}" alt="" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. Sridevi</h3>
        <h4> Pulmonologist </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> </h5>
        <a href="{{ url('book-appointment') }}">Book Appointment</a>
        <a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
        </div>
        </div>
      </div>  
      <div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
        
        <h4>Psychiatry</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-22.jpg') }}" alt="" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr. Sujatha </h3>
        <h4>Geriatric Psychiatrist  </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> </h5>
        <a href="{{ url('book-appointment') }}">Book Appointment</a>
        <a href="{{ url('/gericare-hospital/hospital-doctors/dr-srinivas') }}">View Profile</a>
        </div>
        </div>
      </div>     
    <div class="dts-picx">
    <img src="{{ asset('/public/website/assets/images/dots.png') }}" alt="" class="w-100">  
    </div>

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

@endsection