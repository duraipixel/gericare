<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    
    public function applyJob(Request $request) {

        $validator      = Validator::make($request->all(), [          
            'name' => 'required',
            'email' => 'required||email|unique:careers',
            'mobile' => 'required',
            'designation' => 'required',
            'experience' => 'required',
            'cover_letter' => 'required',
            'upload_resume' => 'mimes:pdf,docx,doc'
        ]);

        if ($validator->passes()) {
            
            $ins = [];
            $ins['name'] = $request->name;
            $ins['email'] = $request->email;
            $ins['mobile'] = $request->mobile;
            
            $ins['designation'] = $request->designation;
            $ins['relevant_experience'] = $request->experience;
            $ins['message'] = '';

            if ($request->hasFile('upload_resume')) {

                $files = $request->file('upload_resume');
                $imageName = uniqid() . Str::replace(' ', "-", $files->getClientOriginalName());

                $directory = 'career';
                $filename  = $directory . '/' . $imageName;

                Storage::disk('public')->put($filename, File::get($files));
                $ins['file'] = 'public/' . $filename;
            }

            Career::create($ins);

            $error                      = 0;
            $message                    = 'Job submitted successfully';

        } else {
            $error                      = 1;
            $message                    = $validator->errors()->all();
        }
        return response()->json(['error' => $error, 'message' => $message ]);

    }
}
