<?php

namespace App\Http\Controllers\Backend;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $gallery = Gallery::query();
            return DataTables::of($gallery)
            ->editColumn('image',function($each){

                    return '<img src="'.asset("storage/gallery/" . $each->image).'" class="img-thumbnail" width="100" height="100"/>';

            })
            ->addColumn('action',function($each){
                $edit_icon = '<a href="'.route('admin.galleries.edit',$each->id).'" class="btn btn-warning" style="margin-right:10px;"><i class="fas fa-user-edit"></i>&nbsp;Edit</a>';
                $delete_icon = '<a href="" class="btn btn-danger delete" data-id = "'.$each->id.'"><i class="fas fa-trash-alt"></i>&nbsp;Delete</a>';

                return '<div class="action-icon">' . $edit_icon . $delete_icon . '</div>';
            })
            ->rawColumns(['image','action'])
            ->make(true);
        }
        return view('backend.galleries.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $path = $request->file('image')->store('/public/gallery');
        $imageName = basename($path);

        Gallery::create([
            'name' => $request['name'],
            'image' => $imageName,
        ]);

        return redirect('/admin/galleries')->with('create','Image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('backend.galleries.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $request->validate([
            "name" => "required",
        ]);
        $gallery->name = $request->name;
        if($request->file('image')){
            if($gallery->image){
                Storage::delete('/public/gallery/' . basename($gallery->image));
            }
            $path = $request->file('image')->store('/public/gallery');
            $imageName = basename($path);

            $gallery->image = $imageName;
        }
        $gallery->save();
        return redirect('/admin/galleries')->with('update','Image');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        if ($gallery->image) {
            Storage::delete('/public/gallery/' . basename($gallery->image));
        }
        $gallery->delete();

        return 'success';
    }
}
