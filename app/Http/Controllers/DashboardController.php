<?php

namespace App\Http\Controllers;

use App\Exports\BookAppointmentExport;
use App\Exports\BookHomeCollectionExport;
use App\Exports\CareerExport;
use App\Exports\ClinicalLabManagementExport;
use App\Exports\ContactExport;
use App\Exports\FeedBackExport;
use App\Exports\FranchisingOpportunitiesExport;
use App\Exports\FrequentlyAskedQuestionsExport;
use App\Exports\HeadOfficeExport;
use App\Exports\HospitalLabManagementExport;
use App\Exports\PatientsConsumersExport;
use App\Exports\ResearchExport;
use App\Exports\AllEnquiryExport;
use App\Models\BookAppointment;
use App\Models\BookHomeCollection;
use App\Models\Career;
use App\Models\ClinicalLabManagement;
use Laracasts\Flash\Flash;
use App\Models\ContactUs;
use App\Models\Enquiries;
use App\Models\CustomerDetails;
use App\Models\FeedBack;
use App\Models\FranchisingOpportunities;
use App\Models\FrequentlyAskedQuestions;
use App\Models\HeadOffice;
use App\Models\HospitalLabManagement;
use App\Models\Orders;
use App\Models\Packages;
use App\Models\PatientsConsumers;
use App\Models\Research;
use App\Models\Tests;
use App\Models\User;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    { 
       
        
        return view('admin.index');
    }
    public function dashboardData(Request $request)
    {
        
        $data['test'] = Tests::where('IsPackage','No')->count();
        $data['package'] = Tests::where('IsPackage','Yes')->count();
        $data['order'] = Orders::count();
        $data['customer'] = User::where('role_id',0)->count();
        $data['received_payment'] = Orders::where('payment_status',1)->count();
        $data['pending_order'] = Orders::whereNull('order_status')->count();
        $data['failed_payment'] = Orders::where('payment_status',0)->count();
        $data['cancel_order'] = Orders::where('order_status',3)->count();
        return response()->json(['data'=>$data]);
    }
    public function exportData(Request $request)
    {
        $export_data = $request->export_enquiry;
        $from = $request->export_enquiry_from_date ?? '';
        $to = $request->export_enquiry_to_date ?? '';
        if(!empty($export_data))
        {
            switch($export_data)
            {
                case 'BOOK_HOME_COLLECTION_LIST':
                    return Excel::download(new BookHomeCollectionExport($from,$to), 'book_home_collection.xlsx');
                    break;
                case 'PATIENTS_CONSUMERS_LIST':
                    return Excel::download(new PatientsConsumersExport($from,$to), 'patients_consumers.xlsx');
                    break;
                case 'FEEDBACK_LIST':
                    return Excel::download(new FeedBackExport($from,$to), 'feedback.xlsx');
                    break;
                case 'FREQUENTLY_ASKED_QUESTIONS_LIST':
                    return Excel::download(new FrequentlyAskedQuestionsExport($from,$to), 'faq.xlsx');
                    break;
                case 'HOSPITAL_LAB_MANAGEMENT':
                    return Excel::download(new HospitalLabManagementExport($from,$to), 'hospital_lab_management.xlsx');
                    break;
                case 'CLINICAL_LAB_MANAGEMENT':
                    return Excel::download(new ClinicalLabManagementExport($from,$to), 'clinical_lab_management.xlsx');
                    break;
                case 'FRANCHISING_OPPORTUNITIES':
                    return Excel::download(new FranchisingOpportunitiesExport($from,$to), 'franchising_opportunities.xlsx');
                    break;
                case 'RESEARCH':
                    return Excel::download(new ResearchExport($from,$to), 'research.xlsx');
                    break;
                case 'BOOK_AN_APPOINTMENT':
                    return Excel::download(new BookAppointmentExport($from,$to), 'book_appointment.xlsx');
                    break;
                case 'HEAD_OFFICE':
                    return Excel::download(new HeadOfficeExport($from,$to), 'head_office.xlsx');
                    break;
                case 'CONTACT_LIST':
                    return Excel::download(new ContactExport($from,$to), 'contact_us.xlsx');
                    break;
                case 'CAREER_ENQUIRY':
                    return Excel::download(new CareerExport($from,$to), 'career_enquiry.xlsx');
                case 'All':
                    return Excel::download(new AllEnquiryExport($request->export_enquiry_from_date,$request->export_enquiry_to_date), 'all_enquiry.xlsx');
                    break;
            }
        }
    }
    public function status(Request $request)
    {
        $type   = $request->type;
        $id     = $request->id;
        $value  = $request->value;
        if($id!='' && $value != '')
        {
            
                switch ($type) {
                    
                    case 'PATIENTS_CONSUMERS_LIST':
                        $data = PatientsConsumers::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->status = $value ?? '';
                            $data->update();
                        }

                        break;
                    case 'BOOK_HOME_COLLECTION_LIST':
                        $data = BookHomeCollection::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->status = $value ?? '';
                            $data->update();
                        }
                        break;
                    case 'FEEDBACK_LIST':
                        $data = FeedBack::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->status = $value ?? '';
                            $data->update();
                        }
                        break;
                    case 'FREQUENTLY_ASKED_QUESTIONS_LIST':
                        $data = FrequentlyAskedQuestions::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->status = $value ?? '';
                            $data->update();
                        }
                        break;
                        
                    case 'HOSPITAL_LAB_MANAGEMENT':
                        $data = HospitalLabManagement::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->status = $value ?? '';
                            $data->update();
                        }
                        break;

                    case 'CLINICAL_LAB_MANAGEMENT':
                        $data = ClinicalLabManagement::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->status = $value ?? '';
                            $data->update();
                        }
                        break;
                    case 'FRANCHISING_OPPORTUNITIES':
                        $data = FranchisingOpportunities::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->status = $value ?? '';
                            $data->update();
                        }
                        break;

                    case 'RESEARCH':
                        $data = Research::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->status = $value ?? '';
                            $data->update();
                        }
                        break;
                    case 'BOOK_AN_APPOINTMENT':
                        $data = BookAppointment::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->status = $value ?? '';
                            $data->update();
                        }
                        break;
                    case 'HEAD_OFFICE':
                        $data = HeadOffice::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->status = $value ?? '';
                            $data->update();
                        }
                        break;
                    
                    case 'CAREER_ENQUIRY':
                        $data = Career::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->status = $value ?? '';
                            $data->update();
                        }
                        break;

                    case 'CONTACT_LIST':
                        $data = ContactUs::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->status = $value ?? '';
                            $data->update();
                        }
                        break;
                }
        }
    }
    public function remark(Request $request)
    {
  
        $type   = $request->type;
        $id     = $request->id;
        $value  = $request->value;
        if($id!='')
        {
                switch ($type) {
                    
                    case 'PATIENTS_CONSUMERS_LIST':
                        $data = PatientsConsumers::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->remark = $value ?? '';
                            $data->update();
                        }
                        break;
                    case 'BOOK_HOME_COLLECTION_LIST':
                        $data = BookHomeCollection::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->remark = $value ?? '';
                            $data->update();
                        }
                        break;

                    case 'FEEDBACK_LIST':
                        $data = FeedBack::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->remark = $value ?? '';
                            $data->update();
                        }
                        break;
                        
                    case 'FREQUENTLY_ASKED_QUESTIONS_LIST':
                        $data = FrequentlyAskedQuestions::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->remark = $value ?? '';
                            $data->update();
                        }
                        break;
                        
                    case 'HOSPITAL_LAB_MANAGEMENT':
                        $data = HospitalLabManagement::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->remark = $value ?? '';
                            $data->update();
                        }
                        break;

                    case 'CLINICAL_LAB_MANAGEMENT':
                        $data = ClinicalLabManagement::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->remark = $value ?? '';
                            $data->update();
                        }
                        break;
                    case 'FRANCHISING_OPPORTUNITIES':
                        $data = FranchisingOpportunities::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->remark = $value ?? '';
                            $data->update();
                        }
                        break;

                    case 'RESEARCH':
                        $data = Research::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->remark = $value ?? '';
                            $data->update();
                        }
                        break;
                    case 'BOOK_AN_APPOINTMENT':
                        $data = BookAppointment::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->remark = $value ?? '';
                            $data->update();
                        }
                        break;
                    case 'HEAD_OFFICE':
                        $data = HeadOffice::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->remark = $value ?? '';
                            $data->update();
                        }
                        break;
                    
                    case 'CAREER_ENQUIRY':
                        $data = Career::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->remark = $value ?? '';
                            $data->update();
                        }
                        break;

                    case 'CONTACT_LIST':
                        $data = ContactUs::where('id',$id)->first();
                        if(!empty($data))
                        {
                            $data->remark = $value ?? '';
                            $data->update();
                        }
                        break;
                }

        }
    }
}
