<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;
use Yajra\DataTables\DataTables;

class MediaController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $data = Media::select('*');
            return DataTables::of($data)->addIndexColumn()
            ->addColumn('image', function ($data) {
                return '
                    <img src="'.asset_url($data->image).'" height="40"/>
                ';
            })   
            ->addColumn('action', function ($data) {
                $edit = '';
                $delete = '';

                if (permission_check('MEDIA_EDIT'))
                $edit = button('edit',route('media.edit', $data->id));

                if (permission_check('MEDIA_DESTROY'))
                $delete = button('delete',route('media.destroy', $data->id));

                return $edit.$delete;
            })
            ->rawColumns(['action','image'])
            ->make(true);
        }
        return view('admin.master.media.index');
    }
    public function create()
    {
        return view('admin.master.media.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required | mimes:jpeg,png,jpg',
            'order_by' => 'required',
        ]);
        Media::create([
            "name" => $request->name,
            "image" => Storage::put('public/files/media',$request->image),
            "order_by" => $request->order_by,
        ]);
        Flash::success(__('action.created',['type' => 'media']));
        return redirect(route('media.index'));
    }
    public function edit($id)
    {
        $media = Media::findOrFail($id);
        return view('admin.master.media.edit',compact('media'));
    }
    public function update(Request $request,$id)
    {
        $media = Media::findOrFail($id);
 
        if($request->image) {
            if(Storage::exists($media->image)){
                Storage::delete($media->image);
            }
            $media->update([
                "image" => Storage::put('public/files/media',$request->image),
            ]);
        }

        $media->update([
            "name" => $request->name,
            "order_by" => $request->order_by,
        ]);

        Flash::success(__('action.updated',['type' => 'media']));

        return redirect(route('media.index'));
    }

    public function destroy($id = null)
    {
        $media  = Media::find($id);
        if(Storage::exists($media->image)){
            Storage::delete($media->image);
        } 
        $media->delete();
        Flash::success( __('action.deleted', ['type' => 'media']));
        return redirect()->back();
    }
}
