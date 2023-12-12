<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $articles = Blog::query();

            return DataTables::of($articles)

            ->editColumn('created_at', function($e) {
                return Carbon::parse($e->created_at)->format("F j, Y, g:i a");
            })

            ->addColumn('action', function($a) {

                $detail = '<a href=" '.route('admin.blogs.show', $a->id).'" class="btn btn-primary" style="margin-right: 10px;"><i class="fas fa-info-circle" style="margin-right:5px;"></i>Detail</a>';
                $edit = '<a href=" '.route('admin.blogs.edit', $a->id).'" class="btn btn-warning text-white" style="margin-right: 10px;"><i class="fas fa-edit" style="margin-right:5px;"></i>Edit</a>';
                $delete = '<a href="" class="delete btn btn-danger" data-id="'. $a->id .'"><i class="fas fa-trash-alt" style="margin-right:5px;"></i>Delete</a>';

                return '<div class="action">' . $detail . $edit . $delete . '</div>';

            })->rawColumns(['action'])->make(true);
        }

        return view('backend.blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blogs.create');
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
            "title" => "required|string|max:255",
            "body" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif",
        ]);

        $imagePath = $request->file('image')->store('public/blogs');
        $imageName = basename($imagePath);

        Blog::create([
            'title' => $request['title'],
            'body' => $request['body'],
            'image' => $imageName,
        ]);

        return redirect('/admin/blogs')->with('create','Blog Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('backend.blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('backend.blogs.edit', compact('blog'));
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
        $blog = Blog::findOrFail($id);
        $request->validate([
            "title" => "required",
            "body" => "required",
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        $blog->title = $request->title;
        $blog->body = $request->body;
        if($request->file('image')){
            if($blog->image){
                Storage::delete('public/blogs/'.$blog->image);
            }
            $imagePath = $request->file('image')->store('public/blogs/');
            $imageName = basename($imagePath);

            $blog->image = $imageName;
        }
        $blog->save();
        return redirect('/admin/blogs')->with('update','Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image) {
            Storage::delete('public/blogs/' . $blog->image);
        }
        $blog->delete();
        return 'success';
    }
}
