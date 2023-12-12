@extends('layouts.master')

@section('vacancy', 'nav-link active')
@section('title','Edit-Vacancy')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Vacancy</h1>
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
                <div class="mb-4 p-3" style="max-width: 1000px; margin: auto">
                    <form action="{{ route('admin.vacancies.update', $vacancy->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="title">Job Title</label>
                                <input class="form-control" type="text" name="title" id="title" value="{{old('title') ?? $vacancy->title}}">
                                @error('title')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="type">Job Type</label>
                                <input class="form-control" type="text" name="type" id="type" value="{{ old('type') ?? $vacancy->type}}">
                                @error('type')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="salary">Salary</label>
                                <input class="form-control" type="text" name="salary" id="salary" value="{{ old('salary') ?? $vacancy->salary }}">
                                @error('salary')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="working_hours">Working Hours</label>
                                <input class="form-control" type="text" name="working_hours" id="working_hours" value="{{ old('working_hours') ?? $vacancy->working_hours }}">
                                @error('working_hours')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-3">
                            <label style="margin-right: 10px;">Genders:</label>

                            <label for="male">Male</label>
                            <input type="checkbox" name="genders[]"
                                   id="male" value="Male" style="margin-right: 10px;"
                                {{ strstr($vacancy->genders, 'Male') || (old('genders') !== null && in_array('Male', old('genders')))  ? 'checked' : ''}}>

                            <label for="female">Female</label>
                            <input type="checkbox" name="genders[]"
                                   id="female" value="Female"
                                {{ strstr($vacancy->genders, 'Female') || old('genders') !== null && in_array('Female', old('genders'))  ? 'checked' : ''}}>

                            @error('genders')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="post_qty">Posts</label>
                                <input class="form-control" type="text" name="post_qty" id="post_qty" value="{{ old('post_qty') ?? $vacancy->post_qty }}">
                                @error('post_qty')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="deadline">Deadline</label>
                                <input class="form-control" type="date" name="deadline" id="deadline" value="{{ old('deadline') ?? $vacancy->deadline }}">
                                @error('deadline')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="description">Descriptions</label>
                                <textarea class="form-control" rows="8" name="description" id="description">{{ old('description') ?? $vacancy->description }}</textarea>
                                @error('description')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="requirements">Requirements</label>
                                <textarea class="form-control" rows="8" name="requirements" id="requirements">{{ old('requirements') ?? $vacancy->requirements }}</textarea>
                                @error('requirements')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="benefits">Benefits</label>
                                <textarea class="form-control" rows="4" name="benefits" id="benefits">{{ old('benefits') ?? $vacancy->benefits }}</textarea>
                                @error('benefits')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" name="email" id="email" value="{{ old('email') ?? $vacancy->email }}">
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="phone">Phone</label>
                                <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone') ?? $vacancy->phone }}">
                                @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="address">Address</label>
                                <input class="form-control" type="text" name="address" id="address" value="{{ old('address') ?? $vacancy->address }}">
                                @error('address')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <button class="btn btn-success mt-3"><i class="fas fa-edit" style="margin-right:5px;"></i>Update Post</button>
                    </form>

                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>


@endsection
