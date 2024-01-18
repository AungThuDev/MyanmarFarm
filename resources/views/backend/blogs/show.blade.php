@extends('layouts.master')

@section('article', 'nav-link active')
@section('title','Article-detail')
@section('title','News')
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
                <div class="card mb-4" style="max-width: 1200px; margin: auto;">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <img src="{{ $blog->image }}" style="width: 100%;">
                        </div>
                        @if ($blog->video)
                            <div class="video-container">
                                {!! $blog->video !!}
                            </div>
                        @endif
                    </div>
                    @if(count($blog->images))
                        <div class="row" style="margin: auto">
                            @foreach($blog->images as $image)
                                <div class="col" style="max-width: 200px;">
                                    <img src="{{ $image->image }}" alt="Blog Image" style="width: 100%;">
                                </div>
                            @endforeach
                        </div>
                    @endif
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
                            <p class="p-3" style="text-align: justify;">
                                {{$blog->first_body}}
                            </p>
                        </div>
                        <div class="col-12">
                            <p class="p-3" style="text-align: justify">
                                {{$blog->second_body}}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.content -->
    </div>
    <style>
        .video-container {
            position: relative;
            width: 100%;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>

@endsection
