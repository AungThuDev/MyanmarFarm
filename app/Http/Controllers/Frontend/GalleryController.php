<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
   public function index($language)
   {
    $galleries = Gallery::all();
    return view('frontend.galleries.index',compact('galleries','language'));
   }
}
