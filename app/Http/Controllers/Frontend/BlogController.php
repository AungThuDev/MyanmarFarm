<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use Jorenvh\Share\Share;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Cache\RateLimiting\Limit;

class BlogController extends Controller
{
//    public function index()
//    {
//         $blogs = Blog::latest()->paginate(5);
//         return view('frontend.blogs.index',compact('blogs'));
//    }
   public function detail($language,$id)
   {
          $shareInstance = new Share();
          $share = $shareInstance->currentPage()->facebook();
        $blog = Blog::findOrFail($id);
        $popularblogs = Blog::latest()->take(4)->get();
        return view('frontend.blogs.detail',compact('blog','popularblogs','language','share'));
   }
   
   public function search($language)
   {
        
        //$search_text = $_GET['search'];
        $search_text = isset($_GET['search']) ? $_GET['search'] : '';
        $blogs = Blog::where('title','LIKE','%'.$search_text.'%')->get();
        $popularblogs = Blog::latest()->take(4)->get();
        return view('frontend.blogs.search-blogs',compact('blogs','popularblogs','language'));
   }
}
