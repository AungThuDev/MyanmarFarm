<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
    'confirm' => false,
]);
Route::redirect('/','/en');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/',[App\Http\Controllers\Backend\DashboardController::class,'index'])->name('home');
    Route::resource('/blogs',App\Http\Controllers\Backend\BlogController::class);
    Route::resource('/vacancies',App\Http\Controllers\Backend\VacancyController::class);
    Route::resource('/galleries',App\Http\Controllers\Backend\GalleryController::class);
});

    
    Route::redirect('/','/en');
    Route::prefix('/{language}')->group(function(){
    Route::get('/',function($language){
        return view('frontend.index',compact('language'));
    });
    Route::get('/about',function($language){
        $aboutblogs = Blog::latest()->take(3)->get();
        return view('frontend.about',compact('aboutblogs','language'));
    })->name('about');
    Route::get('/about/csr-strategy',function($language){
        return view('frontend.csr',compact('language'));
    })->name('csr');
    Route::get('/partnership-programme',function($language){
        return view('frontend.partner',compact('language'));
    })->name('partner');
    Route::get('/our-business',function($language){
        return view('frontend.business',compact('language'));
    })->name('business');
    Route::get('/news',function($language){
        $blogs = Blog::latest()->paginate(5);
        $popularblogs = Blog::latest()->take(4)->get();
        return view('frontend.blogs.index',compact('popularblogs','blogs','language'));
    })->name('news');
    Route::get('/contact',function($language){
        return view('frontend.contact',compact('language'));
    })->name('contact');
    Route::get('/shop',function()
    {
        return view('frontend.shop');
    });
    Route::get('/galleries',[App\Http\Controllers\Frontend\GalleryController::class,'index'])->name('gallery');
    //Route::get('/news',[App\Http\Controllers\Frontend\BlogController::class,'index'])->name('blogs');
    Route::get('/news/{id}/detail',[App\Http\Controllers\Frontend\BlogController::class,'detail'])->name('news.detail');
    Route::get('/search-news',[App\Http\Controllers\Frontend\BlogController::class,'search'])->name('search-news');
    Route::get('/vacancies',[App\Http\Controllers\Frontend\VacancyController::class,'index'])->name('vacancies');
    Route::get('/vacancies/{id}/detail',[App\Http\Controllers\Frontend\VacancyController::class,'detail'])->name('vacancies.detail');
    Route::get('/search-vacancies',[App\Http\Controllers\Frontend\VacancyController::class,'search'])->name('search-vacancies');

    });

    




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
