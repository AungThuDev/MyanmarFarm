<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\blogImages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $articles = Blog::query();

            return DataTables::of($articles)
                ->editColumn('created_at', function ($e) {
                    return Carbon::parse($e->created_at)->format("F j, Y, g:i a");
                })
                ->addColumn('action', function ($a) {

                    $detail = '<a href=" ' . route('admin.blogs.show', $a->id) . '" class="btn btn-primary" style="margin-right: 10px;"><i class="fas fa-info-circle" style="margin-right:5px;"></i>Detail</a>';
                    $edit = '<a href=" ' . route('admin.blogs.edit', $a->id) . '" class="btn btn-warning text-white" style="margin-right: 10px;"><i class="fas fa-edit" style="margin-right:5px;"></i>Edit</a>';
                    $delete = '<a href="" class="delete btn btn-danger" data-id="' . $a->id . '"><i class="fas fa-trash-alt" style="margin-right:5px;"></i>Delete</a>';

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            "title" => "required|string|max:255",
            "first_body" => "required",
            "second_body" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif",
            'images.*' => 'image|mimes:jpeg,png,jpg,gif'
        ]);

        $imageName = '/storage/' . $request->file('image')->store('blogs');

        if ($request['video']) {
            $validated['video'] = $request['video'];
        }

        $validated['image'] = $imageName;

//        $imagePath1 = $request->file('first_image')->store('public/blogs');
//        $imageName1 = basename($imagePath1);
//
//        $imagePath2 = $request->file('second_image')->store('public/blogs');
//        $imageName2 = basename($imagePath2);

        $blog = Blog::create($validated);

        if ($request->file('images')) {
            $images = [];

            foreach ($request->file('images') as $image) {
                $images[] = new blogImages(['image' => '/storage/' . $image->store('blogs')]);
            }

            $blog->images()->saveMany($images);
        }

        return redirect('/admin/blogs')->with('create', 'Blog Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('backend.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
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
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $request->validate([
            "title" => "required",
            "first_body" => "required",
            "second_body" => "required",
        ]);
        $blog->title = $request->title;
        $blog->first_body = $request->first_body;
        $blog->second_body = $request->second_body;
        if ($request->file('image')) {
            if ($blog->image) {
                Storage::delete('/blogs/' . basename($blog->image));
            }
            $imageName = '/storage/' . $request->file('image')->store('blogs');

            $blog->image = $imageName;
        }

        $imagesArray = $request->except('title', 'first_body', 'second_body', 'image', '_token', '_method', 'video');
        if (count($imagesArray) > 0) {
            foreach ($imagesArray as $id => $image) {
                $blogImage = blogImages::findOrFail($id);
                Storage::delete('/blogs/' . basename($blogImage->image));

                $blogImage->update([
                    'image' => '/storage/' . $image->store('blogs')
                ]);
            }
        }

        if ($request['video'] || $request['video'] == '') {
            $blog->video = $request['video'];
        }

        $blog->save();
        return redirect('/admin/blogs')->with('update', 'Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image) {
            Storage::delete('/blogs/' . basename($blog->image));
        }
        $blogImages = $blog->images;
        foreach($blogImages as $blogImage) {
            Storage::delete('/blogs/' . basename($blogImage->image));
        }
        $blog->delete();
        return 'success';
    }
}
