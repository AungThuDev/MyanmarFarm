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
        $blog = Blog::count();
        $vacancy = Vacancy::count();
        $gallery = Gallery::count();
        return view('backend.dashboard.index', compact('blog', 'vacancy', 'gallery'));
    }
}
