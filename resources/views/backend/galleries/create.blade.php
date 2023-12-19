@extends('layouts.master')
@section('gallery','nav-link active')
@section('title','Gallery')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Gallery</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="{{route('admin.galleries.index')}}" class="btn btn-outline-info">Back</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <form action="{{route('admin.galleries.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image</label><br>
                <input type="file" name="image" id="image" value="{{old('image')}}">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button class="btn btn-success">Create Image</button>
        </form>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection