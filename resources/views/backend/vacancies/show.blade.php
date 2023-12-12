@extends('layouts.master')

@section('vacancy', 'nav-link active')
@section('title','Vacancy-Detail')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Vacancy Details</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <a href="{{route('admin.vacancies.index')}}" class="btn btn-success float-right"><i class="fas fa-arrow-alt-circle-left" style="margin-right: 5px;"></i>Back</a>
                    </div>

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card mb-4 p-3" style="max-width: 1000px; margin: auto">
                    <div class="d-flex justify-content-between mb-3">
                        <h4>{{ $vacancy->title }}</h4>
                        <p>- Posted: {{ $vacancy->created_at }}</p>
                        <p>- Deadline: {{ $vacancy->deadline }}</p>
                    </div>
                    <p>- {{ $vacancy->type }}</p>
                    <p>- {{ $vacancy->genders }} ({{ $vacancy->post_qty }}) posts</p>
                    <p>- Working Hours: {{ $vacancy->working_hours }}</p>
                    <p>- Salary: {{ $vacancy->salary }} kyats</p>
                    <hr>
                    <h5>Description</h5>
                    <p>{!! nl2br($vacancy->description) !!}</p>
                    <hr>
                    <h5>Requirements</h5>
                    <p>{!! nl2br($vacancy->requirements) !!}</p>
                    <hr>
                    <h5>Benefits</h5>
                    <p>{!! nl2br($vacancy->benefits) !!}</p>
                    <hr>
                    <h5>Contact</h5>
                    <p>Email: {{ $vacancy->email }}</p>
                    <p>Phone: {{ $vacancy->phone }}</p>
                    <div class="d-flex justify-content-between">
                        <p>Address: {{ $vacancy->address }}</p>
                        <div>
                            <a href="{{ route('admin.vacancies.edit', $vacancy->id) }}" class="btn btn-success"><i class="fas fa-edit" style="margin-right:5px;"></i>Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>


@endsection
