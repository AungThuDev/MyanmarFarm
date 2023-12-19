<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $blogcount = Blog::count();
        $vacancycount = Vacancy::count();
        $gallerycount = Gallery::count();
        return view('backend.dashboard.index', compact('blogcount', 'vacancycount', 'gallerycount'));
    }
}
