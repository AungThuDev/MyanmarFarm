<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VacancyController extends Controller
{
    public function index($language)
    {
        $vacancies = Vacancy::latest()->paginate(9);
        return view('frontend.vacancies.index',compact('vacancies','language'));
    }
    public function detail($language,$id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('frontend.vacancies.detail',compact('vacancy','language'));
    }
    public function search(Request $request,$language)
    {
        


    $search_text = $request->input('search');
    
    $vacancies = Vacancy::where('title', 'LIKE', '%' . $search_text . '%')->get();
    return view('frontend.vacancies.search-vacancies', compact('vacancies', 'language'));
    }
}
