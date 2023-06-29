<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Storage;


class TestimonialController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $data = Testimonial::orderBy('id', 'DESC');
            return DataTables::eloquent($data)
                ->addIndexColumn()              
                ->addColumn('action', function ($data) {
                    $edit = '';
                    $delete = '';
                    if (permission_check('TESTIMONIAL_EDIT'))
                    $edit=button('edit',route('testimonial.edit', $data->id));

                    if (permission_check('TESTIMONIAL_DELETE'))
                    $delete = button('delete',route('testimonial.delete', $data->id));
                    return $edit.$delete;

                })
                ->addColumn('status', function ($data) {
                    $flag    =  $data->status == '0' ? 'danger' : 'success';
                    $type    =  $data->status == '0' ? 'ban' : 'check-circle';
                    $status  =  '<span class="fa-20 t-center fa fa-' . $type . ' text-' . $flag . '"></span>';
                    return $status;
                })
               
            ->rawColumns(['action','status'])
            ->make(true);
        }
        return view('admin.testimonial.index');
    }
    public function create()
    {
        return view('admin.testimonial.create');
    }
    public function store(Request $request,$id = null)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'given_by'    => 'required',
            'file'        => 'mimes:jpg,jpeg,png',
        ]);

        $data =  Testimonial::updateOrCreate(["id"=> $id],$request->except(['_token','file']));
        if($data)
        {
            if($request->has('file')) {
                if(Storage::exists($data->file)){
                    Storage::delete($data->file);
                } 
                $image                      =  $request->file('file')->store('public/testimonial');
                $data  ->  photo            =  $image;
                $data  ->  title            =  $request->title;
                $data  ->  description      =  $request->description;
                $data  ->  designation      =  $request->designation;
                $data  ->  given_by         =  $request->given_by;
                $data  ->  date             =  $request->date;
                $data  ->  status           =  $request->status;
               
                $data  ->  save();
            }
        }
        Flash::success( __('action.saved', ['type' => 'Testimonial']));
        return redirect()->route('testimonial.index');

    }
    public function edit($id)
    {
        $data = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit',compact('data'));
    }
}
