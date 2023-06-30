<?php
include 'auth.php';
include 'admin.php';

use App\Http\Controllers\Website\BookAppointmentController;
use App\Http\Controllers\Website\CareerController;
use App\Http\Controllers\Website\ConsultantFormController;
use App\Http\Controllers\Website\PageViewController;
use App\Models\BookAppointment;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth_users']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::get('/', function(){
    return view('website.index');
});
// Route::get('/hospitals/gericare-hospitals',function(){
//     return view('website.hospitals.gericare-hospitals');
// });
Route::post('/consultant/form/save',[ConsultantFormController::class,'submitConsultantForm'])->name('consultant.form.submit');
Route::post('/appointment/form/save',[BookAppointmentController::class,'saveAppointment'])->name('appointment.form.submit');
Route::post('/career/form/save',[CareerController::class,'applyJob'])->name('career.form.submit');


Route::get('/gericare-hospital/about-hospital',[PageViewController::class,'aboutHospitalPage'])->name('gericare-hospital.about-hospital');

Route::get('/gericare-hospital/hospital-department',[PageViewController::class,'hospitalDepartmentPage'])->name('gericare-hospital.hospital-department');

Route::get('/gericare-hospital/hospital-doctors',[PageViewController::class,'hospitalDoctorsPage'])->name('gericare-hospital.hospital-doctors');


Route::get('/gericare-hospital/hospital-doctors/dr-srinivas',[PageViewController::class,'drSrinivasPage'])->name('doctors-details.dr-srinivas');

Route::get('/gericare-hospital/hospital-doctors/dr-lakshmipathy',[PageViewController::class,'drLakshmipathyPage'])->name('doctors-details.dr-lakshmipathy'); 

Route::get('/gericare-hospital/hospital-facilities',[PageViewController::class,'hospitalFacilitiesPage'])->name('gericare-hospital.hospital-facilities');


Route::get('/gericare-assisted-living/about-assisted-living',[PageViewController::class,'aboutAssistedLivingPage'])->name('gericare-assisted-living.about-assisted-living');

Route::get('/gericare-assisted-living/assisted-living-service',[PageViewController::class,'assistedLivingServicePage'])->name('gericare-assisted-living.assisted-living-service');

Route::get('/gericare-assisted-living/assisted-living-facilities',[PageViewController::class,'assistedLivingFacilitiesPage'])->name('gericare-assisted-living.assisted-living-facilities');


Route::get('/gericare-clinics/about-clinics',[PageViewController::class,'aboutClinicsPage'])->name('gericare-clinics.about-clinics');

Route::get('/gericare-clinics/clinics-service',[PageViewController::class,'clinicsServicePage'])->name('gericare-clinics.clinics-service');


Route::get('/gericare-homecare/about-homecare',[PageViewController::class,'aboutHomeCarePage'])->name('gericare-homecare.about-homecare');

Route::get('/gericare-homecare/service-we-offer/homecare-doctor-visit',[PageViewController::class,'doctorVisitPage'])->name('gericare-homecare.homecare-doctor-visit');

Route::get('/gericare-homecare/service-we-offer/homecare-nursing-care',[PageViewController::class,'nursingCarePage'])->name('gericare-homecare.homecare-nursing-care');

Route::get('/gericare-homecare/service-we-offer/homecare-geriatri-assessment-counselling',[PageViewController::class,'geriatriAssessmentCounsellingPage'])->name('gericare-homecare.homecare-geriatri-assessment-counselling');

Route::get('/gericare-homecare/service-we-offer/homecare-attender-assistance',[PageViewController::class,'homecareAttenderAssistancePage'])->name('gericare-homecare.homecare-attender-assistance');

Route::get('/gericare-homecare/service-we-offer/homecare-medical-devices',[PageViewController::class,'homecareMedicalDevicesPage'])->name('gericare-homecare.homecare-medical-devices');


Route::get('/gericare-homecare/service-we-offer/geriatric-physiotherapy-at-home',[PageViewController::class,'geriatricPhysiotherapyatHomePage'])->name('homecare-services.geriatric-physiotherapy-at-home'); 

Route::get('/gericare-homecare/service-we-offer/psychiatrist-home-visit',[PageViewController::class,'psychiatristHomePage'])->name('homecare-services.psychiatrist-home-visit'); 


Route::get('/about-us/about-gericare',[PageViewController::class,'aboutGericarePage'])->name('about-us.about-gericare');

Route::get('/about-us/leadership-team',[PageViewController::class,'leaderShipPage'])->name('about-us.leadership-team');

Route::get('/about-us/awards-achievements',[PageViewController::class,'awardsPage'])->name('about-us.awards-achievements');


Route::get('/in-news/media-gallery',[PageViewController::class,'mediaGalleryPage'])->name('in-news.media-gallery');

Route::get('/in-news/news-events',[PageViewController::class,'newsEventsPage'])->name('in-news.news-events');

Route::get('contact-us',[PageViewController::class,'contactUsPage'])->name('contact-us');

Route::get('book-appointment',[PageViewController::class,'bookAppointmentPage'])->name('book-appointment');

Route::get('careers',[PageViewController::class,'careerPage'])->name('careers');

Route::get('testimonials',[PageViewController::class,'testimonialPage'])->name('testimonials'); 

Route::get('faq',[PageViewController::class,'faqPage'])->name('faq'); 

