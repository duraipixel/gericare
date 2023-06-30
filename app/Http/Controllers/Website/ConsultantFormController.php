<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Enquiries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConsultantFormController extends Controller
{
    public function index(Request $request)
    {
    }

    public function submitConsultantForm(Request $request)
    {

        $validator      = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'mobile_no' => 'required',
            'from' => 'required',
            'service' => 'required_if:from,=,homepage',
            'subject' => 'required_if:from,=,contact',
            'message' => 'required',
        ]);

        if ($validator->passes()) {
            $ins = [];
            $ins['name'] = $request->name;
            $ins['type'] = $request->from == 'contact' ? 'contact' : 'consult';
            $ins['enquiry_from'] = $request->from;
            $ins['email'] = $request->email;
            $ins['moble_no'] = $request->mobile_no;
            $ins['message'] = $request->message;
            $ins['services'] = $request->service ?? null;
            $ins['subject'] = $request->subject ?? null;
            Enquiries::create($ins);
            $error                      = 0;
            $message                    = 'Form submitted successfully';
        } else {
            $error                      = 1;
            $message                    = $validator->errors()->all();
        }
        return response()->json(['error' => $error, 'message' => $message ]);
    }
}
