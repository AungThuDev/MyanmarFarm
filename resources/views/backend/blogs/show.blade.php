@extends('layouts.master')

@section('article', 'nav-link active')
@section('title','Article-detail')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Article Details</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <a href="{{route('admin.blogs.index')}}" class="btn btn-success float-right"><i class="fas fa-arrow-alt-circle-left" style="margin-right: 5px;"></i>Back</a>
                    </div>

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card mb-4" style="max-width: 1200px; margin: auto">
                    <div class="row">
                        
                        <div class="col-sm-12 col-lg-12 d-flex justify-content-center">
                            <div class="d-flex justify-content-center mb-3 mt-3">
                            <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="Blog Image" width="1000" height="700"><br><br>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 1200px; margin: auto">
                    <div class="row">
                        <div class="col-6 px-4 pt-2">
                            <h3>{{$blog->title}}</h3> by Admin,  <small class="text-sm" style="font-weight: bold;">{{ $blog->created_at->diffForHumans() }}</small>
                        </div>
                        <div class="col-6 px-4 pt-2">
                            <a href="{{ route('admin.blogs.edit', $blog->id)}}" class="btn btn-success float-right"><i class="fas fa-edit" style="margin-right:5px;"></i>Edit Blog</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="p-3" style="text-align: justify">
                                {{$blog->body}}
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- /.content -->
    </div>


@endsection
