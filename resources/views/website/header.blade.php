<div class="top-bar">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
      <div class="d-flex align-items-left justify-content-start top-phone">
        <a href="tel:+914440604060" target="_blank"><img src="{{ asset('/public/website/assets/images/notify.png') }}" alt="" />+91 44 4060 4060</a>
        <a href="tel:+914440614061" target="_blank"><img src="{{ asset('/public/website/assets/images/calling.png') }}" alt="" />+91 44 4061 4061</a>
      </div>
      </div>
      
      <div class="col-lg-4">
      <div class="d-flex align-items-center justify-content-center justify-content-sm-end">
          <ul class="top-socials">
            <li>
              <a href="{{ url('book-appointment') }}">
                Book an Appointment
              </a>
            </li> 
          </ul>
      </div>

      </div>
    </div>
  </div>
</div>

<div class="mobile-header">
<a href="tel:+914440614061" target="_blank"><img src="{{ asset('/public/website/assets/images/calling.png') }}" alt="" />+91 44 4061 4061</a>
<a href="{{ url('book-appointment') }}"> Book an Appointment </a>
</div>

<header>

  <div class="container">
    <div class="row">
      <div class="col">
        <nav id='cssmenu'>

          <div class="logo">
            <a href="{{ url('/') }}">
              <img src="{{ asset('/public/website/assets/images/logo.png') }}" alt="GRB Logo" />
            </a>
          </div>

          <div class="button"> 
          </div>



          <ul>
            <li id="corporate-menu" class="@if(request()->routeIs(['gericare-hospital.about-hospital','gericare-hospital.hospital-department','gericare-hospital.hospital-doctors','gericare-hospital.hospital-facilities'])) active @endif"><a href='javascript:void(0)'>Hospital</a>
              <ul>
                <li class="@if(request()->routeIs(['gericare-hospital.about-hospital'])) active @endif">
                  <a href="{{ url('/gericare-hospital/about-hospital') }}">About Hospital</a>
                </li>
                <li class="@if(request()->routeIs(['gericare-hospital.hospital-department'])) active @endif">
                  <a href="{{ url('/gericare-hospital/about-hospital/#hospital-departments') }}">Departments</a>
                </li>
                <li class="@if(request()->routeIs(['gericare-hospital.hospital-doctors'])) active @endif">
                  <a href="{{ url('/gericare-hospital/hospital-doctors') }}">Our Doctor's</a>
                </li> 
                <li class="@if(request()->routeIs(['gericare-hospital.hospital-facilities'])) active @endif">
                  <a href="{{ url('/gericare-hospital/about-hospital/#hospital-faclitiys') }}">Facilities</a>
                </li> 
              </ul>
            </li>
            <li id="corporate-menu" class="@if(request()->routeIs(['gericare-assisted-living.about-assisted-living','gericare-assisted-living.assisted-living-service','gericare-assisted-living.assisted-living-facilities'])) active @endif"><a href='javascript:void(0)'>Assisted Living</a>
              <ul>
                <li class="@if(request()->routeIs(['gericare-assisted-living.about-assisted-living'])) active @endif">
                  <a href="{{ url('/gericare-assisted-living/about-assisted-living') }}">About Assisted Living</a>
                </li>
                <li class="@if(request()->routeIs(['gericare-assisted-living.assisted-living-service'])) active @endif">
                  <a href="{{ url('/gericare-assisted-living/about-assisted-living/#servce-cre') }}">Services we Offer</a>
                </li> 
                <li class="@if(request()->routeIs(['gericare-assisted-living.assisted-living-facilities'])) active @endif">
                  <a href="{{ url('/gericare-assisted-living/about-assisted-living/#ass-faci') }}">Facilities & Amenities</a>
                </li> 
              </ul>
            <!-- </li>
            <li id="corporate-menu" class="@if(request()->routeIs(['gericare-clinics.about-clinics','gericare-clinics.clinics-service'])) active @endif"><a href='javascript:void(0)'>Clinics</a>
              <ul>
                <li class="@if(request()->routeIs(['gericare-clinics.about-clinics'])) active @endif">
                  <a href="{{ url('/gericare-clinics/about-clinics') }}">About Clinics </a>
                </li>
                <li class="@if(request()->routeIs(['gericare-clinics.clinics-service'])) active @endif">
                  <a href="{{ url('/gericare-clinics/clinics-service') }}">Service we Offer</a>
                </li> 
              </ul>
            </li> -->
            <li class="@if(request()->routeIs(['gericare-clinics.about-clinics'])) active @endif">
              <a href="{{ url('/gericare-clinics/about-clinics') }}">Clinics</a>
            </li>
            <li id="corporate-menu" class="@if(request()->routeIs(['gericare-homecare.homecare-doctor-visit','gericare-homecare.about-homecare','gericare-homecare.homecare-nursing-care','gericare-homecare.homecare-geriatri-assessment-counselling','gericare-homecare.homecare-attender-assistance','gericare-homecare.homecare-medical-devices'])) active @endif"><a href='javascript:void(0)'>Home Care</a>
              <ul>
                <li class="@if(request()->routeIs(['gericare-homecare.about-homecare'])) active @endif">
                  <a href="{{ url('/gericare-homecare/about-homecare') }}">About Home care </a>
                </li>
                <li class="@if(request()->routeIs([''])) active @endif">
                  <a href="javascript:void(0)">Service we Offer</a>
                  <ul class="sub-lstng"> 
                <li class="@if(request()->routeIs(['gericare-homecare.homecare-geriatri-assessment-counselling'])) active @endif">
                  <a href="{{ url('/gericare-homecare/service-we-offer/geriatric-physiotherapy-at-home') }}">Geriatric Physiotherapy at Home</a>
                </li> 
                <li class="@if(request()->routeIs(['gericare-homecare.homecare-attender-assistance'])) active @endif">
                  <a href="{{ url('/gericare-homecare/service-we-offer/psychiatrist-home-visit') }}">Psychiatrist Home Visit</a>
                </li> 
                <li class="@if(request()->routeIs(['gericare-homecare.homecare-medical-devices'])) active @endif">
                  <a href=" ">Orthopedician Home Visit</a>
                </li>  
                <li class="@if(request()->routeIs(['gericare-homecare.homecare-medical-devices'])) active @endif">
                  <a href=" ">Dentist Home Visit</a>
                </li>   
                <li class="@if(request()->routeIs(['gericare-homecare.homecare-medical-devices'])) active @endif">
                  <a href=" ">IV Fluids Monitoring</a>
                </li>    
                <li class="@if(request()->routeIs(['gericare-homecare.homecare-medical-devices'])) active @endif">
                  <a href=" ">Urinary Catheterization</a>
                </li>    
                <li class="@if(request()->routeIs(['gericare-homecare.homecare-medical-devices'])) active @endif">
                  <a href=" ">Outpatient Antibiotic Administration</a>
                </li>     
                <li class="@if(request()->routeIs(['gericare-homecare.homecare-medical-devices'])) active @endif">
                  <a href=" ">Wound Care and Dressing</a>
                </li>    
                <li class="@if(request()->routeIs(['gericare-homecare.homecare-medical-devices'])) active @endif">
                  <a href=" ">ECG at Home</a>
                </li>    
                <li class="@if(request()->routeIs(['gericare-homecare.homecare-medical-devices'])) active @endif">
                  <a href=" ">Skilled Nursing Care</a>
                </li>     
                <li class="@if(request()->routeIs(['gericare-homecare.homecare-medical-devices'])) active @endif">
                  <a href=" ">Home Sample Collection</a>
                </li>      
                <li class="@if(request()->routeIs(['gericare-homecare.homecare-medical-devices'])) active @endif">
                  <a href=" ">Live-in Care</a>
                </li>       
                <li class="@if(request()->routeIs(['gericare-homecare.homecare-medical-devices'])) active @endif">
                  <a href=" ">Care for Bedridden Patients</a>
                </li> 
              </ul>
                </li> 
              </ul>
            </li> 
            <li id="corporate-menu" class="@if(request()->routeIs(['about-us.about-gericare','about-us.leadership-team','about-us.awards-achievements'])) active @endif"><a href='javascript:void(0)'>About Us</a>
              <ul>
                <li class="@if(request()->routeIs(['about-us.about-gericare'])) active @endif">
                  <a href="{{ url('/about-us/about-gericare') }}">About Grericare</a>
                </li> 
                <li class="@if(request()->routeIs(['about-us.leadership-team'])) active @endif">
                  <a href="{{ url('/about-us/leadership-team') }}">Leadership Team</a>
                </li> 
                <li class="@if(request()->routeIs(['about-us.awards-achievements'])) active @endif">
                  <a href="{{ url('/about-us/awards-achievements') }}">Awards and Achievements</a>
                </li> 
              </ul>
            </li>
            <li id="corporate-menu" class="@if(request()->routeIs(['in-news.news-events','in-news.media-gallery'])) active @endif"><a href='javascript:void(0)'>In The News</a>
              <ul>
              <li class="@if(request()->routeIs(['in-news.news-events'])) active @endif">
                  <a href="{{ url('/in-news/news-events') }}">News & Events</a>
                </li> 
                <li class="@if(request()->routeIs(['in-news.media-gallery'])) active @endif">
                  <a href="{{ url('/in-news/media-gallery') }}">Media Gallery</a>
                </li>
              </ul>
            </li>   
            <li class="@if(request()->routeIs(['contact-us'])) active @endif">
              <a href="{{ url('contact-us') }}">Contact Us</a>
            </li> 
          </ul>
        </nav>
      </div>
    </div>
  </div>

</header>