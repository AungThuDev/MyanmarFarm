<?php

namespace App\Http\Controllers\Backend;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class VacancyController extends Controller
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
            $vacancies = Vacancy::query();

            return DataTables::of($vacancies)

                ->editColumn('created_at', function($e) {
                    return Carbon::parse($e->created_at)->format("F j, Y, g:i a");
                })

                ->addColumn('action', function($a) {

                    $details = "<a href='/admin/vacancies/$a->id' class='btn btn-primary' style='margin-right: 10px'><i class='fas fa-info-circle' style='margin-right:5px;'></i>Details</a>";
                    $edit = '<a href=" '.route('admin.vacancies.edit', $a->id).'" class="btn btn-warning text-white" style="margin-right: 10px;"><i class="fas fa-edit" style="margin-right:5px;"></i>Edit</a>';
                    $delete = '<a href="" class="deleteButton btn btn-danger" data-id="'. $a->id .'"><i class="fas fa-trash-alt" style="margin-right:5px;"></i>Delete</a>';

                    return '<div class="action">' . $details  . $edit . $delete . '</div>';

                })->rawColumns(['action'])->make(true);
        }

        return view('backend.vacancies.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vacancies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $this->validateVacancy($request);

        $attributes['genders'] = implode(',', $attributes['genders']);

        

        Vacancy::create($attributes);

        return redirect('/admin/vacancies')->with('create', 'Vacancy');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('backend.vacancies.show',compact('vacancy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('backend.vacancies.edit',compact('vacancy'));
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
        $attributes = $this->validateVacancy($request);

        $attributes['genders'] = implode(',', $attributes['genders']);

        Vacancy::findOrFail($id)->update($attributes);

        return redirect("/admin/vacancies/")->with('update', 'Vacancy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vacancy::findOrFail($id)->delete();

        return 'success';
    }
    private function validateVacancy(Request $request) {
        return $request->validate([
           'title' => 'required',
           'type' => 'required',
           'description' => 'required',
           'requirements' => 'required',
           'salary' => 'required',
           'post_qty' => 'required|numeric|min:1',
           'working_hours' => 'required',
           'benefits' => 'required',
           'email' => 'required|email',
           'phone' => 'required',
           'address' => 'required',
           'genders' => 'required',
           'deadline' => 'required',
        ]);
    }
}
