<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageViewController extends Controller
{
    public function aboutHospitalPage()
    {
        return view('website.gericare_hospital.about-hospital');
    }
    public function hospitalDepartmentPage()
    {
        return view('website.gericare_hospital.hospital-department');
    }
    public function hospitalDoctorsPage()
    {
        return view('website.gericare_hospital.hospital-doctors');
    }

    public function drSrinivasPage()
    {
        return view('website.doctors_details.dr-srinivas');
    }
    public function drLakshmipathyPage()
    {
        return view('website.doctors_details.dr-lakshmipathy');
    }

    public function hospitalFacilitiesPage()
    {
        return view('website.gericare_hospital.hospital-facilities');
    }


    public function aboutAssistedLivingPage()
    {
        return view('website.gericare_assisted_living.about-assisted-living');
    }
    public function assistedLivingServicePage()
    {
        return view('website.gericare_assisted_living.assisted-living-service');
    }
    public function assistedLivingFacilitiesPage()
    {
        return view('website.gericare_assisted_living.assisted-living-facilities');
    }

    
    public function aboutClinicsPage()
    {
        return view('website.gericare_clinics.about-clinics');
    }
    public function clinicsServicePage()
    {
        return view('website.gericare_clinics.clinics-service');
    }

    
    public function aboutHomeCarePage()
    {
        return view('website.gericare_homecare.about-homecare');
    }
    public function doctorVisitPage()
    {
        return view('website.gericare_homecare.homecare-doctor-visit');
    }
    public function nursingCarePage()
    {
        return view('website.gericare_homecare.homecare-nursing-care');
    }
    public function geriatriAssessmentCounsellingPage()
    {
        return view('website.gericare_homecare.homecare-attender-assistance');
    }
    public function homecareAttenderAssistancePage()
    {
        return view('website.gericare_homecare.homecare-attender-assistance');
    }
    public function homecareMedicalDevicesPage()
    {
        return view('website.gericare_homecare.homecare-medical-devices');
    }

    
    public function geriatricPhysiotherapyatHomePage()
    {
        return view('website.homecare_services.geriatric-physiotherapy-at-home');
    }
    public function psychiatristHomePage()
    {
        return view('website.homecare_services.psychiatrist-home-visit');
    }

    
    public function aboutGericarePage()
    {
        return view('website.about_us.about-gericare');
    }
    public function leaderShipPage()
    {
        return view('website.about_us.leadership-team');
    }
    public function awardsPage()
    {
        return view('website.about_us.awards-achievements');
    }


    public function careerPage()
    {
        return view('website.career.careers');
    }
    public function contactUsPage()
    {
        return view('website.contact_us.contact-us');
    }
    public function bookAppointmentPage()
    {
        return view('website.book_an_appointment.book-appointment');
    }
    public function testimonialPage()
    {
        return view('website.testimonials');
    }
    public function faqPage()
    {
        return view('website.faq');
    }
    public function mediaGalleryPage()
    {
        return view('website.in_news.media-gallery');
    } 
    public function newsEventsPage()
    {
        return view('website.in_news.news-events');
    } 
}
