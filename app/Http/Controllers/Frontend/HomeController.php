<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    
    // public function about()
    // {
    //     $aboutblogs = Blog::latest()->take(3)->get();
    //     return view('frontend.about',compact('aboutblogs'));
    // }
    public function gallery()
    {
        $galleries = Gallery::latest()->paginate(6);
        return view('frontend.galleries.index',compact('galleries'));
    }
}
